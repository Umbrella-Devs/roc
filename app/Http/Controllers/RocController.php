<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Bird;
use App\Donate;
use App\JoinUs;
use App\Project;
use App\User;



class RocController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bird_store(Request $request)
    {
        $bird = new Bird;

        $bird->username = $request->username;
        $bird->name = $request->name; 
        $bird->number = $request->number;
        $bird->location = $request->location;
        $bird->activity = $request->activity;
        $bird->description = $request->description;
        $bird->save();

        return response()->json([
            'message' => 'New bird Added'
        ]);

    }


    public function donate_store(Request $request)
    {
        $donor = new Donate;

        $donor->first_name = $request->first_name;
        $donor->last_name = $request->last_name; 
        $donor->email = $request->email;
        $donor->phone = $request->phone;
        $donor->city = $request->city;
        $donor->country = $request->country;
        $donor->project_id = $request->project_id;
        $donor->save();


        return response()->json([
            'message' => 'Thanks for your Gift'
        ]);

    }


    public function join_store(Request $request)
    {
        $joiner = new JoinUs;

        $joiner->first_name = $request->first_name;
        $joiner->last_name = $request->last_name; 
        $joiner->email = $request->email;
        $joiner->phone = $request->phone;
        $joiner->city = $request->city;
        $joiner->country = $request->country;
        
        $joiner->save();

        return response()->json([
            'message' => 'New Joiner joined'
        ]);

    }

    public function project_store(Request $request)
    {
        $project = new Project;

        $project->name = $request->name;
        $project->image = $request->image; 
        $project->description = $request->description;
        $project->save();
        

        return response()->json([
            'message' => 'New project added'
        ]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
}
