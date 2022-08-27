<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        $lostpost = DB::table('posts')
            ->where('type', 'lostpost')
            ->count();
        $foundpost = DB::table('posts')
            ->where('type', 'foundpost')
            ->count();
        return $this->chart->donutChart()
            ->setTitle('Lost and Found posts.')
            ->setSubtitle('Posted as lost of or found')
            ->addData([$lostpost, $foundpost])
            ->setLabels(['Lost', 'Found']);
    }
}
