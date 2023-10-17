<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class UsersPerWeek extends ChartWidget
{
    protected static ?string $heading = 'Users Per Week';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
