<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\CustomerModel;

class LoginController extends Controller
{
    protected $customer;

    public function __construct(CustomerModel $customer) {
        $this->customer = $customer;
    }

    public function index() {

        $info = ['login' => 0, 'menu' => 'index'];
        $name = session('account');
        if (isset($name)) {
            $info['login'] = 1;
            $info['name'] = $name;
        }
        return view('index', compact('info'));
    }

    public function check(Request $request) {
        $data = $request->all();

        $res = $this->customer->select('*')
            ->where('account', '=', $data['user'])
            ->where('passwd', '=', $data['passwd'])
            ->get();

        if ($res->count()) {
            session(['account' => $data['user']]);
            session(['role' => 'user']);
            session(['id' => $res->first()->id]);
            $info = [
                'name' => $data['user'],
                'is_alert' => 1,
                'content' => '登陆成功',
                'login' => 1,
                'menu' => 'index',
            ];
            return view('index', compact('info'));
        } else {
            return redirect('login');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }
}
