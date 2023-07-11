<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationCodeMail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use function GuzzleHttp\Promise\all;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('auth.register');
    }

    public function teacher_register()
    {
        return view('auth.teacher_register');
    }
    public function student_register()
    {
        return view('auth.student_register');

    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([

            'name' => ['required', 'string', 'max:255'],
            'class_id' => ['required', 'string', 'max:11','unique:'.User::class],
            'batch_no' => ['required', 'string', 'max:10'],
            'phone_no' => ['required', 'string', 'max:15','unique:'.User::class],
            'category' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);



        $user = User::insert([

            'name' => $request->name,
            'class_id' => $request->class_id,
            'batch_no' => $request->batch_no,
            'category' => $request->category,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'created_at'=>carbon::now(),
        ]);

        event(new Registered($user));


        return redirect('login');


        //return redirect(RouteServiceProvider::HOME);
    }
}
