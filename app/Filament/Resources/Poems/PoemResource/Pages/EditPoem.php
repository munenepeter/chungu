<?php

namespace App\Filament\Resources\Poems\PoemResource\Pages;

use App\Filament\Resources\Poems\PoemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPoem extends EditRecord
{
    protected static string $resource = PoemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
