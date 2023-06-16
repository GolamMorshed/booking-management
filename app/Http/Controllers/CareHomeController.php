<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Session;

class CareHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_homes = Home::all();   
        return view('admin.care_home.homes')->with('homes', $all_homes);
    }

   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.care_home.create_care_homes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->storeOrUpdate($request);
    }

    public function storeOrUpdate(Request $request, string $id = null)
    {
        $home = $id ? Home::findOrFail($id) : new Home();
        $home->home_name = $request->input('home_name');
        $home->email = $request->input('email');
        $home->phone_no = $request->input('phone_no');
        $home->address1 = $request->input('address1');
        $home->address2 = $request->input('address2');
        $home->postcode = $request->input('postcode');
        $home->city = $request->input('city');
        $home->country = $request->input('country');
        $home->contact_person_name = $request->input('contact_person_name');
        $home->contact_person_phone_no = $request->input('contact_person_phone_no');
        $home->contact_person_email = $request->input('contact_person_email');
    
        if ($home->save()) {
            $message = $id ? 'Data updated successfully.' : 'Data saved successfully.';
            Session::flash('Success', $message);
            return redirect()->back();
        } else {
            echo "Unable to save data";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $home = Home::findOrFail($id);
        return view('admin.care_home.single_home')->with('single_home',$home);
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
        return $this->storeOrUpdate($request, $id);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $home = Home::findOrFail($id);

        if ($home->delete()) {
            Session::flash('Success',"Data Delete Sucessfully");
            return redirect()->back();
        } else {
            Session::flash('Error', 'Unable to delete data.');
        }
    }
}
