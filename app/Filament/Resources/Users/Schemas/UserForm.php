<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('header_name')
                    ->image()
                    ->disk('headers')
                    ->label('Profile Header')
                    ->required(),
                FileUpload::make('image_name')
                    ->image()
                    ->disk('profiles')
                    ->label('Profile Picture')
                    ->required(),
                TextInput::make('short_description')
                    ->required()
                    ->default('Hello, nice to meet you!'),
                Textarea::make('full_description')
                    ->extraAttributes(['style' => 'resize: none;'])
                    ->columnSpanFull(),
                Select::make('badges')
                    ->relationship('badges', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->minItems(0)
                    ->maxItems(10)
                    ->helperText('Select a maximum of 10 badges to display on your profile!'),
                TextInput::make('twitter'),
                TextInput::make('tiktok'),
                TextInput::make('facebook'),
                TextInput::make('instagram'),
                TextInput::make('youtube'),
            ])
            ->columns(1);
    }
}
