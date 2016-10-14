@extends('layout')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1>Stats of All URLs </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">

        <table class="table table-striped table-bordered">
            <tr>
                <th>
                    URL original
                </th>
                <th>
                    URL Shorten
                </th>
                <th>
                    # Visits hits
                </th>
                <th>
                    # Visits Unique
                </th>
                <th>
                    Created
                </th>
            </tr>
            @foreach ($stats_general as $stat)
                <tr>
                    <td>
                        {{ $stat->url }}
                    </td>
                    <td>
                        {{ $stat->url_short }}
                    </td>
                    <td>
                        {{ $stat->count }}
                    </td>
                    <td>
                        {{ $stat->visit_unique }}
                    </td>
                    <td>
                        {{ $stat->created_at }}
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $stats_general->links() }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="table-responsive">

            <table class="table table-striped table-bordered">
            <tr>
                <th>URL</th>
                <th>Short</th>
                <th>IP Public</th>
                <th>Created</th>

            </tr>
            @foreach ($stats_detail as $histo)
                <tr>
                    <td>
                        {{ $histo->url }}
                    </td>
                    <td>
                        {{ $histo->code }}
                    </td>
                    <td>
                        {{ $histo->ip_public }}
                    </td>
                    <td>
                        {{ $histo->created_at }}
                    </td>

                </tr>
            @endforeach
        </table>
        {{ $stats_detail->links() }}

        </div>
    </div>
    <div class="col-md-12">
        
        <div id="chart" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
            
        </div>
    </div>
</div>
@endsection
@section('addjs')
<script   src="http://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
$(function () {
    $('#chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Top 20 URLs most visits (# hits) '
        },

        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Visits (hits)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '# hits <b>{point.y:.1f} </b>'
        },
        series: [{
            name: 'Url_short',
            data: {!! $data_json !!},
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#CCC',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

</script>
@endsection