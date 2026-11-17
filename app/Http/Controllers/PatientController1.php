<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Barryvdh\DomPDF\Facade\Pdf;
class PatientController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient=Patient::all();

        return view ('index1',compact('patient'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient;
        $patient->fname = $request->input('fname');
        $patient->lname = $request->input('lname');
        $patient->mobile = $request->input('mobile');
        $patient->email = $request->input('email');
        $patient->password = $request->input('password');
        $patient->confirm = $request->input('confirm');
        $patient->gender = $request->input('r1');
        
        $dd=$request->input('dd');
        $mmm=$request->input('mmm');
        $yyyy=$request->input('yyyy');
        if (strtotime($dd . $mmm . $yyyy) == true)
        $time = strtotime($dd . $mmm . $yyyy);
        else
        
        $time = strtotime($dd . $mmm . $yyyy);
        $newformat = date('Y-m-d',$time);

        echo $newformat;
        // 2003-10-16
        $patient->dob=$newformat;
        $patient->english = $request->input('c1') ? true : false;
        $patient->hindi = $request->input('c2') ? true : false;
        $patient->gujarati = $request->input('c3') ? true : false;
        $patient->marathi = $request->input('c4') ? true : false;
        $patient->address = $request->input('address');


        $patient->save();
        return redirect()->back()->with('status',"Post added successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);

        return view('edit',compact('patient'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $patient = Patient::find($id);
        $patient->fname = $request->input('fname');
        $patient->lname = $request->input('lname');
        $patient->mobile = $request->input('mobile');
        $patient->email = $request->input('email');
        $patient->password = $request->input('password');
        $patient->confirm = $request->input('confirm');
        $patient->gender = $request->input('r1');
        
        $dd=$request->input('dd');
        $mmm=$request->input('mmm');
        $yyyy=$request->input('yyyy');
        
        $time = strtotime($dd . $mmm . $yyyy);

        $newformat = date('Y-m-d',$time);

        echo $newformat;
        // 2003-10-16
        $patient->dob=$newformat;
        $patient->english = $request->input('c1') ? true : false;
        $patient->hindi = $request->input('c2') ? true : false;
        $patient->gujarati = $request->input('c3') ? true : false;
        $patient->marathi = $request->input('c4') ? true : false;
        $patient->address = $request->input('address');


        $patient->update();
        return redirect()->back()->with('status',"Post updated successfully");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('patients')->with('status',"Post deleted successfully");
        //
    }
    public function patients_list()
    {
        $patients = Patient::all();
        $data = ['patients' => $patients];
        $pdf = Pdf::loadView('p_pdf', $data);
        return $pdf->download('patients_list.pdf');

    }

    public function appointment($id)
    {
        $patient = Patient::find($id);

        return view('appointment',compact('patient'));

        //
    }

}
