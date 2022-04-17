<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Users;

class LoginControllerAPI extends Controller
{
    public function exe(Request $request)
    {
        // get username & password
        $username = $request->post('username');
        $password = $request->post('password');

        // hash password
        $pass = '$BSSVPRNHGB$' . substr(md5(md5($password)), 0, 50);
        // dd($pass);

        // Use SSO API ? 1: Use | 0: Not Use
        $use_sso = 0;

        // by pass SSO API
        $byPassArr = [
            "@btp.or.id",
            "@ib.btp.or.id"
        ];

        foreach ($byPassArr as $item) {
            if (strpos($username, $item))
                $use_sso = 0;
        }

        // use SSO API
        if ($use_sso) {
            // sso api code here
        }

        // not use SSO API
        else {
            $data = Users::where('user_username', $username)->first();

            if (!$data) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Email tidak ditemukan'
                ]);
            }

            if ($data->user_password != $pass) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Password salah',
                ]);
            }
        }

        // Set Roles
        $roles = [];
        foreach ($data->user_role as $user_role) {
            array_push($roles, $user_role->role->role_name);
        }

        if (empty($roles)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Anda belum mempunyai akses kedalam Aplikasi. Silahkan hubungi admin kami.',
            ]);
        }

        Session::flush();
        Session::put('login', true);
        Session::put('userId', $data->user_id);
        Session::put('userFullname', $data->user_fullname);
        Session::put('userRoles', $roles);

        return redirect('/');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
