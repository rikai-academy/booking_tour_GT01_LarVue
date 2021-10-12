<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Rating;
use App\Models\Tour;
use App\Models\User;
use App\Services\DateFormatService;
use Illuminate\Http\Request;

class TourController extends Controller
{

    protected $dateFormatService;

    public function __construct(DateFormatService $dateFormatService)
    {
        $this->dateFormatService = $dateFormatService;
    }

    public function index()
    {
        $images = Image::where('tour_id', 1)->get();
        return response()->json($images);
    }

    public function showBySlug($slug)
    {
        $tour = Tour::getBySlug($slug)->getByActive()->first();
        $images = Image::getByTourId($tour->id)->get();
        $tour['images'] = $images;

        $avgStar = Rating::getByTourId($tour->id)->get()->avg('star');
        $avgStar = number_format((float)$avgStar, 1, '.', '');
        $tour['star'] = $avgStar;

        $ratings = Rating::getByTourId($tour->id)->get();
        $tour['ratings'] = $ratings;
        
        $totalDay = $this->dateFormatService->getTotalDay($tour->start_date, $tour->end_date);
        $tour['totalDay'] = $totalDay;

        return response()->json($tour);
    }
}
