@extends('layouts.frontPage2')

@section('content')

    <div class="continer">

        <div class="jumbotron">


            <!--Pie chart view-->


            <?php $dataPoints = [['label' => 'Accepted Job', 'y' => $getAcceptedjobCount], ['label' =>
            'Failed Job', 'y' => $getFailedjobCount]]; ?>

            <script>
                window.onload = function() {


                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
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


            <a href="pdf_report" class="btn btn-success">PDF Document</a>
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>


            <!--Accepted table view-->

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
                                            <th>remarks</th>
                                            <th>approvedBy</th>
                                            <th>Date & time</th>
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

                        </div>
                    </div>
                </div>



                <!--Rejected table view-->

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
                                            <th>Date & time</th>
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
                        </div>
                    </div>
                </div>
            </div>



            <script src="{{ asset('js/canvas.js') }}"></script>




        </div>
    </div>

@endsection
