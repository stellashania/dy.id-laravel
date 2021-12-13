<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::LOGIN;
    // protected $redirectTo = '/login';

    public function redirectTo()
    {
        return '/login';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'min:5'],
            'gender' => ['required'],
            'address' => ['required', 'string', 'min:10'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
            'agreement' => ['accepted']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'gender' => $data['gender'],
        //     'address' => $data['address'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'role' => $data['role']
        // ]);

        // TESTING PURPOSES
        if ($data['role'] == "member") {
            $user = User::create([
                'name' => $data['name'],
                'gender' => $data['gender'],
                'address' => $data['address'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $data['role']
            ]);

            Cart::create([
                'user_id' => $user->id
            ]);

            return $user;
        } else {
            return User::create([
                'name' => $data['name'],
                'gender' => $data['gender'],
                'address' => $data['address'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $data['role']
            ]);
        }
        // TESTING PURPOSES
    }
}
