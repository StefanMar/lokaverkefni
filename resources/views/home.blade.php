@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div></div>
                
                <div class="panel-heading"><a href="http://localhost:8000/cars">Bílar</a></div>
                <div class="panel-heading"><a href="http://localhost:8000/extras">Aukahlutir</a></div>
                <div class="panel-heading"><a href="http://localhost:8000/locations">Staðsetningar</a></div>
                <div class="panel-heading"><a href="http://localhost:8000/employees">Starfsmenn</a></div>
            </div>
        </div>
    </div>
</div>
@endsection