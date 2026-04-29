<?php

namespace App\Filament\Resources\Recipes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\DateTimePicker;

class RecipeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name')
                    ->searchable()
                    ->preload(),
                TextInput::make('title')
                    ->required()
                    ->maxLength(100),
                TextInput::make('short_description')
                    ->maxLength(500),
                RichEditor::make('full_description')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('ingredients')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('instructions')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image_name')
                    ->image()
                    ->disk('media')
                    ->required(),
                TextInput::make('total_time')
                    ->required()
                    ->numeric()
                    ->default(1),
                Select::make('total_time_unit')
                    ->required()
                    ->options([
                        'minutes' => 'Minutes',
                        'hours' => 'Hours',
                        'days' => 'Days',
                    ]),
                TextInput::make('yield')
                    ->required()
                    ->numeric()
                    ->default(1),
                DateTimePicker::make('publish_date')
                    ->default(today())
                    ->required(),
                Toggle::make('featured')
                    ->default(0)
                    ->label('Featured Recipe'),
                Toggle::make('published')
                    ->default(1)
                    ->label('Published'),
            ])
            ->columns(1);
    }
}
