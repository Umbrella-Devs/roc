<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bird;
use App\Http\Resources\Bird as BirdResource;

use App\Project;
use App\Http\Resources\Project as ProjectResource;

use App\Gallery;
use App\Http\Resources\Gallery as GalleryResource;

class ApiController extends Controller
{
    
    public function bird(){

        $bird = Bird::all();
        return BirdResource::collection($bird);

    }


    public function project(){

        $project = Project::all();
        return ProjectResource::collection($project);

    }

    public function gallery(){
        $gallery = Gallery::all();
        return GalleryResource::collection($gallery);
    }

}
