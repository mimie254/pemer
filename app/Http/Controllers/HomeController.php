<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Car;
use App\Models\Team;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): string
    {
        $data=car::all();
        $data2=team::all();
        return view('home', compact('data', 'data2'));
    }



    public function redirect(): string
    {
        $data=car::all();
        $data2=team::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome');
        }
        else{
            return view('home', compact('data','data2') );
        }

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
        //
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
