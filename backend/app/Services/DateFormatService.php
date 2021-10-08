<?php
namespace App\Services;

class DateFormatService 
{
    public function getTotalDay($startDay, $endDay) {
        $totalDay = strtotime($endDay) - strtotime($startDay);
        $totalDay = $totalDay/60/60/24;

        return $totalDay;
    }
}