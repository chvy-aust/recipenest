<?php

namespace App\Filament\Resources\Users\Pages;

use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Users\UserResource;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('viewChef')
                ->label('View Profile')
                ->url(fn($record) => route('chefs.show', $record->id))
                ->openUrlInNewTab()
                ->button()
                ->color('primary'),
            EditAction::make(),
        ];
    }
}
