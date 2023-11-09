<?php

namespace App\Filament\Resources\Poems\PoemResource\Pages;

use App\Filament\Resources\Poems\PoemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePoem extends CreateRecord
{
    protected static string $resource = PoemResource::class;
}
