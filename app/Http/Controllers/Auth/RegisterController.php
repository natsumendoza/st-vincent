<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\ExamLimit;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Auth\Events\Registered;

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
    protected $redirectTo = '/home';

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
            'lrn' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:9|confirmed',
        ]);
        // |regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d).+$/
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $createdUser = User::create([
            'lrn' => $data['lrn'],
            'password' => bcrypt($data['password']),
        ]);

        $examLimit = array();
        $examLimit['lrn'] = $createdUser->lrn;
        $examLimit['exam_count'] = 0;
        ExamLimit::create($examLimit);

        return $createdUser;
    }

    public function register(Request $request)
    {
        $student = Student::all()->where('lrn', $request['lrn']);
        if (count($student) == 0) {
            return redirect('register')->with('error', 'LRN does not exist');
        } else {
            $this->validator($request->all())->validate();

            event(new Registered($user = $this->create($request->all())));

            $this->guard()->login($user);

            return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
        }
    }
    protected function registered(Request $request, $user)
    {
        //
    }
}
