<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ChefStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $chef = auth()->user();
        $recipes = $chef->recipes();
        $totalRecipes = $recipes->count();
        $totalComments = $recipes->withCount('comments')->get()->sum('comments_count');

        $avgComments = 0;
        if ($totalRecipes) {
            $avgComments = round($totalComments / $totalRecipes, 1);
        }

        return [
            Stat::make('Total Recipes', $totalRecipes)
            ->icon('heroicon-o-archive-box'),
            Stat::make('Total Comments', $totalComments)
            ->icon('heroicon-o-chat-bubble-left-ellipsis'),
            Stat::make('Avg. Comments', $avgComments)
            ->icon('heroicon-o-paper-airplane')
        ];
    }
}
