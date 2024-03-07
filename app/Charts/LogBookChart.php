<?php

namespace App\Charts;

use App\Models\masterlogbook;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LogBookChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $totalbook = masterlogbook::all()->count();
        $openbook = masterlogbook::where('status', 'new')->get()->count();
        $closebook = masterlogbook::where('status', 'done')->get()->count();
        $pendingbook = masterlogbook::where('status', 'on Progress')->get()->count();
        return $this->chart->barChart()
            ->setTitle('Log Book')
            ->setSubtitle('Total Log Book')
            // ->setGrid(false, '#3F51B5', 1)
            ->addData('Total', [$totalbook])
            ->addData('Open', [$openbook])
            ->addData('Close', [$closebook])
            ->addData('Pending', [$pendingbook])
            ->setXAxis(['Total', 'Open', 'Close', 'Pending']);
        return $this->chart->barChart();
        
    }
}
