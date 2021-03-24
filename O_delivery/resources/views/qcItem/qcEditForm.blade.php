@extends('layouts.frontPage2')

@section('content')

<div class="continer">



    <div class="jumbotron">



            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif


        <form class="form-horizontal" role="form" method="post" action="{{action('qcitemController@update',$qcRetrive->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH"/>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Order No</label>
                    <div class="col-sm-10">
                        <input type="text" name="orderNo" value="{{$qcRetrive->orderNo}}" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Item Code</label>
                    <div class="col-sm-10">
                        <input type="text" name="itemNo" value="{{$qcRetrive->itemNo}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Remarks</label>
                    <div class="col-sm-10">
                        <textarea value="{{$qcRetrive->remarks}}" class="form-control" rows="4" name="remarks"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">Accept/Reject</label>
                    <div class="col-sm-5">
                        <select class="form-control selectpicker" name="status">
                            <option selected="">Accept</option>
                            <option value="Id">Reject</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Save" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
                
            </form>

        
    </div>
</div> 

@endsection