<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Stats URLs </title>

        <link rel="stylesheet" href="/css/app.css" media="screen" title="no title">

    </head>
    <body>
        <div class="container">
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
                                created At
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
                            <th>
                                URL
                            </th>
                            <th>
                                IP Public
                            </th>
                            <th>
                                Created At
                            </th>

                        </tr>
                        @foreach ($stats_detail as $histo)
                            <tr>
                                <td>
                                    {{ $histo->url }}
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
            </div>

        </div>
    </body>
</html>