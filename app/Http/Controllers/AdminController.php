<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Car;
use App\Models\Availability;




class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function users()
    {
        $data=user::all();
        return view('admin.users',compact('data'));
    }
    public function deleteusers($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deletecar($id){
        $data=car::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id){
        $data=car::find($id);
        return view('admin.updateview', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = car::find($id);

        if (!$data) {
            // Handle the case where the car data with the given ID was not found
            // For example, you might want to redirect back with an error message.
            return redirect()->back()->with('error', 'Car not found.');
        }

        $image = $request->file('image');

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('carimage', $imagename);
            $data->image = $imagename;
        }

        $data->Title = $request->Title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }


    public function carlist()
    {
        $data=user::all();
        $data=car::all();
        return view('admin.carlist', compact('data'));
    }
    public function upload(Request $request)
    {
      $data = new car;
      $image=$request->image;
      $imagename =time().'.'.$image->getClientOriginalExtension();
      $request->image->move('carimage', $imagename);
      $data->image=$imagename;
      $data->Title=$request->Title;
      $data->price=$request->price;
      $data->description=$request->description;
      $data->save();
      return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function availability(Request $request)
    {
        $data = new availability;

        $data->name=$request->name;
        $data->model=$request->model;
        $data->make=$request->make;
        $data->yom=$request->yom;
        $data->price=$request->price;
        $data->save();
        return redirect()->back();
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
