<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
  
class AuthController extends Controller
{
    public function register()
    {
        return view('user/signUp');
    }

    public function displayhome()
    {
        return view('user/homepage');
    }
  

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed' ,
            'phoneNumber' => 'required|numeric|digits:10',

        ])->validate();
  
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phoneNumber' => $request->phoneNumber,

        ]);
  
        return redirect(route('login'));

    }
  

    public function login()
    {
        return view('user/logIn');
    }

  
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
  
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
  
        $request->session()->regenerate();
  
        // return redirect(route('dashboard'));

        $user = Auth::user();

        // Check the 'role' of the user and redirect accordingly.
        if ($user->role === 0) {
            // Redirect regular users to the user dashboard.
            return redirect(route('homepage'));
        } elseif ($user->role === 1) {
            // Redirect administrators to the admin dashboard.
            return redirect(route('dashboard'));
        }
    }
  

    // public function logout(Request $request)
    // {
    //     Auth::guard('web')->logout();
  
    //     $request->session()->invalidate();
  
    //     return redirect('login');
    // }
 
    public function profile()
    {
        return view('adminprofile');
    }
    

}