<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\CommentReview;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::paginate(config('app.paginate_number'));
        return view('client.pages.tour.index', compact('tours'));
    }

    public function show($id)
    {
        $tour = $this->checkTourExist($id);
        if($tour){
            $reviews = CommentReview::with('tour')
                    ->where('tour_id',$id)
                    ->where('type',config('app.review_type'))
                    ->get();
            return view('client.layouts.tour_details', compact('tour','reviews'));
        }
    }

    public function checkTourExist($id)
    {
        $tour = Tour::find($id);
        if(!$tour){
            Session::flash('Error', trans('language.error.error_find'));
            return false;
        } else {
            return $tour;
        }
    }
}
