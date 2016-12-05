@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">


                    @if (count($accounts) > 0)
                        <a href="#" class="btn btn-primary">Provide Help</a>
                    @else
                        Please <a href="/add-account" >add account</a> details to start providing help
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
