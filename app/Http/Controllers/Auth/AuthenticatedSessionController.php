<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $host = $request->getHost();
        $parts = explode('.', $host);
        $subdomain = $parts[0];
        if ($subdomain == 'phuzvtu' || $parts[1] == 'phuzvtu') {
            $data['user'] = $user = User::where('id', '888')->first();
        } else {
            $data['user'] = $user = User::where('brand_name', $subdomain)->first();
        }  
      
        // $data['user'] = $user = User::where('brand_name', $subdomain)->first();
        //for testing purpuse 
        // $data['user'] = $user = User::first();
        //end testing purpuse

        $data['company_id'] = $user->id;
       
        return view('auth.login',$data);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $check = $request->authenticate();
        // dd('here');
        if($check == 'runaway') {
            return redirect()->route('login') // Use the correct route name or URL
            ->withErrors("Invalid Credentials Provided")
            ->withInput();
        }

        $request->session()->regenerate();
        // return redirect('/dashboard');

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
