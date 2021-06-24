<?php

namespace App\Http\Controllers;


use App\User;
use App\UserInformation;
use Illuminate\Http\Request;

class UserInformationController extends Controller
{
    public function allUsers(){
        $users = User::all();
        return view('back-end.account.show', ['users'=>$users]);
    }

    public function edit($id)
    {
        $user =User::find($id);
        return view('back-end.account.edit',['user'=>$user]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->role = $request->role;
        $user->status = $request->status;
        $user->update();
        return redirect('/account/show')->with('message','Account updated successfully!');
    }

    public function show()
    {
        $users = User::all();
        return view('back-end.account.show',['users'=>$users]);
    }


    public function details($id)
    {
        $user = User::find($id);
        return view('back-end.account.details',['user'=>$user]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('message','Account Deleted Successfully');
    }

    public function create()
    {
        return view('back-end.account.edit-profile');
    }
    public function showProfile($id)
    {
        $user = User::find($id);
        return view('back-end.account.show-profile',['user'=>$user]);
    }
    public function editProfile($id)
    {
        $user = User::find($id);
        return view('back-end.account.edit-profile',['user'=>$user]);
    }
    public function updateProfile(Request $request)
    {
        $user = User::find($request->id);
        $user->mobile = $request->mobile;
        $user->dob = $request->dob;
        $user->interests = $request->interests;
        $user->region = $request->region;
        $user->street_or_village = $request->street_or_village;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->description = $request->description;
        $user->update();
//        redirect ()->route('route_name', ['param'=>'value']);
        return redirect()->route('account/show-profile',['id'=>$user->id])->with('message','Profile Updated Successfully!');
    }


}
