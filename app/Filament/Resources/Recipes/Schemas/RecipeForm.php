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
                // Select::make('user_id')
                //     ->relationship('user', 'name')
                //     ->required()
                //     ->default(fn() => auth()->id())
                //     ->hidden(),

                // TextInput::make('user_name')
                //     ->label('Author')
                //     ->formatStateUsing(fn($state) => auth()->user()->name),


                TextInput::make('category')
                    ->required()
                    ->default('food'),
                TextInput::make('title')
                    ->required(),
                TextInput::make('short_description')
                    ->required()
                    ->default('Short Description'),
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
                TextInput::make('total_time_unit')
                    ->required()
                    ->default('minutes'),
                DateTimePicker::make('publish_date')
                    ->default(today())
                    ->required(),
                Toggle::make('featured')
                    ->default(0)
                    ->label('Featured Recipe'),
                Toggle::make('public')
                    ->default(1)
                    ->label('Published'),
            ])
            ->columns(1);
    }
}
