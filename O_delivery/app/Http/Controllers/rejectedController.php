<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Qc_retrive_items_table;
use App\retrive_main_orders_table;
use App\accepted;
use App\rejected;
use App\Checking_items_table;

class rejectedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qcRetrive = rejected::orderBy('id','asc')->get();
        return view ('qcItem.qcRejectIndex')
        ->with('qcRetrive',$qcRetrive)
        ->with('title','Rejected items');
    }

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
    public function store(Request $request)
    {
        //
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
        $rejected = rejected::find($id);
        return view('qcitem.editForRejected',compact('rejected','id'))
        ->with('title','Edit for Reject');
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
        $rejected = rejected::find($id);
        $rejected->reasonForRejcet = $request->get('remarks');
        $rejected->save();
        return redirect()->route('rejected.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dele = rejected::find($id);
        $dele ->delete();
        
        
        return redirect ('rejected');
    }
}
