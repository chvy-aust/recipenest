<?php

namespace App\Filament\Resources\Users\Pages;

use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Users\UserResource;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }

    //  ========================= IMPROVEMENTS
    public function mount(): void
    {
        $user = auth()->user();

        $this->redirect(route('filament.author.resources.users.view', ['record' => $user->getKey()]));
    }
}
