<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
  /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */

  // protected $redirectTo = RouteServiceProvider::HOME;
  public function redirectTo()
  {
    return '/';
  }

  protected function validator(array $data)
  {
    return Validator::make($data, [
      'email' => ['required', 'string', 'email'],
      'password' => ['required']
    ]);
  }

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  // protected function sendLoginResponse(Request $request)
  // {

  //   $remember_me = $request->has('remember_me') ? true : false;

  //   if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me)) {
  //     // 5 hrs
  //     $expiredTime = 300;
  //     $tokenName = Auth::getRecallername();
  //     Cookie::queue($tokenName, Cookie::get($tokenName), $expiredTime);

  //     $request->session()->regenerate();

  //     $this->clearLoginAttempts($request);

  //     if ($response = $this->authenticated($request, $this->guard()->user())) {
  //       return $response;
  //     }

  //     return $request->wantsJson()
  //       ? new JsonResponse([], 204)
  //       : redirect()->intended($this->redirectPath());
  //   }
  // }
}
