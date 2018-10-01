<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helpers\HnHelper;

class ApiController extends Controller
{
    public function index()
    {
        $data = ['version'=>'1.0', 'status'=>'active'];
        return response()->json(compact('data'));
    }


    public function item($id)
    {
        $response = HnHelper::getItem($id);
        return response()->json($response);
    }


    public function news()
    {
        $new = HnHelper::getNewStories();

        return view('news.new', compact('new'));
    }


    public function tops()
    {
        $tops = HnHelper::getTopStories();

        return view('news.top', compact('tops'));
    }


    public function bests()
    {
        $best = HnHelper::getBestStories();

        return view('news.bests', compact('best'));
    }


    public function user($id)
    {
        $response = HnHelper::getUserWithStories($id);
        return response()->json($response);
    }
}
