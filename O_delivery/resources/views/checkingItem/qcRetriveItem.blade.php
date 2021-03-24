@extends('checkingItem.insertForm')

@section('table')

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
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($qcRetrive as $item)
                        <tr style="background:white;">
                        <td>{{$item->id}}</td>
                        <td>{{$item->orderNo}}</td>
                        <td>{{$item->itemNo}}</td>
                        <td>{{$item->description}}</td>
                        

                        </tr>
                        @endforeach

                    </tbody>


                </table>
            </form>

    </div>


</div>

@endsection