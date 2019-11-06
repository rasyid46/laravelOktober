<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use DB;
class UsersController extends Controller
{
    public function signup()
    {
        return view('users.signup');
    }
    public function signup_store(UserRequest $request)
    {
        //// below code will register and automatic activate account user
        //Sentinel::register($request, true);
        //// or
        DB::beginTransaction();
        try {
            $role = Sentinel::findRoleBySlug('admin');
            $role_id = $role->id;
            $credentials = [
                'first_name'    => $request->input('first_name'),
                'last_name'    => $request->input('last_name'),
                'email'    => $request->input('email'),
                'password' => $request->input('password'),
            ];  
            $user = Sentinel::registerAndActivate($credentials);
            $user->roles()->attach($role_id);
            Session::flash('notice', 'Success create new user');
            DB::commit();
        } catch (\Throwable $errors) {
            DB::rollBack();
            Session::flash('error', $errors);
        }
        return redirect()->back();
    }
}
