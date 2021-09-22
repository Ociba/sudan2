<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
    /** 
     * This function gets users
    */
    protected function getUsers(){
        $get_users =DB::table('users')->where('category','user')->get();
        return view('members',compact('get_users'));
    }
    /** 
     * This function gets the registered users
    */
    public function createUser(){
        if(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This email is already taken');
        }elseif(request()->password == request()->password_confirmation){
            return $this->registerUser();
        }else{
            return redirect()->back()->withErrors('Make sure the two passwords match');
        }
    }
    private function registerUser(){
        $register_user =new User;
        $register_user ->name =request()->name;
        $register_user ->email =request()->email;
        $register_user ->password =Hash::make(request()->password);
        $register_user->category   = 'user';
        $register_user ->created_by =Auth::user()->id;
        $register_user ->save();
        return redirect()->back()->with('msg', 'You have successfully Registered Member');
    }
    /** 
     * This function deletes the member softly
    */
    protected function suspendUser($user_id){
        User::where('id', $user_id)->update(array('status' =>'suspended'));
        return redirect()->back()->with('msg', 'You have successfully Suspended Member');
    }
    /** 
     * This function activates the user incase he or she is involved again in the marking exercise
    */
    protected function activateUser($user_id){
        User::where('id',$user_id)->update(array('status'=>'active'));
        return redirect()->back()->with('msg', 'You have successfully activate Member');
    }
    /** 
     * This function deletes user permanently
    */
    protected function deleteUser($user_id){
        User::where('id',$user_id)->delete();
        return redirect()->back()->with('msg', 'You have successfully Deleted Member'); 
    }
}
