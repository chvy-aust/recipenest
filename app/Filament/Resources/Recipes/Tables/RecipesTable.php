<?php

namespace App\Filament\Resources\Recipes\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\ImageColumn;

class RecipesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name')
                    ->searchable()
                    ->preload(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('Image')
                    ->state(function (Model $record) {
                        return $record->getImage();
                    })
                    ->imageWidth(100)
                    ->imageHeight(100),
                TextColumn::make('total_time')
                    ->label('Read Time')
                    ->getStateUsing(fn($record) => "{$record->total_time} {$record->total_time_unit}")
                    ->sortable()
                    ->searchable(),
                TextColumn::make('publish_date')
                    ->dateTime('F jS Y')
                    ->sortable(),
                IconColumn::make('featured')
                    ->boolean(),
                IconColumn::make('published')
                    ->boolean(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
