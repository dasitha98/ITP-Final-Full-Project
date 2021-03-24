<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Qc_retrive_items_table;
use App\retrive_main_orders_table;
use App\accepted;
use App\rejected;
use App\Checking_items_table;

class qcitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qcRetrive = Qc_retrive_items_table::all();
        return view ('qcItem.qcChecking')
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
        // $orderNo = $request->input('orderNo');
        // $itemNo = $request->input('itemNo');
        // $remarks = $request->input('remarks');
        // $approvedBy = "irfan";
        // //$qcRetrive = accepted::all();
        // DB::insert('insert into accepteds (orderNo,itemNo,remarks,approvedBy) value (?,?,?,?)',[$orderNo,$itemNo,$remarks,$approvedBy]);
        // return view ('qcitem.qcChecking')->with('qcRetrive',$qcRetrive);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qcRetrive = Qc_retrive_items_table::find($id);
        
        return view ('qcItem.qcEditForm')
        ->with('title','QC Accept or Reject Form')
        ->with('qcRetrive',$qcRetrive);
        
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
        if ($request->input('status') == 'Accept') {

            //this methods use for insert or save
            $accepted = new accepted([

                'id' => $id,
                'orderNo' => $request->get('orderNo'),
                'itemNo' => $request->get('itemNo'),
                'remarks' => $request->get('remarks'),
                'approvedBy' => "irfan",
    
            ]);
            $accepted->save();

            //this methods use for update

            // $qcRetrive = accepted::find($id);
            // $qcRetrive->orderNo = $request->input('orderNo');
            // $qcRetrive->itemNo = $request->input('itemNo');
            // $qcRetrive->remarks = $request->input('remarks');
            // $qcRetrive->save();
        }else{

            $rejected = new rejected([

                'id' => $id,
                'orderNo' => $request->get('orderNo'),
                'itemNo' => $request->get('itemNo'),
                'reasonForRejcet' => $request->get('remarks'),
                'rejectedBy' => "irfan",
    
            ]);
            $rejected->save();

            // $qcRetrive = rejected::find($id);
            // $qcRetrive->orderNo = $request->input('orderNo');
            // $qcRetrive->itemNo = $request->input('itemNo');
            // $qcRetrive->reasonForRejcet = $request->input('remarks');
            // $qcRetrive->save();

        }
       
        return redirect('/qcitem') ;
    
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
