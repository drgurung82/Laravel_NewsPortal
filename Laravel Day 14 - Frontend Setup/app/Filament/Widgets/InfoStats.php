<?php

namespace App\Filament\Widgets;

use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InfoStats extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    protected function getHeading(): ?string
    {
        return 'Overview';
    }
    protected function getDescription(): ?string
    {
        return 'An overview of Categories, Articles and Advertises.';
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total Categories', Category::count())
                ->description('All categories')
                ->descriptionIcon('heroicon-m-tag')
                ->color('success'),

            Stat::make('Total Articles', Article::count())
                ->description('Published articles')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info'),

            Stat::make('Total Advertisements', Advertise::count())
                ->description('Active advertisements')
                ->descriptionIcon('heroicon-m-megaphone')
                ->color('warning'),
        ];
    }
}
