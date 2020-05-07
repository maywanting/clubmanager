<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CustomerModel;
use App\Models\CustomerCoach;
use App\Models\CoachModel;
use App\Models\BuildingClassModel;
use App\Models\CustomerBuildingClassModel;

use Illuminate\Support\Facades\Session;


class CustomerController extends Controller
{
    protected $customer;
    protected $customerCoach;
    protected $coach;
    protected $build;
    protected $cusBuild;

    public function __construct(CustomerModel $customer, CustomerCoach $customerCoach, CoachModel $coach, BuildingClassModel $build, CustomerBuildingClassModel $cusBuild) {
        $this->customer = $customer;
        $this->customerCoach = $customerCoach;
        $this->coach = $coach;
        $this->build = $build;
        $this->cusBuild = $cusBuild;
    }

    public function list() {
        $customers = $this->customer->select('*')->get()->toArray();
        $coaches = $this->coach->select('id', 'name')->get()->toArray();
        $coachSet = [];
        foreach ($coaches as $coach) {
            $coachSet[$coach['id']] = $coach['name'];
        }

        $builds = $this->build->select('*')->get()->toArray();
        $buildSet = [];
        foreach ($builds as $build) {
            $buildSet[$build['id']] = $build['name'];
        }

        foreach ($customers as $key => $customer) {
            $coach = $this->customerCoach->select('*')->where('customer_id', '=' , $customer['id'])->get();
            $customers[$key]['coachName'] = '';
            if ($coach->count() > 0) {
                $customers[$key]['coachName'] = $coachSet[$coach->first()->coach_id];
            }

            $customers[$key]['buildingClass'] = '';
            $builds = $this->cusBuild->select('*')->where('customer_id', '=', $customer['id'])->get();
            foreach ($builds as $build) {
                $customers[$key]['buildingClass'] .= $buildSet[$build->building_class_id] . '  ';
            }
        }
        return view('customerList', compact('customers'));
    }

    public function signup(Request $request) {
        $data = $request->all();
    
        $customer = new CustomerModel();
        $customer->account = $data['account'];
        $customer->name = $data['name'];
        $customer->passwd = $data['passwd'];
        $customer->save();
        $info = [
            'name' => $data['name'],
            'is_alert' => 1,
            'content' => '注册成功',
            'login' => 1,
            'menu' => 'index',
        ];
        session(['account' => $data['account']]);
        session(['role' => 'user']);
        session(['id' => $customer->id]);
        return view('index', compact('info'));
    }
}
