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
                        ImageEntry::make('header_name')
                            ->label('Header Picture')
                            ->disk('headers')
                            ->imageHeight(225)
                            ->imageWidth(512)
                            ->extraAttributes(['class' => 'mx-auto']),
                        ImageEntry::make('image_name')
                            ->label('Profile Picture')
                            ->disk('profiles')
                            ->imageHeight(150)
                            ->imageWidth(150)
                            ->extraAttributes(['class' => 'mx-auto']),
                        TextEntry::make('short_description')
                            ->label('Note'),
                        TextEntry::make('full_description')
                            ->label('Bio'),
                        TextEntry::make('twitter'),
                        TextEntry::make('tiktok'),
                        TextEntry::make('facebook'),
                        TextEntry::make('instagram'),
                        TextEntry::make('youtube'),

                    ])
                    ->columnSpan(8),
                // Details Section
                Section::make('Account Details')
                    ->schema([
                        TextEntry::make('email')
                            ->label('Email Address'),
                        TextEntry::make('email_verified_at')
                            ->dateTime(),
                        TextEntry::make('created_at')
                            ->dateTime(),
                    ])
                    ->columnSpan(4),



            ])
            ->columns(12);
    }
}
