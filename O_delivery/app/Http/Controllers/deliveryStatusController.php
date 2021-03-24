<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Qc_retrive_items_table;
use App\retrive_main_orders_table;
use App\accepted;
use App\rejected;
use App\Checking_items_table;

class deliveryStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        


        $qcRetrive = DB::select('select * from maintable');
        return view ('deliveryStatus.deliveryStatusHistory')
        ->with('qcRetrive',$qcRetrive)
        ->with('title','QC table fro reject or accept');
        
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
       
        //$packing = DB::table('retrive_main_orders_table')->select('orderNo')->where('orderNo',$id);
        $packing = DB::select('select orderNo from qc_retrive_items_tables where orderNo = ?',[$id]);
        $orderOnTruck = DB::select('select orderNo from accepteds where orderNo = ?',[$id]);
        $deliverdItem = DB::select('select orderNo from deliveries2 where orderNo = ?',[$id]);
    
        $num = '0';
        if (count($packing)>=1) {
            $num = '1';
        }  

        if (count($orderOnTruck)>=1) {
            $num = '2';
        }

        if (count($deliverdItem)>=1) {
            $num = '3';
        }

        

       
        
        

        return view('deliveryStatus.deliveryStatusProgress',[
            'num'=>$num, 'orderNum'=>$id
        ]);

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
