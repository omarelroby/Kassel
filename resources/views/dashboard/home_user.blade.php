@extends('dashboard.layouts.master2')
@section('page_name','Dashboard')
@section('style')
    <link href="https://cdn.jsdelivr.xyz/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <h2>Revenue Overview</h2>
    <div class="content-body">
        <div class="card">
            <div class="card-block">
                <div class="card-body">
                    <form method="get" enctype="multipart/form-data" action="{{route('filter.statistics')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <div class=" "  >
                                    <label>Websites</label>
                                    <select  required   multiple    name="name[]" class="form-control js-example-basic-single">
                                        @foreach($all_domains as $domain)
                                            <option  @if(in_array($domain->id,$domains))selected @endif value="{{$domain->id}}">{{$domain->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{--                            <div class="col-md-2" style="padding-top: 25px; ">--}}
                            {{--                                <button type="submit" style="padding: 4px; width: 120px;"   class="btn btn-primary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">clean</button>--}}
                            {{--                            </div>--}}

                        </div>
                        <div class="row">

                            {{--                        <div class="col-md-12">--}}
                            {{--                            <div class="form-group"  >--}}
                            {{--                                <label>Metrics</label>--}}
                            {{--                                <select type="text"      name="name" class="form-control js-example-basic-single">--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>



                        <div class="row">
                            <div class="col-md-5">
                                <div class=" "  >
                                    <label>Start date</label>
                                    <input  required value="{{$startDate}}" type="date"   name="start_date" class="form-control  ">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class=" "  >
                                    <label>End date</label>
                                    <input required value="{{$endDate}}" type="date"  name="end_date" class="form-control  ">
                                </div>
                            </div>
                            {{--                            <div class="col-md-3">--}}
                            {{--                                <div class=" "  >--}}
                            {{--                                    <label>Show Data by</label>--}}
                            {{--                                    <select   type="data"      name="date" class="form-control  ">--}}
                            {{--                                        <option>Date</option>--}}
                            {{--                                    </select>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-3">--}}
                            {{--                                <div class=" "  >--}}
                            {{--                                    <label>Preset Fiters</label>--}}
                            {{--                                    <select   type="data"      name="date" class="form-control  ">--}}
                            {{--                                        <option>Select One</option>--}}
                            {{--                                    </select>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-md-2" style="padding-top: 25px; ">
                                <button type="submit" style="padding: 4px; width: 120px; height: 40px;" onclick="myFunction()"  class="btn btn-primary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">Filter</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="content-body" style="margin-top: 40px;">
        <div class="card">
            <div class="card-block">
                <div class="card-body">
                    <h2>Revenue overview</h2>
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">


                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div id="chartdiv" style="height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-4" >
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <div class="card-title align-items-start flex-column">

                        <h3 class="card-label fw-bolder fs-3 mb-1">
                            Measurable Page views
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="Measurable" style="height: 300px;"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4" >
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <div class="card-title align-items-start flex-column">

                        <h3 class="card-label fw-bolder fs-3 mb-1">
                            Impressions
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="Impressions" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4" >
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <div class="card-title align-items-start flex-column">

                        <h3 class="card-label fw-bolder fs-3 mb-1">
                            Viewability
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="Viewability" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4" >
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <div class="card-title align-items-start flex-column">

                        <h3 class="card-label fw-bolder fs-3 mb-1">
                            cpm
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="cpm" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4" >
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <div class="card-title align-items-start flex-column">

                        <h3 class="card-label fw-bolder fs-3 mb-1">
                            Revenue
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="Revenue" style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">







        <div class="card mb-5 mb-xl-8">
            <!--begin: Datatable -->
            <table class="table align-middle gs-0 gy-4" >

                <thead>
                <tr class="fw-bolder text-muted bg-light">

                    <th title="Field #1">Date</th>
                    <th title="Field #2">Measure.P.VIEWS</th>
                    {{--                                    <th title="Field #3">MONETIZE.P.VIEWS</th>--}}
                    <th title="Field #4">IMPRESSIONS</th>
                    <th title="Field #5">VIEWABLE</th>
                    <th title="Field #6">CPM</th>
                    {{--                                    <th title="Field #7">VCPM</th>--}}
                    {{--                                    <th title="Field #8">RPM</th>--}}
                    <th title="Field #8">REVENUE</th>
                    <th title="Field #8">Domain Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($statistics as $statistic)
                    <tr>
                        <td>{{$statistic->date}}</td>
                        <td>{{$statistic->view_measured}}</td>
                        <td>{{$statistic->impressions}}</td>
                        <td>{{$statistic->view_ability_rate}}</td>
                        <td>{{$statistic->cpm}}</td>
                        <td>{{$statistic->revenue}}</td>
                        <td>{{$statistic->domains->name}}</td>

                    </tr>
                @endforeach



                </tbody>
            </table>
            <!--end: Datatable -->
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>





@endsection
@section('footer-js')

    <script src="https://cdn.jsdelivr.xyz/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors(used by this page) -->
    <script src="https://amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
    <script src="https://amcharts.com/lib/3/serial.js" type="text/javascript"></script>
    <script src="https://amcharts.com/lib/3/radar.js" type="text/javascript"></script>
    <script src="https://amcharts.com/lib/3/pie.js" type="text/javascript"></script>
    <script src="https://amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js" type="text/javascript"></script>
    <script src="https://amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
    <script src="https://amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
    <script src="https://amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>
    <!--end::Page Vendors -->
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

    </script>
    {{--    <script type="text/javascript"  >--}}
    {{--        var data =@json($statistics);--}}
    {{--        console.log(data);--}}
    {{--    </script>--}}
    <script>
        // var chart;

        var dates =@json($statistics);
        let chartData2 =[];
        for (let i = 0; i < dates.length; i++) {
            chartData2.push( {
                "year": dates[i].date ,
                "income": dates[i].revenue,
                "impressions": dates[i].impressions
            });
        }

        // console.log(chartData2);
        AmCharts.ready(function () {
            // SERIAL CHART
            chart = new AmCharts.AmSerialChart();

            chart.dataProvider = chartData2;
            chart.categoryField = "year";
            chart.startDuration = 1;

            chart.handDrawn = true;
            chart.handDrawnScatter = 3;

            // AXES
            // category
            var categoryAxis = chart.categoryAxis;
            categoryAxis.gridPosition = "start";

            // value
            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.axisAlpha = 0;
            chart.addValueAxis(valueAxis);

            // GRAPHS
            // column graph
            var graph1 = new AmCharts.AmGraph();
            graph1.type = "column";
            graph1.title = "Income";
            graph1.lineColor = "#a668d5";
            graph1.valueField = "income";
            graph1.lineAlpha = 1;
            graph1.fillAlphas = 1;
            graph1.dashLengthField = "dashLengthColumn";
            graph1.alphaField = "alpha";
            graph1.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
            chart.addGraph(graph1);

            // line
            var graph2 = new AmCharts.AmGraph();
            graph2.type = "line";
            graph2.title = "Impressions";
            graph2.lineColor = "#fcd202";
            graph2.valueField = "impressions";
            graph2.lineThickness = 3;
            graph2.bullet = "round";
            graph2.bulletBorderThickness = 3;
            graph2.bulletBorderColor = "#fcd202";
            graph2.bulletBorderAlpha = 1;
            graph2.bulletColor = "#ffffff";
            graph2.dashLengthField = "dashLengthLine";
            graph2.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
            chart.addGraph(graph2);

            // LEGEND
            var legend = new AmCharts.AmLegend();
            legend.useGraphSettings = true;
            chart.addLegend(legend);

            // WRITE
            chart.write("chartdiv");
        });
    </script>

    <script>
        // var chart;
        var graph;
        var dates =@json($statistics);
        let chartData =[];
        for (let i = 0; i < dates.length; i++) {
            chartData.push( {
                "year": dates[i].date ,
                "value": dates[i].view_measured,
            });
        }

        AmCharts.ready(function () {
            // SERIAL CHART
            chart = new AmCharts.AmSerialChart();

            chart.dataProvider = chartData;
            chart.marginLeft = 10;
            chart.categoryField = "year";
            // chart.dataDateFormat = "YYYY";

            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
            chart.addListener("dataUpdated", zoomChart);



            // AXES
            // category
            var categoryAxis = chart.categoryAxis;
            // categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
            // categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
            categoryAxis.dashLength = 3;
            categoryAxis.minorGridEnabled = true;
            categoryAxis.minorGridAlpha = 0.1;



            // value
            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.axisAlpha = 0;
            valueAxis.inside = true;
            valueAxis.dashLength = 3;
            chart.addValueAxis(valueAxis);

            // GRAPH
            graph = new AmCharts.AmGraph();
            graph.type = "smoothedLine"; // this line makes the graph smoothed line.
            graph.lineColor = "#d1655d";
            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
            graph.bullet = "round";
            graph.bulletSize = 8;
            graph.bulletBorderColor = "#FFFFFF";
            graph.bulletBorderAlpha = 1;
            graph.bulletBorderThickness = 2;
            graph.lineThickness = 2;
            graph.valueField = "value";
            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
            chart.addGraph(graph);

            // CURSOR
            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0;
            chartCursor.cursorPosition = "mouse";
            chartCursor.categoryBalloonDateFormat = "YYYY";
            chart.addChartCursor(chartCursor);

            // SCROLLBAR
            var chartScrollbar = new AmCharts.ChartScrollbar();
            chart.addChartScrollbar(chartScrollbar);

            chart.creditsPosition = "bottom-right";

            // WRITE
            chart.write("Measurable");
        });

        // this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
        }
    </script>
    <script>
        // var chart;
        var graph;
        var dates =@json($statistics);
        let chartData3 =[];
        for (let i = 0; i < dates.length; i++) {
            chartData3.push( {
                "year": dates[i].date ,
                "value": dates[i].impressions,
            });
        }

        AmCharts.ready(function () {
            // SERIAL CHART
            chart = new AmCharts.AmSerialChart();

            chart.dataProvider = chartData3;
            chart.marginLeft = 10;
            chart.categoryField = "year";
            // chart.dataDateFormat = "YYYY";

            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
            chart.addListener("dataUpdated", zoomChart);



            // AXES
            // category
            var categoryAxis = chart.categoryAxis;
            // categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
            // categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
            categoryAxis.dashLength = 3;
            categoryAxis.minorGridEnabled = true;
            categoryAxis.minorGridAlpha = 0.1;



            // value
            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.axisAlpha = 0;
            valueAxis.inside = true;
            valueAxis.dashLength = 3;
            chart.addValueAxis(valueAxis);

            // GRAPH
            graph = new AmCharts.AmGraph();
            graph.type = "smoothedLine"; // this line makes the graph smoothed line.
            graph.lineColor = "#d1655d";
            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
            graph.bullet = "round";
            graph.bulletSize = 8;
            graph.bulletBorderColor = "#FFFFFF";
            graph.bulletBorderAlpha = 1;
            graph.bulletBorderThickness = 2;
            graph.lineThickness = 2;
            graph.valueField = "value";
            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
            chart.addGraph(graph);

            // CURSOR
            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0;
            chartCursor.cursorPosition = "mouse";
            chartCursor.categoryBalloonDateFormat = "YYYY";
            chart.addChartCursor(chartCursor);

            // SCROLLBAR
            var chartScrollbar = new AmCharts.ChartScrollbar();
            chart.addChartScrollbar(chartScrollbar);

            chart.creditsPosition = "bottom-right";

            // WRITE
            chart.write("Impressions");
        });

        // this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
        }
    </script>
    <script>
        // var chart;
        var graph;
        var dates =@json($statistics);
        let chartData4 =[];
        for (let i = 0; i < dates.length; i++) {
            chartData4.push( {
                "year": dates[i].date ,
                "value": dates[i].impressions,
            });
        }

        AmCharts.ready(function () {
            // SERIAL CHART
            chart = new AmCharts.AmSerialChart();

            chart.dataProvider = chartData4;
            chart.marginLeft = 10;
            chart.categoryField = "year";
            // chart.dataDateFormat = "YYYY";

            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
            chart.addListener("dataUpdated", zoomChart);



            // AXES
            // category
            var categoryAxis = chart.categoryAxis;
            // categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
            // categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
            categoryAxis.dashLength = 3;
            categoryAxis.minorGridEnabled = true;
            categoryAxis.minorGridAlpha = 0.1;



            // value
            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.axisAlpha = 0;
            valueAxis.inside = true;
            valueAxis.dashLength = 3;
            chart.addValueAxis(valueAxis);

            // GRAPH
            graph = new AmCharts.AmGraph();
            graph.type = "smoothedLine"; // this line makes the graph smoothed line.
            graph.lineColor = "#d1655d";
            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
            graph.bullet = "round";
            graph.bulletSize = 8;
            graph.bulletBorderColor = "#FFFFFF";
            graph.bulletBorderAlpha = 1;
            graph.bulletBorderThickness = 2;
            graph.lineThickness = 2;
            graph.valueField = "value";
            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
            chart.addGraph(graph);

            // CURSOR
            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0;
            chartCursor.cursorPosition = "mouse";
            chartCursor.categoryBalloonDateFormat = "YYYY";
            chart.addChartCursor(chartCursor);

            // SCROLLBAR
            var chartScrollbar = new AmCharts.ChartScrollbar();
            chart.addChartScrollbar(chartScrollbar);

            chart.creditsPosition = "bottom-right";

            // WRITE
            chart.write("Impressions");
        });

        // this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
        }
    </script>
    <script>
        // var chart;
        var graph;
        var dates =@json($statistics);
        let chartData5 =[];
        for (let i = 0; i < dates.length; i++) {
            chartData5.push( {
                "year": dates[i].date ,
                "value": dates[i].view_ability_rate,
            });
        }

        AmCharts.ready(function () {
            // SERIAL CHART
            chart = new AmCharts.AmSerialChart();

            chart.dataProvider = chartData5;
            chart.marginLeft = 10;
            chart.categoryField = "year";
            // chart.dataDateFormat = "YYYY";

            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
            chart.addListener("dataUpdated", zoomChart);



            // AXES
            // category
            var categoryAxis = chart.categoryAxis;
            // categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
            // categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
            categoryAxis.dashLength = 3;
            categoryAxis.minorGridEnabled = true;
            categoryAxis.minorGridAlpha = 0.1;



            // value
            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.axisAlpha = 0;
            valueAxis.inside = true;
            valueAxis.dashLength = 3;
            chart.addValueAxis(valueAxis);

            // GRAPH
            graph = new AmCharts.AmGraph();
            graph.type = "smoothedLine"; // this line makes the graph smoothed line.
            graph.lineColor = "#d1655d";
            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
            graph.bullet = "round";
            graph.bulletSize = 8;
            graph.bulletBorderColor = "#FFFFFF";
            graph.bulletBorderAlpha = 1;
            graph.bulletBorderThickness = 2;
            graph.lineThickness = 2;
            graph.valueField = "value";
            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
            chart.addGraph(graph);

            // CURSOR
            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0;
            chartCursor.cursorPosition = "mouse";
            chartCursor.categoryBalloonDateFormat = "YYYY";
            chart.addChartCursor(chartCursor);

            // SCROLLBAR
            var chartScrollbar = new AmCharts.ChartScrollbar();
            chart.addChartScrollbar(chartScrollbar);

            chart.creditsPosition = "bottom-right";

            // WRITE
            chart.write("Viewability");
        });

        // this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
        }
    </script>
    <script>
        // var chart;
        var graph;
        var dates =@json($statistics);
        let chartData6 =[];
        for (let i = 0; i < dates.length; i++) {
            chartData6.push( {
                "year": dates[i].date ,
                "value": dates[i].cpm,
            });
        }

        AmCharts.ready(function () {
            // SERIAL CHART
            chart = new AmCharts.AmSerialChart();

            chart.dataProvider = chartData6;
            chart.marginLeft = 10;
            chart.categoryField = "year";
            // chart.dataDateFormat = "YYYY";
            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
            chart.addListener("dataUpdated", zoomChart);

            // AXES
            // category
            var categoryAxis = chart.categoryAxis;
            // categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
            // categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
            categoryAxis.dashLength = 3;
            categoryAxis.minorGridEnabled = true;
            categoryAxis.minorGridAlpha = 0.1;
            // value
            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.axisAlpha = 0;
            valueAxis.inside = true;
            valueAxis.dashLength = 3;
            chart.addValueAxis(valueAxis);

            // GRAPH
            graph = new AmCharts.AmGraph();
            graph.type = "smoothedLine"; // this line makes the graph smoothed line.
            graph.lineColor = "#d1655d";
            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
            graph.bullet = "round";
            graph.bulletSize = 8;
            graph.bulletBorderColor = "#FFFFFF";
            graph.bulletBorderAlpha = 1;
            graph.bulletBorderThickness = 2;
            graph.lineThickness = 2;
            graph.valueField = "value";
            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
            chart.addGraph(graph);

            // CURSOR
            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0;
            chartCursor.cursorPosition = "mouse";
            chartCursor.categoryBalloonDateFormat = "YYYY";
            chart.addChartCursor(chartCursor);

            // SCROLLBAR
            var chartScrollbar = new AmCharts.ChartScrollbar();
            chart.addChartScrollbar(chartScrollbar);

            chart.creditsPosition = "bottom-right";

            // WRITE
            chart.write("cpm");
        });

        // this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
        }
    </script>
    <script>
        // var chart;
        var graph;
        var dates =@json($statistics);
        let chartData7 =[];
        for (let i = 0; i < dates.length; i++) {
            chartData7.push( {
                "year": dates[i].date ,
                "value": dates[i].revenue,
            });
        }

        AmCharts.ready(function () {
            // SERIAL CHART
            chart = new AmCharts.AmSerialChart();

            chart.dataProvider = chartData7;
            chart.marginLeft = 10;
            chart.categoryField = "year";
            // chart.dataDateFormat = "YYYY";
            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
            chart.addListener("dataUpdated", zoomChart);

            // AXES
            // category
            var categoryAxis = chart.categoryAxis;
            // categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
            // categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
            categoryAxis.dashLength = 3;
            categoryAxis.minorGridEnabled = true;
            categoryAxis.minorGridAlpha = 0.1;
            // value
            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.axisAlpha = 0;
            valueAxis.inside = true;
            valueAxis.dashLength = 3;
            chart.addValueAxis(valueAxis);

            // GRAPH
            graph = new AmCharts.AmGraph();
            graph.type = "smoothedLine"; // this line makes the graph smoothed line.
            graph.lineColor = "#d1655d";
            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
            graph.bullet = "round";
            graph.bulletSize = 8;
            graph.bulletBorderColor = "#FFFFFF";
            graph.bulletBorderAlpha = 1;
            graph.bulletBorderThickness = 2;
            graph.lineThickness = 2;
            graph.valueField = "value";
            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
            chart.addGraph(graph);

            // CURSOR
            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0;
            chartCursor.cursorPosition = "mouse";
            chartCursor.categoryBalloonDateFormat = "YYYY";
            chart.addChartCursor(chartCursor);

            // SCROLLBAR
            var chartScrollbar = new AmCharts.ChartScrollbar();
            chart.addChartScrollbar(chartScrollbar);

            chart.creditsPosition = "bottom-right";

            // WRITE
            chart.write("Revenue");
        });

        // this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
        }
    </script>
    {{--    <script>--}}
    {{--        var chart;--}}
    {{--        var graph;--}}

    {{--        var chartData = [--}}
    {{--            {--}}
    {{--                "year": "1950",--}}
    {{--                "value": -0.307--}}
    {{--            },--}}

    {{--        ];--}}


    {{--        AmCharts.ready(function () {--}}
    {{--            // SERIAL CHART--}}
    {{--            chart = new AmCharts.AmSerialChart();--}}

    {{--            chart.dataProvider = chartData;--}}
    {{--            chart.marginLeft = 10;--}}
    {{--            chart.categoryField = "year";--}}
    {{--            chart.dataDateFormat = "YYYY";--}}

    {{--            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens--}}
    {{--            chart.addListener("dataUpdated", zoomChart);--}}

    {{--            // AXES--}}
    {{--            // category--}}
    {{--            var categoryAxis = chart.categoryAxis;--}}
    {{--            categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true--}}
    {{--            categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY--}}
    {{--            categoryAxis.dashLength = 3;--}}
    {{--            categoryAxis.minorGridEnabled = true;--}}
    {{--            categoryAxis.minorGridAlpha = 0.1;--}}

    {{--            // value--}}
    {{--            var valueAxis = new AmCharts.ValueAxis();--}}
    {{--            valueAxis.axisAlpha = 0;--}}
    {{--            valueAxis.inside = true;--}}
    {{--            valueAxis.dashLength = 3;--}}
    {{--            chart.addValueAxis(valueAxis);--}}

    {{--            // GRAPH--}}
    {{--            graph = new AmCharts.AmGraph();--}}
    {{--            graph.type = "smoothedLine"; // this line makes the graph smoothed line.--}}
    {{--            graph.lineColor = "#d1655d";--}}
    {{--            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0--}}
    {{--            graph.bullet = "round";--}}
    {{--            graph.bulletSize = 8;--}}
    {{--            graph.bulletBorderColor = "#FFFFFF";--}}
    {{--            graph.bulletBorderAlpha = 1;--}}
    {{--            graph.bulletBorderThickness = 2;--}}
    {{--            graph.lineThickness = 2;--}}
    {{--            graph.valueField = "value";--}}
    {{--            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";--}}
    {{--            chart.addGraph(graph);--}}

    {{--            // CURSOR--}}
    {{--            var chartCursor = new AmCharts.ChartCursor();--}}
    {{--            chartCursor.cursorAlpha = 0;--}}
    {{--            chartCursor.cursorPosition = "mouse";--}}
    {{--            chartCursor.categoryBalloonDateFormat = "YYYY";--}}
    {{--            chart.addChartCursor(chartCursor);--}}

    {{--            // SCROLLBAR--}}
    {{--            var chartScrollbar = new AmCharts.ChartScrollbar();--}}
    {{--            chart.addChartScrollbar(chartScrollbar);--}}

    {{--            chart.creditsPosition = "bottom-right";--}}

    {{--            // WRITE--}}
    {{--            chart.write("Monetizable");--}}
    {{--        });--}}

    {{--        // this method is called when chart is first inited as we listen for "dataUpdated" event--}}
    {{--        function zoomChart() {--}}
    {{--            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues--}}
    {{--            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));--}}
    {{--        }--}}
    {{--    </script>--}}









    {{--    <script>--}}
    {{--        var chart;--}}
    {{--        var graph;--}}

    {{--        var chartData = [--}}
    {{--            {--}}
    {{--                "year": "1950",--}}
    {{--                "value": -0.307--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1951",--}}
    {{--                "value": -0.168--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1952",--}}
    {{--                "value": -0.073--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1953",--}}
    {{--                "value": -0.027--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1954",--}}
    {{--                "value": -0.251--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1955",--}}
    {{--                "value": -0.281--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1956",--}}
    {{--                "value": -0.348--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1957",--}}
    {{--                "value": -0.074--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1958",--}}
    {{--                "value": -0.011--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1959",--}}
    {{--                "value": -0.074--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1960",--}}
    {{--                "value": -0.124--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1961",--}}
    {{--                "value": -0.024--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1962",--}}
    {{--                "value": -0.022--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1963",--}}
    {{--                "value": 0--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1964",--}}
    {{--                "value": -0.296--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1965",--}}
    {{--                "value": -0.217--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1966",--}}
    {{--                "value": -0.147--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1967",--}}
    {{--                "value": -0.15--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1968",--}}
    {{--                "value": -0.16--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1969",--}}
    {{--                "value": -0.011--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1970",--}}
    {{--                "value": -0.068--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1971",--}}
    {{--                "value": -0.19--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1972",--}}
    {{--                "value": -0.056--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1973",--}}
    {{--                "value": 0.077--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1974",--}}
    {{--                "value": -0.213--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1975",--}}
    {{--                "value": -0.17--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1976",--}}
    {{--                "value": -0.254--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1977",--}}
    {{--                "value": 0.019--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1978",--}}
    {{--                "value": -0.063--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1979",--}}
    {{--                "value": 0.05--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1980",--}}
    {{--                "value": 0.077--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1981",--}}
    {{--                "value": 0.12--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1982",--}}
    {{--                "value": 0.011--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1983",--}}
    {{--                "value": 0.177--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1984",--}}
    {{--                "value": -0.021--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1985",--}}
    {{--                "value": -0.037--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1986",--}}
    {{--                "value": 0.03--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1987",--}}
    {{--                "value": 0.179--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1988",--}}
    {{--                "value": 0.18--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1989",--}}
    {{--                "value": 0.104--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1990",--}}
    {{--                "value": 0.255--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1991",--}}
    {{--                "value": 0.21--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1992",--}}
    {{--                "value": 0.065--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1993",--}}
    {{--                "value": 0.11--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1994",--}}
    {{--                "value": 0.172--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1995",--}}
    {{--                "value": 0.269--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1996",--}}
    {{--                "value": 0.141--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1997",--}}
    {{--                "value": 0.353--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1998",--}}
    {{--                "value": 0.548--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1999",--}}
    {{--                "value": 0.298--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2000",--}}
    {{--                "value": 0.267--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2001",--}}
    {{--                "value": 0.411--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2002",--}}
    {{--                "value": 0.462--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2003",--}}
    {{--                "value": 0.47--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2004",--}}
    {{--                "value": 0.445--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2005",--}}
    {{--                "value": 0.47--}}
    {{--            }--}}
    {{--        ];--}}


    {{--        AmCharts.ready(function () {--}}
    {{--            // SERIAL CHART--}}
    {{--            chart = new AmCharts.AmSerialChart();--}}

    {{--            chart.dataProvider = chartData;--}}
    {{--            chart.marginLeft = 10;--}}
    {{--            chart.categoryField = "year";--}}
    {{--            chart.dataDateFormat = "YYYY";--}}

    {{--            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens--}}
    {{--            chart.addListener("dataUpdated", zoomChart);--}}

    {{--            // AXES--}}
    {{--            // category--}}
    {{--            var categoryAxis = chart.categoryAxis;--}}
    {{--            categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true--}}
    {{--            categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY--}}
    {{--            categoryAxis.dashLength = 3;--}}
    {{--            categoryAxis.minorGridEnabled = true;--}}
    {{--            categoryAxis.minorGridAlpha = 0.1;--}}

    {{--            // value--}}
    {{--            var valueAxis = new AmCharts.ValueAxis();--}}
    {{--            valueAxis.axisAlpha = 0;--}}
    {{--            valueAxis.inside = true;--}}
    {{--            valueAxis.dashLength = 3;--}}
    {{--            chart.addValueAxis(valueAxis);--}}

    {{--            // GRAPH--}}
    {{--            graph = new AmCharts.AmGraph();--}}
    {{--            graph.type = "smoothedLine"; // this line makes the graph smoothed line.--}}
    {{--            graph.lineColor = "#d1655d";--}}
    {{--            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0--}}
    {{--            graph.bullet = "round";--}}
    {{--            graph.bulletSize = 8;--}}
    {{--            graph.bulletBorderColor = "#FFFFFF";--}}
    {{--            graph.bulletBorderAlpha = 1;--}}
    {{--            graph.bulletBorderThickness = 2;--}}
    {{--            graph.lineThickness = 2;--}}
    {{--            graph.valueField = "value";--}}
    {{--            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";--}}
    {{--            chart.addGraph(graph);--}}

    {{--            // CURSOR--}}
    {{--            var chartCursor = new AmCharts.ChartCursor();--}}
    {{--            chartCursor.cursorAlpha = 0;--}}
    {{--            chartCursor.cursorPosition = "mouse";--}}
    {{--            chartCursor.categoryBalloonDateFormat = "YYYY";--}}
    {{--            chart.addChartCursor(chartCursor);--}}

    {{--            // SCROLLBAR--}}
    {{--            var chartScrollbar = new AmCharts.ChartScrollbar();--}}
    {{--            chart.addChartScrollbar(chartScrollbar);--}}

    {{--            chart.creditsPosition = "bottom-right";--}}

    {{--            // WRITE--}}
    {{--            chart.write("vCpm");--}}
    {{--        });--}}

    {{--        // this method is called when chart is first inited as we listen for "dataUpdated" event--}}
    {{--        function zoomChart() {--}}
    {{--            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues--}}
    {{--            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));--}}
    {{--        }--}}
    {{--    </script>--}}
    {{--    <script>--}}
    {{--        var chart;--}}
    {{--        var graph;--}}

    {{--        var chartData = [--}}
    {{--            {--}}
    {{--                "year": "1950",--}}
    {{--                "value": -0.307--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1951",--}}
    {{--                "value": -0.168--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1952",--}}
    {{--                "value": -0.073--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1953",--}}
    {{--                "value": -0.027--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1954",--}}
    {{--                "value": -0.251--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1955",--}}
    {{--                "value": -0.281--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1956",--}}
    {{--                "value": -0.348--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1957",--}}
    {{--                "value": -0.074--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1958",--}}
    {{--                "value": -0.011--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1959",--}}
    {{--                "value": -0.074--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1960",--}}
    {{--                "value": -0.124--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1961",--}}
    {{--                "value": -0.024--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1962",--}}
    {{--                "value": -0.022--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1963",--}}
    {{--                "value": 0--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1964",--}}
    {{--                "value": -0.296--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1965",--}}
    {{--                "value": -0.217--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1966",--}}
    {{--                "value": -0.147--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1967",--}}
    {{--                "value": -0.15--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1968",--}}
    {{--                "value": -0.16--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1969",--}}
    {{--                "value": -0.011--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1970",--}}
    {{--                "value": -0.068--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1971",--}}
    {{--                "value": -0.19--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1972",--}}
    {{--                "value": -0.056--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1973",--}}
    {{--                "value": 0.077--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1974",--}}
    {{--                "value": -0.213--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1975",--}}
    {{--                "value": -0.17--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1976",--}}
    {{--                "value": -0.254--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1977",--}}
    {{--                "value": 0.019--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1978",--}}
    {{--                "value": -0.063--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1979",--}}
    {{--                "value": 0.05--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1980",--}}
    {{--                "value": 0.077--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1981",--}}
    {{--                "value": 0.12--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1982",--}}
    {{--                "value": 0.011--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1983",--}}
    {{--                "value": 0.177--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1984",--}}
    {{--                "value": -0.021--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1985",--}}
    {{--                "value": -0.037--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1986",--}}
    {{--                "value": 0.03--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1987",--}}
    {{--                "value": 0.179--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1988",--}}
    {{--                "value": 0.18--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1989",--}}
    {{--                "value": 0.104--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1990",--}}
    {{--                "value": 0.255--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1991",--}}
    {{--                "value": 0.21--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1992",--}}
    {{--                "value": 0.065--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1993",--}}
    {{--                "value": 0.11--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1994",--}}
    {{--                "value": 0.172--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1995",--}}
    {{--                "value": 0.269--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1996",--}}
    {{--                "value": 0.141--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1997",--}}
    {{--                "value": 0.353--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1998",--}}
    {{--                "value": 0.548--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "1999",--}}
    {{--                "value": 0.298--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2000",--}}
    {{--                "value": 0.267--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2001",--}}
    {{--                "value": 0.411--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2002",--}}
    {{--                "value": 0.462--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2003",--}}
    {{--                "value": 0.47--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2004",--}}
    {{--                "value": 0.445--}}
    {{--            },--}}
    {{--            {--}}
    {{--                "year": "2005",--}}
    {{--                "value": 0.47--}}
    {{--            }--}}
    {{--        ];--}}


    {{--        AmCharts.ready(function () {--}}
    {{--            // SERIAL CHART--}}
    {{--            chart = new AmCharts.AmSerialChart();--}}

    {{--            chart.dataProvider = chartData;--}}
    {{--            chart.marginLeft = 10;--}}
    {{--            chart.categoryField = "year";--}}
    {{--            chart.dataDateFormat = "YYYY";--}}

    {{--            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens--}}
    {{--            chart.addListener("dataUpdated", zoomChart);--}}

    {{--            // AXES--}}
    {{--            // category--}}
    {{--            var categoryAxis = chart.categoryAxis;--}}
    {{--            categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true--}}
    {{--            categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY--}}
    {{--            categoryAxis.dashLength = 3;--}}
    {{--            categoryAxis.minorGridEnabled = true;--}}
    {{--            categoryAxis.minorGridAlpha = 0.1;--}}

    {{--            // value--}}
    {{--            var valueAxis = new AmCharts.ValueAxis();--}}
    {{--            valueAxis.axisAlpha = 0;--}}
    {{--            valueAxis.inside = true;--}}
    {{--            valueAxis.dashLength = 3;--}}
    {{--            chart.addValueAxis(valueAxis);--}}

    {{--            // GRAPH--}}
    {{--            graph = new AmCharts.AmGraph();--}}
    {{--            graph.type = "smoothedLine"; // this line makes the graph smoothed line.--}}
    {{--            graph.lineColor = "#d1655d";--}}
    {{--            graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0--}}
    {{--            graph.bullet = "round";--}}
    {{--            graph.bulletSize = 8;--}}
    {{--            graph.bulletBorderColor = "#FFFFFF";--}}
    {{--            graph.bulletBorderAlpha = 1;--}}
    {{--            graph.bulletBorderThickness = 2;--}}
    {{--            graph.lineThickness = 2;--}}
    {{--            graph.valueField = "value";--}}
    {{--            graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";--}}
    {{--            chart.addGraph(graph);--}}

    {{--            // CURSOR--}}
    {{--            var chartCursor = new AmCharts.ChartCursor();--}}
    {{--            chartCursor.cursorAlpha = 0;--}}
    {{--            chartCursor.cursorPosition = "mouse";--}}
    {{--            chartCursor.categoryBalloonDateFormat = "YYYY";--}}
    {{--            chart.addChartCursor(chartCursor);--}}

    {{--            // SCROLLBAR--}}
    {{--            var chartScrollbar = new AmCharts.ChartScrollbar();--}}
    {{--            chart.addChartScrollbar(chartScrollbar);--}}

    {{--            chart.creditsPosition = "bottom-right";--}}

    {{--            // WRITE--}}
    {{--            chart.write("Rpm");--}}
    {{--        });--}}

    {{--        // this method is called when chart is first inited as we listen for "dataUpdated" event--}}
    {{--        function zoomChart() {--}}
    {{--            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues--}}
    {{--            chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));--}}
    {{--        }--}}

    <script src="{{asset('assets/js/pages/crud/metronic-datatable/base/html-table.js')}}" type="text/javascript"></script>
    <!--begin::Page Vendors(used by this page) -->
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/js/pages/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>
@endsection
