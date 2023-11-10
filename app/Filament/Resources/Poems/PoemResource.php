<?php

namespace App\Filament\Resources\Poems;

use App\Filament\Resources\Poems\PoemResource\Pages;
use App\Filament\Resources\Poems\PoemResource\RelationManagers;
use App\Models\Poems\Poem;
use App\Models\Poems\Category;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class PoemResource extends Resource
{
    protected static ?string $model = Poem::class;

    protected static ?string $slug = 'manage-poems';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Manage Poems';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                    ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->unique(Poem::class, 'slug', ignoreRecord: true),

                                Forms\Components\MarkdownEditor::make('content')
                                    ->required()
                                    ->columnSpan('full'),

                                Forms\Components\Select::make('poem_author_id')
                                    ->relationship('author', 'name')
                                    ->searchable()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('email')
                                            ->label('Email address')
                                            ->email()
                                            ->required()
                                            ->maxLength(255),
                                    ])
                                    ->required(),

                                Forms\Components\Select::make('poem_category_id')
                                    ->relationship('category', 'name')
                                    ->searchable()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                                        Forms\Components\TextInput::make('slug')
                                        ->dehydrated()
                                        ->required()
                                        ->unique(Category::class, 'slug', ignoreRecord: true),
                                    ])
                                    ->required(),

                                Forms\Components\DatePicker::make('published_at')
                                    ->label('Published Date'),

                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => fn (?Poem $record) => $record === null ? 3 : 2]),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (Poem $record): ?string => $record->created_at?->diffForHumans()),

                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (Poem $record): ?string => $record->updated_at?->diffForHumans()),
                    ])
                    ->columnSpan(['lg' => 1])
                    ->hidden(fn (?Poem $record) => $record === null),
            ])
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('slug')
                ->searchable()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            Tables\Columns\TextColumn::make('author.name')
                ->searchable()
                ->sortable()
                ->toggleable(),

            Tables\Columns\BadgeColumn::make('status')
                ->getStateUsing(fn (Poem $record): string => $record->published_at?->isPast() ? 'Published' : 'Draft')
                ->colors([
                    'success' => 'Published',
                ]),

            Tables\Columns\TextColumn::make('category.name')
                ->searchable()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: false),

            Tables\Columns\TextColumn::make('published_at')
                ->label('Published Date')
                ->date(),
        ])
        ->filters([
            Tables\Filters\Filter::make('published_at')
                ->form([
                    Forms\Components\DatePicker::make('published_from')
                        ->placeholder(fn ($state): string => 'Dec 18, ' . now()->subYear()->format('Y')),
                    Forms\Components\DatePicker::make('published_until')
                        ->placeholder(fn ($state): string => now()->format('M d, Y')),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['published_from'] ?? null,
                            fn (Builder $query, $date): Builder => $query->whereDate('published_at', '>=', $date),
                        )
                        ->when(
                            $data['published_until'] ?? null,
                            fn (Builder $query, $date): Builder => $query->whereDate('published_at', '<=', $date),
                        );
                })
                ->indicateUsing(function (array $data): array {
                    $indicators = [];
                    if ($data['published_from'] ?? null) {
                        $indicators['published_from'] = 'Published from ' . Carbon::parse($data['published_from'])->toFormattedDateString();
                    }
                    if ($data['published_until'] ?? null) {
                        $indicators['published_until'] = 'Published until ' . Carbon::parse($data['published_until'])->toFormattedDateString();
                    }

                    return $indicators;
                }),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),

            Tables\Actions\EditAction::make(),

            Tables\Actions\DeleteAction::make(),
        ])
        ->groupedBulkActions([
            Tables\Actions\DeleteBulkAction::make()
                ->action(function () {
                    Notification::make()
                        ->title('Now, now, don\'t be cheeky, leave some records for others to play with!')
                        ->warning()
                        ->send();
                }),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPoems::route('/'),
            'create' => Pages\CreatePoem::route('/create'),
            'edit' => Pages\EditPoem::route('/{record}/edit'),
        ];
    }
    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['author', 'category']);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug', 'author.name', 'category.name'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        /** @var Poem $record */
        $details = [];

        if ($record->author) {
            $details['Author'] = $record->author->name;
        }

        if ($record->category) {
            $details['Category'] = $record->category->name;
        }

        return $details;
    }
}
