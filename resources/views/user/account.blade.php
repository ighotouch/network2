@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Accounts <a href="add-account" class="pull-right">Add Account</a></div>
                    <div class="panel-body">
                        @if(count($accounts) > 0)
                            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Material</th>
                                    <th>Quantity</th>
                                    <th>Unit price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                                    <td>25</td>
                                    <td>$2.90</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                                    <td>50</td>
                                    <td>$1.25</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                                    <td>10</td>
                                    <td>$2.35</td>
                                </tr>
                                </tbody>
                            </table>

                        @else
                            <p>No account record add one now</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
