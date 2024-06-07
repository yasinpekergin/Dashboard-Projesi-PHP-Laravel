<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\Gender;
use App\Models\Social;
use App\Models\Status;
use App\Models\Country;
use App\Models\Experience;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['role:super-administrator','permission:publish articles|edit articles']);

    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'privacy_policy' => ['required','min:1'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }
    public function index()
    {
        $users = User::with('roles')->get();
        return view("dashboard.user.index",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $countries=Country::all();
       $cities=City::all();
       $statuses=Status::all();
       $socials=Social::all();
       $genders=Gender::all();
       return view('dashboard.user.create',compact('countries','cities','statuses','socials','genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        User::create($request->all);

        return redirect('dashboard\users')->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

            $user = User::with('roles','experiences','profiles','Adresses')->where('id',$id)->get()->first();

            if($user==null){

                return redirect('dashboard\users')->with('warning','User not found');
            }
            else{

            return view("dashboard.user.show",compact('user'));
            }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::with('roles','experiences','profiles')->where('id',$id)->get()->first();

        if($user==null){

            return redirect('dashboard\users')->with('warning','User not found');
        }
        else{

            return view("dashboard.user.edit",compact('user'));
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validator($request->all())->validate();

        User::save($request->all);

        return redirect('dashboard\users')->with('success','User created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/dashboard/users')->withSuccess('User deleted Successfully!');
    }
}
