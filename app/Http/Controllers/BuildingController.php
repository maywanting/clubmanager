<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BuildingClassModel;
use App\Models\CoachModel;
use App\Models\CustomerBuildingClassModel;

class BuildingController extends Controller
{
    protected $building;
    protected $coach;
    protected $cusBuild;

    public function __construct(BuildingClassModel $building, CoachModel $coach, CustomerBuildingClassModel $cusBuild) {
        $this->building = $building;
        $this->coach = $coach;
        $this->cusBuild = $cusBuild;
    }

    public function index() {
        $datas = $this->building->select('*')->get()->toArray();
        $coaches = $this->coach->select('id', 'name')->get()->toArray();
        $coachSet = [];
        foreach ($coaches as $coach) {
            $coachSet[$coach['id']] = $coach['name'];
        }
        foreach ($datas as $key => $build) {
            $datas[$key]['selected'] = $this->cusBuild->select('*')->where('building_class_id', '=', $build['id'])->count();
        }
        
        return view('buildingIndex', compact('datas', 'coachSet'));
    }

    public function add() {
        $coaches = $this->coach->select('id', 'name')->get()->toArray();
        return view('buildingAdd', compact('coaches'));
    }

    public function store(Request $request) {
        $data = $request->all();
        $building = new BuildingClassModel();
        $building->name = $data['name'];
        $building->seat_num = $data['seat_num'];
        $building->coach_id = $data['coach_id'];
        $building->rest_flag = 1;
        $building->description = $data['description'];

        $building->save();
        return redirect('sys/building/index');
    }

    public function edit($id) {
        $coaches = $this->coach->select('id', 'name')->get()->toArray();
        $data = $this->building->findOrFail($id);
        return view('buildingEdit', compact('data', 'coaches'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $building = $this->building->findOrFail($id);
        $building->name = $data['name'];
        $building->seat_num = $data['seat_num'];
        $building->coach_id = $data['coach_id'];
        $building->description = $data['description'];
        $building->save();
        return redirect('sys/building/index');

    }

    public function delete($id) {
        $building = $this->building->findOrFail($id);
        $building->delete();
        return redirect('sys/building/index');
    }

    public function cList() {
        $login = session('role');
        
        $flag = 0;
        $buildings = $this->building->select('*')->get();

        $coaches = $this->coach->select('id', 'name')->get()->toArray();
        $coachSet = [];
        foreach ($coaches as $coach) {
            $coachSet[$coach['id']] = $coach['name'];
        }
        
        $info = ['login' => 0, 'menu' => 'building'];
        $role = session('role');
        if (isset($role) && ($role == 'user')) {
            $flag = 1;
            $info['login'] = 1;
            $info['name'] = session('account');
            $info['resClass'] = [];
            $info['builds'] = [];
            foreach ($buildings as $key => $build) {
                $classNum = $this->cusBuild->select('*')->where('building_class_id', '=', $build->id)->count();
                $buildings[$key]['res'] = $build->seat_num - $classNum;
            }

            $builds = $this->cusBuild->select('building_class_id')->where('customer_id', '=', session('id'))->get();

            foreach ($builds as $build) {
                $info['builds'][] = $build->building_class_id;
            }
        }

        return view('cBuilding', compact('buildings', 'flag', 'info', 'coachSet'));
    }

    public function select($id) {
        $re = new CustomerBuildingClassModel();
        $re->customer_id = session('id');
        $re->building_class_id = $id;
        $re->save();
        return redirect('building');
    }
}
