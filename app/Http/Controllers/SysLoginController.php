<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\SysLoginRequest;
use App\Models\SystemModel;


class SysLoginController extends Controller
{
    private $sysLogin;

    public function __construct (SystemModel $system) {
        $this->sysLogin = $system;
    }

    public function check(SysLoginRequest $request) {
        $data = $request->all();
        $res = $this->sysLogin->select('*')
            ->where('account', '=', $data['user'])
            ->where('passwd', '=', $data['passwd'])
            ->get();
        if ($res->count()) {
            session(['account' => $data['user']]);
            session(['role' => 'system']);
            return redirect('sys/index');
        } else {
            return redirect('/')->with('error', '密码或用户名错误');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('sys');
    }
}
