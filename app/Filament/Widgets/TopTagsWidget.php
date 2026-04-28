<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class TopTagsWidget extends ChartWidget
{
    protected ?string $heading = 'Top Tags Widget';

    protected function getData(): array
    {
        $chef = auth()->user();
        $recipes = $chef->recipes()->get();
        $topTags = $recipes->flatMap->tags->countBy('name')->sortDesc()->take(5);

        return [
                'datasets' => [
                [
                    'data' => $topTags->values()->toArray(),
                    'backgroundColor' => '#6b9c73',
                ],
            ],
            'labels' => $topTags->keys()->toArray(),
        ];
    }

    protected function getOptions(): array
{
    return [
        'plugins' => [
            'legend' => [
                'display' => false,   // ensure the label is hidden
            ],
        ],
    ];
}

    protected function getType(): string
    {
        return 'bar';
    }
}
