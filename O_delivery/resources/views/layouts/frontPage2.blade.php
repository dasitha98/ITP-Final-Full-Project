<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sun</title>

   
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>

    
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

 
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.Navigation')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            {{$title}}
                            <small>For Delivery Department</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                
                            </li>
                            <li class="active">
                                
                            </li>
                        </ol>

                    </div>
                </div>

                @yield('content')
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
