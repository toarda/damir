<?php

        namespace App\Http\Controllers\Auth;

        use App\Http\Controllers\Controller;
        use App\Models\User;
        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Hash;

        class RegisterController extends Controller
        {
            public function create()
            {
                return view('auth.register');
            }

            public function store(Request $request)
            {
                $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:8|confirmed',
                ]);

                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->save();

                auth()->login($user);

                return redirect('/');
            }


}
