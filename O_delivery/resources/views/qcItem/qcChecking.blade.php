@extends('layouts.frontPage2')

@section('content')

<div class="continer">

    
    <div class="jumbotron">
       
            
            <form action="">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sr.No</th>
                            <th>Order No</th>
                            <th>Item No</th>
                            <th>Description</th>
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Supplier Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($qcRetrive as $item)
                        <tr style="background:white;">
                        <td>{{$item->id}}</td>
                        <td><a href="qcitem/{{$item->id}}/edit">{{$item->orderNo}}</a></td>
                        <td>{{$item->itemNo}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->customerName}}</td>
                        <td>{{$item->customerAddress}}</td>
                        <td>{{$item->supplierName}}</td>
                        

                        </tr>
                        @endforeach

                    </tbody>


                </table>
            </form>

    </div>


</div>

@endsection