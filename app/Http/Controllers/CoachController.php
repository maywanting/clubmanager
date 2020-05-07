<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CoachModel;
use App\Models\CustomerCoach;

class CoachController extends Controller
{
    protected $coach;
    protected $customerCoach;

    public function __construct(CoachModel $coach, CustomerCoach $customerCoach) {
        $this->coach = $coach;
        $this->customerCoach = $customerCoach;
    }

    public function index() {
        $datas = $this->coach->select('*')->get()->toArray();
        
        return view('coachIndex', compact('datas'));
    }

    public function add() {
        return view('coachAdd');
    }

    public function store(Request $request) {
        $data = $request->all();
        $coach = new CoachModel();
        $coach->name = $data['name'];
        $coach->is_recommended = $data['is_recommend'];
        $coach->description = $data['description'];

        $coach->save();
        return redirect('sys/coach/index');
    }

    public function edit($id) {
        $data = $this->coach->findOrFail($id);
        return view('coachEdit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $coach = $this->coach->findOrFail($id);
        $coach->name = $data['name'];
        $coach->is_recommended = $data['is_recommend'];
        $coach->description = $data['description'];
        $coach->save();
        return redirect('sys/coach/index');

    }

    public function delete($id) {
        $coach = $this->coach->findOrFail($id);
        $coach->delete();
        return redirect('sys/coach/index');
    }

    public function cList() {
        //$login = (isset(session('role') && ($role == 'user'));
        
        //$flag = 0;
        $role = session('role');
        if (isset($role) && ($role == 'user')) {
            $flag = 1;
            $coaches = $this->coach->select('*')->get();
        } else {
            $flag = 0;
            $coaches = $this->coach->select('*')->where('is_recommended', '=', 1)->get();
        }

        $info = ['login' => 0, 'menu' => 'coach'];
        
        if (isset($role) && ($role == 'user')) {
            $flag = 1;
            $info['login'] = 1;
            $info['name'] = session('account');
            $info['coach'] = 0;
            $coach = $this->customerCoach->select('coach_id')->where('customer_id', '=', session('id'));
            if ($coach->count() > 0) {
                $info['coach'] = $coach->first()->coach_id;
            }
        }

        return view('cCoach', compact('coaches', 'flag', 'info'));
    }

    public function select($id) {
        $re = new CustomerCoach();
        $re->coach_id = $id;
        $re->customer_id = session('id');
        $re->save();

        return redirect('coach');
    }
}
