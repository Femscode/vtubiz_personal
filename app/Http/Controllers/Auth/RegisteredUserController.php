<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Traits\ApiUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Traits\CreateCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;


class RegisteredUserController extends Controller
{
  


    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        // return view('auth.register');
        $host = $request->getHost();
        $parts = explode('.', $host);
        $subdomain = $parts[0];


       
        if ($subdomain == 'phuzvtu' || $parts[1] == 'phuzvtu') {
            $data['user'] = $user = User::where('id', '888')->first();
        } else {
            $data['user'] = $user = User::where('brand_name', $subdomain)->first();
        }   
        $data['referralId'] = isset($_GET['referral_code']) ? $_GET['referral_code'] : '';   
        $data['company_id'] = $user->id;
        return view('auth.register',$data);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'company_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect()->route('register') // Use the correct route name or URL
                ->withErrors($validator)
                ->withInput();
        }
        // dd($data);
        $uid = Str::uuid();
        // dd($request->all()); $uid = Str::uuid();
      
            if(strlen($data['phone']) == 10) {
                $data['phone'] = "0".$data['phone'];
            }     

            $user = User::create([
                'name' => $data['name'],               
                'company_id' => $data['company_id'],
                'referred_by' => $data['referred_by'] ?? "VTUBIZ",
                'email' => $data['email'],
                'phone' => $data['phone'],
                'uuid' => $uid,
                'user_type' => 'client_customer',
                'password' => Hash::make($data['password']),
            ]);
      

        event(new Registered($user));
        // $user->sendEmailVerificationNotification();
        Auth::login($user);
        return redirect('/dashboard');
        // return $user;
    }

  
}
