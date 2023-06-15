<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class DataController extends Controller
{
    // Admin Homepage
    public function index(Request $request){
        $data['userinfos'] = Userinfo::orderBy('name', 'asc')->paginate(10);
        $filter = $request->query('filter');

        if(!empty($filter)){
            $useraccount = Userinfo::sortable()
                ->where('name','like','%'.$filter.'%')
                ->orWhere('phone','like','%'.$filter.'%')
                ->orWhere('email','like','%'.$filter.'%')
                ->orWhere('username','like','%'.$filter.'%')
                ->orWhere('company','like','%'.$filter.'%')
                ->orWhere('nationality','like','%'.$filter.'%')
                ->orWhere('is_admin','like','%'.$filter.'%')
                ->paginate(10);
        }else{
            $useraccount = userinfo::sortable()
                ->paginate(10);
        }

        return view('datatable.index', $data)->with('userinfos',$useraccount)->with('filter',$filter);
    }

    // Create resource
    public function create() {
        return view('datatable.create');
    }

    // Store resource
    public function store(Request $request){
        $request -> validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required',
            'company' => 'required',
            'nationality' => 'required'
        ]);

        $userinfo = new User;
        $userinfo->name = $request->name;
        $userinfo->phone = $request->phone;
        $userinfo->email = $request->email;
        $userinfo->password = Hash::make($request->password);
        $userinfo->username = $request->username;
        $userinfo->company = $request->company;
        $userinfo->nationality = $request->nationality;
        $userinfo->is_admin = $request->is_admin;
        $userinfo->save();
        return redirect()->route('admin.home')->with('success','User has been created successfully!');
    }

    public function edit(Userinfo $userinfo){
        return view('datatable.edit', compact('userinfo'));
    }

    public function update(Request $request, $email){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required',
            'company' => 'required',
            'nationality' => 'required'
        ]);

        $userinfo = User::find($email);
        $userinfo->name = $request->name;
        $userinfo->phone = $request->phone;
        $userinfo->email = $request->email;
        $userinfo->password = Hash::make($request->password);
        $userinfo->username = $request->username;
        $userinfo->company = $request->company;
        $userinfo->nationality = $request->nationality;
        $userinfo->is_admin = $request->is_admin;
        $userinfo->save();
        return redirect()->route('admin.home')->with('success', 'User has been edited successfully');
    }

    public function destroy(userinfo $userinfo){
        $userinfo->delete();
        return redirect()->route('admin.home')->with('success','User has benn deleted successfully');
    }


}
