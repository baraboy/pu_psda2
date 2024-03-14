<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use App\Models\gallery;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (gallery $record) {
                    if ($record->photo){
                        Storage::disk('public')->delete($record->photo);
                    }
                }
            ),

        ];
    }
}
