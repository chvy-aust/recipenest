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
                // TextColumn::make('user.name')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('category')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('short_description')
                //     ->searchable(),
                // ImageColumn::make('image'),
                ImageColumn::make('Image')
                    ->state(function (Model $record) {
                        return $record->getImage();
                    })
                    ->imageWidth(50)
                    ->imageHeight(50),
                // TextColumn::make('total_time')
                //     ->numeric()
                //     ->sortable(),
                // TextColumn::make('total_time_unit')
                //     ->searchable(),

                TextColumn::make('total_time')
                    ->label('Read Time')
                    ->getStateUsing(fn($record) => "{$record->total_time} {$record->total_time_unit}")
                    ->sortable()
                    ->searchable(),
                TextColumn::make('publish_date')
                    ->dateTime('F jS Y')
                    ->sortable(),
                // TextColumn::make('featured')
                //     ->numeric()
                //     ->sortable(),
                IconColumn::make('featured')
                    ->boolean(),
                IconColumn::make('public')
                    ->boolean(),
                // TextColumn::make('public')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
