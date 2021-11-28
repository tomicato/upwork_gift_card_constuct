<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function index()
    {
        if(Gate::denies('logged-in')){
            dd('no access allowed!');
        }

        return view('admin.users.index', ['users' => User::paginate(10)]);
        //dd('you need to be admin');

    }


    public function create()
    {
        return view('admin.users.create', ['roles' => Role::all()]);
    }


    public function store(StoreUserRequest $request)
    {
        //$validatedData = $request->validated();
       // $user = User::create($validatedData);
        $newUser = new CreateNewUser();
        $user = $newUser->create($request->only(['name', 'email', 'password', 'password_confirmation']));
        $user->roles()->sync($request->roles);
        $request->session()->flash('success', "You have successfully created user - $user->name");
        return redirect()->route('admin.users.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('admin.users.edit', ['user' => User::find($id), 'roles' => Role::all()]);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if(!$user){
            $request->session()->flash('error', "You can not edit this user!");
            return redirect()->route('admin.users.index');
        }
        $user->update($request->except(['_token', 'roles']));
        $user->roles()->sync($request->roles);
        $request->session()->flash('success', "You have successfully update user - $user->name");
        return redirect()->route('admin.users.index');
    }


    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        $request->session()->flash('success', "You have successfully deleted user - $user->name");
        return redirect()->route('admin.users.index');
    }
}

