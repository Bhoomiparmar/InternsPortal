<?php

namespace App\Http\Controllers;
use App\Models\intern;
use DB;
use Illuminate\Http\Request;

class InternController extends Controller
{

    //displayform
    public function displayform()
        {
            return view('internmodel');
        }

    //save data in database
    public function save(Request $request)
    {
        $Fullname = $request->input('fullname');
        $Gender = $request->input('gender');
        $Age = $request->input('age');
        $DOB = $request->input('dob');
        $Contactno = $request->input('contactno');
        $Email_id = $request->input('email');
        $College_name = $request->input('collegename');

        DB::insert('insert into interns (fullname,gender,age,dob,contactno,email,collegename) values(?,?,?,?,?,?,?)'
        ,[$Fullname,$Gender,$Age,$DOB,$Contactno,$Email_id,$College_name]);

        return redirect('intern')->with('success','data saved');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

}
