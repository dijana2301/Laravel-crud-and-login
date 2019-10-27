<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class ClubController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }


    public function index()
    {
        return view('/club.clubs', ['clubs' => Club::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history', 'thumbnail']);


        if (count($data) > 0) {
            $club = new Club();
            $club->name = $data['name'];
            $club->address = $data['address'];
            $club->email = $data['email'];
            $club->website = $data['website'];
           

            $club->save();

            return redirect("/clubs");
        }
        return view('/club.newClub');
    }


    public function edit($id)
    {
        $club = Club::where('id', $id)->first();
        return view('/club.editClub', compact('club'));
    }


    public function update($id, Request $request)
    {
        $data = $request->only(['name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history', 'thumbnail']);
       
        $club = Club::where('id', $id)->first();
        $club->name = $data['name'];
        $club->address = $data['address'];
        $club->email = $data['email'];
        $club->website = $data['website'];
    

        $club->save();

        return redirect('/clubs');
    }

    public function destroy($id, Request $request)
    {
        $club = Club::where('id', $id)->first();
        $club->delete();

        return redirect('/clubs');
    }
    
}
