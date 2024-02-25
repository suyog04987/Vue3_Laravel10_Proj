<?php

namespace App\Http\Controllers;

use App\Models\TeamRegistration;
use Exception;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeamRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['data' => 'ok', 'message' => 'Fetched Successfully']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            $data = new TeamRegistration();
            $data->clubName = $request->clubName;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->league = $request->league;   
            $data->save();
            return response()->json(['message'=>'Application Submitted Successfully'],Response::HTTP_OK);
        } catch(Exception $error){
            return response()->json(['message'=>$error->getMessage()],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamRegistration $teamRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamRegistration $teamRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamRegistration $teamRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamRegistration $teamRegistration)
    {
        //
    }
}
