<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Qc_retrive_items_table;


class CheckingItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qcRetrive = Qc_retrive_items_table::all();
        return view ('checkingItem.qcRetriveItem')
        ->with('qcRetrive',$qcRetrive)
        ->with('title','Insert item for QC checking');
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
        $orderNo = $request->input('orderNo');
        $itemNo = $request->input('itemNo');

        if ( $orderNo == "" || $itemNo == "") {
            return redirect('CheckingItem')->with('message', 'EMPTY! Enter correct data!');
        } else {

            $checkOrder = DB::select('select orderNo from checking_items_tables where orderNo = ? && itemNo = ?',[$orderNo,$itemNo]);
            $checkMain = DB::select('select orderNo from retrive_main_orders_tables where orderNo = ? && itemNo = ?',[$orderNo,$itemNo]);
            //$checkOrderNo = DB::table('checking_items_tables')->select('orderNo')->where('orderNo',$orderNo)->first();

                if (count($checkOrder)>=1) {
                    return redirect('CheckingItem')->with('message', 'DATA already entered!');
                } else{
                 
                    if (count($checkMain)>=1) {
                        DB::insert('insert into checking_items_tables (orderNo,itemNo) value (?,?)'
                        ,[$orderNo,$itemNo]);
                            return redirect('CheckingItem')->with('message', 'Success');

                    } else {
                        return redirect('CheckingItem')->with('message', 'Order not yet made!');
                    }
                    
                   
    
                }
                
            
           
            
        }
        

       
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
