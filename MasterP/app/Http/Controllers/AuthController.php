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

    // public function displayhome()
    // {
    //     return view('user/homepage');
    // }
  

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
        $user = auth()->user();

        // Check if the user has the required role (assuming 1 corresponds to "Roll No. 1")
        if ($user->role == 1) {
            return view('adminprofile');
        } else {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to view this page.');
        }
        }

    public function updateProfile(Request $request)
{
    $user = auth()->user();

    $request->validate([
        'name' => 'required',
        'password' => 'nullable|min:6',  // You can adjust validation rules as needed
    ]);

    $data = [
        'name' => $request->input('name'),
    ];

    // Only update the password if a new one is provided
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->input('password'));
    }

    $user->update($data);

    return redirect()->route('dashboard')->with('success', 'Profile updated successfully');
}


    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
       
        return view('crud_users.index' , compact('users'));
    }
    
    public function show(string $id)
    {
        $users = User::findOrFail($id);
  
        return view('crud_users.show', compact('users'));
    }

    public function edit(string $id)
    {
        $users = User::findOrFail($id);
  
        return view('crud_users.edit', compact('users'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);
  
        $users->update($request->all());
  
        return redirect(route('users'))->with('success', 'product updated successfully');
    }

    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
  
        $users->delete();
  
        return redirect(route('users'))->with('success', 'product deleted successfully');
    }

}