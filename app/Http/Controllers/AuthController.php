<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function home(){
        return view('Auth.home');
    }
    public function aboutPage(){
        return view('Auth.About');
    }
    public function blogPage(){
        return view('Auth.Blog');
    }
    public function contactPage(){
        return view('Auth.Contact');
    }

    

    // public function coursePage(){
    //     return view('Auth.Course');
    // }
    public function manageCoursePage(){
        return view('Auth.manageCourse');
    }
    public function checkoutPage(){
        //return view('Auth.checkout');
        if(Auth::check()){
            return view('Auth.checkout');
       }
        return redirect()->route('home')->with("fail","Can't Access , Login First !!!!");;
    }

    public function loginPost(Request $request){
        //print_r($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
             return redirect()->intended(route('home'))->with('success','Login SuccessFully');
             //return route('home')->with('success','Login SuccessFully');
                
        }
        return redirect(route('home'))->with('fail','Login details are not valid');
    }

    public function regPost(Request $request){
        //print_r($request->all());
        $request->validate([
            'username' => 'required|unique:users',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'dob' => 'required|date',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password', // Ensure confirm_password matches password
            'usertype' => 'required',
            'academic_details' => 'nullable',
            'area_of_study' => 'nullable',
        ]);
        $data['username'] = $request->username;
        $data['firstname']= $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['email']= $request->email;
        $data['phone'] = $request->phone;
        $data['dob']= $request->dob;
        $data['password'] = Hash::make($request->password);
        $data['confirm_password'] = Hash::make($request->confirm_password);
        $data['usertype'] = $request->usertype;
        // $data['academic_details']= $request->academic_details;
        $data['area_of_study']= $request->area_of_study;
        
        $user=User::create($data);
        if($user){
            return back()->with('success','You have Registered SuccessFully');
        }
        else{
            return back()->with('fail','Something wrong!!!');
        }
        
    }

    public function signOut(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        // return redirect(route('home'));
        return redirect(route('home'))->with('success','Logout SuccessFully');;
    }


}
