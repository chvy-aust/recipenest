<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                // TextInput::make('email')
                //     ->label('Email address')
                //     ->email()
                //     ->required(),
                // DateTimePicker::make('email_verified_at'),
                // TextInput::make('password')
                //     ->password()
                //     ->required(),
                // TextInput::make('role')
                //     ->required()
                //     ->default('user'),
                // TextInput::make('profile')
                //     ->required()
                //     ->default('images/profiles/default.jpg'),
                FileUpload::make('image_name')
                    ->image()
                    ->disk('profiles')
                    ->required(),
                TextInput::make('short_description')
                    ->required()
                    ->default('New Author'),
                Textarea::make('full_description')
                    ->columnSpanFull(),
                TextInput::make('social_media_1')
                    ->default('https://www.facebook.com/'),
                TextInput::make('social_media_2')
                    ->default('https://x.com/?lang=en'),
                TextInput::make('social_media_3')
                    ->default('https://www.instagram.com/'),
            ])
            ->columns(1);
    }
}
