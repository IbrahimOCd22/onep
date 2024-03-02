<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\type_probleme;
use App\Models\typesdeprobleme;
use App\Models\User;
use Illuminate\Http\Request;

class typeprobleme extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noms=typesdeprobleme::all();
        $Pc=$noms->where("Type_Problemes_id",1);
        $Soft=$noms->where("Type_Problemes_id",2);
        $Res=$noms->where("Type_Problemes_id",3);
        $Imp=$noms->where("Type_Problemes_id",4);
        $prblms=type_probleme::all();
        return view("prblm", compact("prblms","Pc","Soft","Res","Imp"));
        //
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
        $prblm = User::create([
            "matricule"=>$request->matricule,
            "site"=>$request->Site,
            "motif"=>$request->motif,



            ]);
            return redirect()->route('prblm.index')->with('x','Merci');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
