<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bird;
use App\Http\Resources\Bird as BirdResource;


class BirdsController extends Controller
{
    public function index(){

        $bird = Bird::all();
        return BirdResource::collection($bird);

    }
}
