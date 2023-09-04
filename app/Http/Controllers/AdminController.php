<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Car;
use App\Models\Availability;
use App\Models\Team;




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

        $data->title = $request->title;
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
      $data->title=$request->title;
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
        $data->email=$request->email;
        $data->phone_number=$request->phone_number;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function viewavailability()
    {
       $data =availability::all();
        return view('admin.availability', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function viewteam()
    {

        $data=team::all();
        return view('admin.team', compact('data'));
    }


    public function uploadteam(Request $request)
    {
        $data = new team;
        $image=$request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('teamimage', $imagename);
        $data->image=$imagename;


        $data->name=$request->name;
        $data->position=$request->position;
        $data->save();
        return redirect()->back();
    }
    public function updateteam($id)
    {
        $data=team::find($id);
        return view('admin.updateteam', compact('data'));
    }
    public function updateteammember(Request $request, $id)
    {
        $data=team::find($id);

        if (!$data) {
            // Handle the case where the car data with the given ID was not found
            // For example, you might want to redirect back with an error message.
            return redirect()->back()->with('error', 'Car not found.');
        }

        $image = $request->file('image');

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('teamimage', $imagename);
            $data->image = $imagename;
        }

        $data->name=$request->name;
        $data->position=$request->position;
        $data->save();
        return redirect()->back();
    }
    public function deleteteam($id)
    {
        $data=team::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function search(Request $request){

        $search=$request->search;
        $data=car::where('title','like','%'.$search.'%')->orWhere('price','like','%'.$search.'%')->orWhere('description','like','%'.$search.'%')->get();
        return view('cars',compact('data'));

    }
}
