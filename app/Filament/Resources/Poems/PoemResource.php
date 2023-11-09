<?php

namespace App\Filament\Resources\Poems;

use App\Filament\Resources\Poems\PoemResource\Pages;
use App\Filament\Resources\Poems\PoemResource\RelationManagers;
use App\Models\Poems\Poem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PoemResource extends Resource
{
    protected static ?string $model = Poem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
}
