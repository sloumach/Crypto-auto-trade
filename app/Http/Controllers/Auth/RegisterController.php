<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Invitation;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DB;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'firstname' => ['required', 'string', 'max:35'],
            'lastname' => ['required', 'string', 'max:35'],
            'datenaissance' => ['required', 'string', 'max:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'invitation_code' => ['required', 'string', 'min:8', 'max:8'],
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
        $random = Str::random(8);
        $exists = DB::table('users')
            ->where('inv_code', $random)
            ->exists();
        while ($exists):
            $random = Str::random(8);
            $exists = DB::table('users')
                ->where('inv_code', $random)
                ->exists();
        endwhile;
        // $prf= DB::table('users')->where('inv_code',$data['invitation_code'] )->value('id');

        // Invitation::create([
        //     'inv_parrain' => $prf,
        //     'inv_newuser' => $random,
        // ]);

        return User::create([
            'nom' => $data['lastname'],
            'prenom' => $data['firstname'],
            'date_de_naissance' => $data['datenaissance'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'inv_code' => $random,

        ]);
    }
}
