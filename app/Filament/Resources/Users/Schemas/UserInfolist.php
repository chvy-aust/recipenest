<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\User;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                // Profile Section
                Section::make('Profile Details')
                    ->schema([
                        TextEntry::make('name'),
                        ImageEntry::make('image_name')->label('Profile Image')->disk('profiles')->imageHeight(150)->extraAttributes(['class' => 'mx-auto']),
                        TextEntry::make('short_description'),
                        TextEntry::make('full_description'),
                        TextEntry::make('social_media_1'),
                        TextEntry::make('social_media_2'),
                        TextEntry::make('social_media_3'),

                    ])
                    ->columnSpan(8),
                // Details Section
                Section::make('Account Details')
                    ->schema([
                        TextEntry::make('email')
                            ->label('Email address'),
                        TextEntry::make('email_verified_at')
                            ->dateTime(),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                    ])
                    ->columnSpan(4),



            ])
            ->columns(12);
    }
}
