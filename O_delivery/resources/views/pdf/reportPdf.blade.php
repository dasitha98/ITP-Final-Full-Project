<?php

    $dataPoints = 
    [
        ['label' => 'Accepted Job', 'y' => $accept], 
        ['label' => 'Failed Job', 'y' => $failed] 
    ]; 
?>
<!DOCTYPE HTML>
<html>

<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>

    
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

 
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <script>
        window.onload = function() {


            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: false,
                title: {
                    text: "Accepted and rejected job details"
                },
                subtitles: [{
                    text: "October 2020"
                }],
                data: [{
                    type: "pie",
                    yValueFormatString: "#,##0.00\"%\"",
                    indexLabel: "{label} ({y})",
                    dataPoints: <?php echo json_encode($dataPoints,
                        JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }

    </script>
</head>

<body>
    <div class="continer">

        <div class="jumbotron">
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>











            


                <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Accepted table</h2>







                    <form action="">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID No</th>
                                        <th>Order No</th>
                                        <th>Remarks</th>
                                        <th>ApprovedBy</th>
                                        <th>Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($qcRetrive ?? '' as $item)
                                        <tr style="background:white;">
                                            @if (session()->exists($item->orderNo))
                                            @else
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->orderNo }}</td>
                                                <td>{{ $item->remarks }}</td>
                                                <td>{{ $item->approvedBy }}</td>
                                                <td>{{ $item->updated_at }}</td>

                                            @endif

                                        </tr>
                                    @endforeach

                                </tbody>


                            </table>
                    </form>



                    
                    <br>
                    <br>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Rejected table</h2>



                    <form action="">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID No</th>
                                        <th>Order No</th>
                                        <th>Remarks</th>
                                        <th>Rejected By</th>
                                        <th>Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($qcReject as $item)
                                        <tr style="background:white;">
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->orderNo }}</td>
                                                <td>{{ $item->reasonForRejcet }}</td>
                                                <td>{{ $item->rejectedBy }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>


                            </table>
                    </form>


                

                    <br>

                </div>
                </div>
            </div>
            </div>
















            
        </div>
    </div>


















    <script src="{{ asset('js/canvas.js') }}"></script>
</body>

</html>
