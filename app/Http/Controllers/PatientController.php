<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Patient;
use App\PatientDescription;
use DB;

class PatientController extends Controller
{
  public function index(Request $request,Response $response)
  {
      // $id = 21;
      // $data = Patient::find($id)->patientDetails->toArray();
      // $p = Patient::all();
      /* inner join
      $userRole = PatientDescription::where('patient_descriptions.id', $id)
            ->join('patients','patients.id', '=', 'patient_descriptions.patient_id')
            ->get();
      dd($userRole);  */
      // $p = PatientDescription::find(1)->patient;
      // dd($p->toArray());
      // dd($p->toJson(JSON_PRETTY_PRINT));
      // dd($p->patient->toArray());
      // dd($data);
      // dd($p->toArray());
      $msg = ['heading' => 'demo project using laravel'];
      session($msg);
      // return Patient::with('patient_descriptions')->latest()->get();
      // $data = Patient::all();
      // return $data;
      // return response()->json(['data' => $data],200);  //return data with status code
      // $data = Patient::where('id','<',45)->latest()->paginate(5);
      $data = Patient::latest()->paginate(5);
      // dd($patients);
      return view('service.index', compact('data'));
      // return view('service.index', ['data' => $data]);
  }

  public function edit($id) {
    $data = Patient::find($id);
    // dd($data);

    return view('service.add', ['data' => $data]);
  }

  public function update(Request $request)
  {
    // dd($request->all());
    if (!empty($request)) {
      $data = $request->all();
      unset($data["_token"]);
      $id = $request->input('id');
      $data = Patient::where('id',$id)->update($data);

    } else {
      echo "<script>alert('params required.');</script>";
    }
    return redirect()->route('patients');
  }

  public function add() {
    $arr = ['id' => 'id', 'name' => '', 'age' => '', 'address' =>''];
    $data = (object)$arr;
    return view('service.add', ['data' => $data]);
  }

  public function insert(Request $request) {
    if (!empty($request)) {
      $data = $request->all();
      $created_data =Patient::create($data);
      dump($created_data->toArray());
      // $patient = new Patient($data);
      // $d = $patient->save();
      // dd($d);
      // $d = DB::table('patients')->insert($data);
      // dd($d);
      // unset($data["_token"]);
      // $d = Patient::insert($data);
    } else {
      // code...
    }
    return redirect()->route('patients');
  }

  public function search(Request $request) {
    $data =Patient::where('name','LIKE','%'.$request->input('name').'%')->latest()->paginate(5);
    // dump($data);
    // dd($request->all());
    return view('service.index', compact('data'));
  }

  public function delete($id) {
    if (!empty($id)) {
      // $data = Post::find($id)->delete();
      // $data = Post::where('id',$id)->delete();
      $data = Patient::destroy($id);
      echo "<script>alert('Succesfully deleted.');</script>";
    } else {
      echo "<script>alert('params required.');</script>";
    }
    return redirect()->route('patients');
  }

  public function detail(Request $request, $id) {
    $data = PatientDescription::
          join('patients','patients.id', '=', 'patient_descriptions.patient_id')
          ->where('patient_descriptions.patient_id', '=', $id)
          ->get();
    // dd(empty($data->toArray()));

    return view('service.detail',['data' => $data]);
    dd($data->toJson());
  }

  public function addPrescription(Request $request,$id) {
    return view('service.prescription',['id' => $id]);
  }

  public function prescriptionAdd(Request $request) {
    $data = $request->all();
    $created_data =PatientDescription::create($data);
    return redirect()->route('patients');
  }
}
