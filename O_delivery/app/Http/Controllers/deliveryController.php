<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;
use DB;

class deliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$delivery = Delivery::all();
        $delivery = DB::select('select * from deliveries2');
        return view("deliveryItem.retrieveDeliveryTable")
        ->with('delivery',$delivery)
        ->with('title','Delivery item');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('deliveryItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderNo = $request->get('orderNo');

        if ( $orderNo == "") {
            return redirect('deliveryItem')->with('success', 'EMPTY! Enter correct data!');
        } else 
        {
            $checkOrderInAccetedTable = DB::select('select orderNo from accepteds where orderNo = ?',[$orderNo]);
            $checkOrderInDeliveriesTable = DB::select('select orderNo from deliveries where orderNo = ?',[$orderNo]);

            if (count($checkOrderInDeliveriesTable)>=1) {
                return redirect('deliveryItem')->with('success', 'DATA already entered!');
            } else{

                if (count($checkOrderInAccetedTable)>=1) {
                    $delivery = new Delivery([
                        'orderNo' => $request->get('orderNo'),
                        'remarks' => $request->get('remarks'),
                        'description' => "he",
                        'customerName' => "tr",
                        'customerAddress' => "ii",
                    ]);
                    $delivery->save();
                    return redirect('deliveryItem')
                    ->with('success','Data added')
                    ->with('title','Delivery item');
                }  else {
                    return redirect('deliveryItem')->with('success', 'Order not accepted!');
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
