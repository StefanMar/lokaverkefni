@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach($cars as $car)
                <div class="panel-heading"><div class="panel-body">
                    <h1>{{ $car->type }}</h1>
                    <h5><b>Árgerð:</b> {{ $car->year }}</h5>
                    <h5><b>Dagskostnaður:</b> {{ $car->cost }}kr</h5>
                </div></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
