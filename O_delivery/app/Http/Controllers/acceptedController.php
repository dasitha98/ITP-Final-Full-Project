<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Qc_retrive_items_table;
use App\retrive_main_orders_table;
use App\accepted;
use App\rejected;
use App\Checking_items_table;


class acceptedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qcRetrive = accepted::orderBy('id','asc')->get();
        return view ('qcItem.qcAcceptIndex')
        ->with('qcRetrive',$qcRetrive)
        ->with('title','Accepted');
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
        return "he";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accepted = accepted::find($id);
        return view('qcitem.editForAccepted',compact('accepted','id'))
        ->with('title','Edit acceted table');
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
        $accepted = accepted::find($id);
        $accepted->remarks = $request->get('remarks');
        $accepted->save();
        return redirect()->route('accepted.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $OrderNo = DB::select('select orderNo from accepteds where id = ?',[$id]);
        $stringOrder = $OrderNo[0]->orderNo;
        //$checkOrder = DB::table('deliveries2')->select('orderNo')->where('orderNo',$OrderNo)->first();
        $checkOrder = DB::select('select orderNo from deliveries2 where orderNo = ?',[$stringOrder]);

        
        if (count($checkOrder)>=1) {
            
            return redirect ('accepted')->with('message', 'This item already delivered to the customer, cannot delete!');;
        }else{
            $dele = accepted::find($id);
            $dele ->delete();
            
            return redirect ('accepted');
        }
        

    }
   
}
