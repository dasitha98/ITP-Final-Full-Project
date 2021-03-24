@extends('layouts.frontPage2')

@section('content')

<div class="continer">



    <div class="jumbotron">



            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif


            <form class="form-horizontal" role="form" method="post" action="index.php">
                
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Order No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Item Code</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Remarks</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">Accept/Reject</label>
                    <div class="col-sm-5">
                        <select class="form-control selectpicker" name="search_by">
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