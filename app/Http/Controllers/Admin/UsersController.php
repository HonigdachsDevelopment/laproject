<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    /**
     * UsersController constructor.
     * middleware 'auth' to check users Auth
     *
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index')->with ('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }
        /// dd($user);
        $roles = Role::all();

        return view('admin.users.edit')->with([
            'user' => $user,
            'roles'=> $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //dd($request);
         $user->roles()->sync($request->roles);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->save();

         return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }

        //dd($request);
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
