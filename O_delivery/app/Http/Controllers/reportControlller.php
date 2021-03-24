<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use DB;
use App\Qc_retrive_items_table;
use App\retrive_main_orders_table;
use App\accepted;
use App\rejected;
use App\Checking_items_table;

class reportControlller extends Controller
{
    public function viewUserCharts(){
        $getFailedjobCount = rejected::select('orderNo',DB::raw('count(orderNo) as count'))->count();
        $getAcceptedjobCount = accepted::select('itemNo',DB::raw('count(itemNo) as count'))->count();
        //echo "<pre>"; print_r($getFailedjobCount);die;
        //echo "<pre>"; print_r($getAcceptedjobCount);die;

        $percenFailed = ($getFailedjobCount/($getFailedjobCount + $getAcceptedjobCount))*100;
        $percenAccepted = ($getAcceptedjobCount/($getFailedjobCount + $getAcceptedjobCount))*100;

        //this is for retrive data from accepteed table
        $qcRetrive = accepted::orderBy('id','asc')->get();
        $qcReject = rejected::orderBy('id','asc')->get();
        
        


        return view('reports.report_pieChart')
        ->with('title','Report')
        ->with('getFailedjobCount', $percenFailed)
        ->with('getAcceptedjobCount', $percenAccepted)
        ->with('qcRetrive',$qcRetrive)
        ->with('qcReject',$qcReject);
    }

    public function viewUserChartspdf(){
        $getFailedjobCount = rejected::select('orderNo',DB::raw('count(orderNo)'))->count();
        $getAcceptedjobCount = accepted::select('itemNo',DB::raw('count(itemNo)'))->count();
        //echo "<pre>"; print_r($getFailedjobCount);die;
        //echo "<pre>"; print_r($getAcceptedjobCount);die;

        $percenFailed = ($getFailedjobCount/($getFailedjobCount + $getAcceptedjobCount))*100;
        $percenAccepted = ($getAcceptedjobCount/($getFailedjobCount + $getAcceptedjobCount))*100;


        $qcRetrive = accepted::orderBy('id','asc')->get();
        $qcReject = rejected::orderBy('id','asc')->get();

        $pdf = PDF::loadView('pdf.reportPdf',['qcRetrive'=> $qcRetrive,'qcReject'=> $qcReject,'failed' => $percenFailed,'accept' => $percenAccepted]);
        return $pdf->stream();

        // return view('reports.report_pieChart')
        // ->with('title','Report')
        // ->with('getFailedjobCount', $percenFailed)
        // ->with('getAcceptedjobCount', $percenAccepted);
    }
}
