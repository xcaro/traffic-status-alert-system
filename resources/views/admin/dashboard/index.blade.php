@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-comments"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Báo cáo</p>
                            {{ $total_report_today }}
                        </div>
                    </div>
                </div>
            </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-reload"></i> Hôm nay
				</div>
			</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-wheelchair"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Phòng khám</p>
                            {{ $total_clinic_today }}
                        </div>
                    </div>
                </div>
            </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-calendar"></i> Hôm nay
				</div>
			</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-danger text-center">
                            <i class="ti-support"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Lịch khám</p>
                            23
                        </div>
                    </div>
                </div>
            </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-timer"></i> Hôm nay
				</div>
			</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="ti-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Người dùng</p>
                            60
                        </div>
                    </div>
                </div>
            </div>
			<div class="card-footer">
				<hr />
				<div class="stats">
					<i class="ti-reload"></i> Hệ thống
				</div>
			</div>
        </div>
    </div>
</div>
<div class="row">
	 <div class="col-md-6">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title">2015 Sales</h4>
                <p class="category">All products including Taxes</p>
            </div>
            <div class="card-content">
                <div id="chartActivity" class="ct-chart"></div>
            </div>
            <div class="card-footer">
                <div class="chart-legend">
                    <i class="fa fa-circle text-info"></i> Tesla Model S
                    <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr>
                <div class="stats">
                    <i class="ti-check"></i> Data information certified
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title">2015 Sales</h4>
                <p class="category">All products including Taxes</p>
            </div>
            <div class="card-content">
                <canvas id="chart-area"></canvas>
            </div>
            <div class="card-footer">
                <!--<div class="chart-legend">
                    <i class="fa fa-circle text-info"></i> Tesla Model S
                    <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>-->
                <hr>
                <div class="stats">
                    <i class="ti-check"></i> Data information certified
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
<script>

        var config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [
                        100,
                        40,
                        20,
                        60,
                        40,
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    'Red',
                    'Orange',
                    'Yellow',
                    'Green',
                    'Blue'
                ]
            },
            options: {
                responsive: true
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myPie = new Chart(ctx, config);
        };



        var colorNames = Object.keys(window.chartColors);



    </script>
<script>
	$(function(){
		var data = {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          series: [
            [542, 543, 520, 680, 653, 753, 326, 434, 568, 610, 756, 895],
            [230, 293, 380, 480, 503, 553, 600, 664, 698, 710, 736, 795]
          ]
        };

        var options = {
            seriesBarDistance: 10,
            axisX: {
                showGrid: true
            },
            height: "245px"
        };

        var responsiveOptions = [
          ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value[0];
              }
            }
          }]
        ];

        Chartist.Line('#chartActivity', 
        	data, 
        	options, 
        	responsiveOptions);

	});
</script>
@endsection