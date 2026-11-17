<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Dosage;
use App\Models\Lab;
use App\Models\Pharmacy;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Date;
use Alert;
use App\Models\Casefile;

class PatientController extends Controller
{
    public function index(){
        $patient = Patient::all();
        $casefile = Casefile::all();
        return view('saifee.index1', compact('patient','casefile'));
    }
    public function new_case(){
        $patient = Patient::all();
        return view('saifee1.new-case', compact('patient'));
    }
    public function select_case(){
        $casefile = Casefile::all();
        return view("saifee.select-case", compact('casefile'));
    }
    public function GetDosage($id,$dt){
        $no = DB::table('casefile')->where('pt_id','=',$id)->whereDate('case_dt','=', $dt)->max('id');
        echo json_encode(DB::table('dosage')->where('case_id',$no)->get()); 
    }
    public function GetLab($id,$dt){
        $no = DB::table('casefile')->where('pt_id','=',$id)->whereDate('case_dt','=',$dt)->max('id');
        echo json_encode(DB::table('lab')->where('case_id',$no)->get()); 
    }
    public function GetPharmacy($id,$dt){
        $no = DB::table('casefile')->where('pt_id','=',$id)->whereDate('case_dt','=',$dt)->max('id');
        echo json_encode(DB::table('pharmacy')->where('case_id',$no)->get()); 
    }
   
    public function GetPatient($id){
       //echo("success");
        //console.log(DB::table('patient')->where('id',$id)->get());
       echo json_encode(DB::table('patient')->where('id',$id)->get());
    }
    public function NewPatient(Request $request){
        $patient = new Patient;
        $patient->pt_no = $request['n_pt_no'];
        $patient->pt_name = $request['n_pt_name'];
        $patient->pt_surname = $request['n_pt_surname'];
        $patient->age = $request['n_pt_age'];
        $patient->address = $request['n_pt_address'];
        $patient->mobile = $request['n_pt_mobile'];
        $patient->save();
     //   $id = Dosage::where('case_id','=',$no)->where('medicine','=',$med)->where('dosage','=',$dos)->max('id');
        $n_pt_name = $request['n_pt_name'];
        $n_pt_surname = $request['n_pt_surname'];
        return response()->json(['success' => 'success','n_pt_name' => $n_pt_name, 'n_pt_surname' => $n_pt_surname]);
        }  
    

    public function storeDosage(Request $request){
        $dt = $request['dt'];
        $id = $request['id'];
       // $casedt = date('Y-m-d',$dt);
        $no = DB::table('casefile')->where('pt_id','=',$id)->whereDate('case_dt','=',$dt)->max('id');
        
        if(is_null($no))

        {
            //echo('Case is not Registered');
        }
        else
        {
            $dosage = new Dosage;
            $dosage->case_id = $no;
            $dosage->medicine = $request['med'];
            $dosage->dosage = $request['dosage'];
            $dosage->save();

            $med = $request['med'];
            $dos = $request['dosage'];
          $id = Dosage::where('case_id','=',$no)->where('medicine','=',$med)->where('dosage','=',$dos)->max('id');
            return response()->json(['success' => 'success', 'id' => $id,'med' => $med, 'dos' => $dos]);
        }  
    }
    public function storeLab(Request $request){
        $dt = $request['dt'];
        $id = $request['id'];
       $no = DB::table('casefile')->where('pt_id','=',$id)->whereDate('case_dt','=',$dt)->max('id');
       if(is_null($no))
       {

       }
       else
       {
        $lab = new Lab;
        $lab->case_id = $no;
        $lab->test = $request['test'];
        $lab->save();
        $test = $request['test'];
        $id = Lab::where('case_id','=',$no)->where('test','=',$test)->max('id');
         
        return response()->json(['success' => 'success','id'=> $id,'test' => $test]);
        }        
    }
    public function storePharmacy(Request $request){
        $dt = $request['dt'];
        $id = $request['id'];
       $no = DB::table('casefile')->where('pt_id','=',$id)->whereDate('case_dt','=',$dt)->max('id');
        if(is_null($no))
        {

        }
        else
        {
            $pharmacy = new Pharmacy;
            $pharmacy->case_id = $no;
            $pharmacy->medicine = $request['med_name'];
            $pharmacy->qty = $request['qty'];
            $pharmacy->save();
            $med_name = $request['med_name'];
            $qty = $request['qty'];
            $id = Pharmacy::where('case_id','=',$no)->where('medicine','=',$med_name)->where('qty','=',$qty)->max('id');
        
            return response()->json(['success' => 'success','id'=> $id,'med_name' => $med_name, 'qty' => $qty]);
        
        }
    }
    public function deletePatient(Request $request){
        $patient = Patient::findOrFail($request['id']);
        $patient->delete();
        return response()->json(['success'=>'success']);

    }
    public function deleteDosage(Request $request){
        $dosage = Dosage::findOrFail($request['id']);
        $dosage->delete();
        return response()->json(['success'=>'success']);

    }
    public function deleteLab(Request $request){
        $lab = Lab::findOrFail($request['id']);
        $lab->delete();
        return response()->json(['success'=>'success']);

    }
    public function deletePharmacy(Request $request){
        $pharmacy = Pharmacy::findOrFail($request['id']);
        $pharmacy->delete();
        return response()->json(['success'=>'success']);

    }
  
    public function updatePatient(Request $request){
        $patient = Patient::findOrFail($request['id']);
        $patient->pt_name = $request['name'];
        $patient->pt_surname = $request['surname'];
        $patient->save();
        return response()->json(['success'=>'success']);

    }
    public function updateDosage(Request $request){
        $dosage = Dosage::findOrFail($request['id']);
        $dosage->medicine = $request['med'];
        $dosage->dosage = $request['dos'];
        $dosage->save();
        return response()->json(['success'=>'success']);

    }
    public function updateLab(Request $request){
        $lab = Lab::findOrFail($request['id']);
        $lab->test = $request['test'];
        $lab->save();
        return response()->json(['success'=>'success']);

    }
    public function updatePharmacy(Request $request){
        $pharmacy = Pharmacy::findOrFail($request['id']);
        $pharmacy->medicine = $request['med'];
        $pharmacy->qty = $request['qty'];
        $pharmacy->save();
        return response()->json(['success'=>'success']);

    }
  
    public function storeCase(Request $request){
        $case_no = $request['case_no'];
        $dr = $request['dr'];
        $pt_id = $request['pt_id'];
        //$dt = date('Y-m-d', $request['dt']);
        $dt = date_create($request['dt']);
        $dt = date_format($dt,'Y-m-d');
        
            $Casefile = new Casefile;
            $Casefile->case_no = $case_no;
            $Casefile->case_dt = $dt;
            $Casefile->pt_id = $pt_id;
            $Casefile->dr = $dr;
           // $Casefile->case_dt = date('Y-m-d', $request['dt']);
            $Casefile->save();
             return response()->json(['success' => 'Record Added successfully']);
          
    }
}
