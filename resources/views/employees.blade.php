@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach($employees as $employee)
                <div class="panel-heading"><div class="panel-body">
                    <h1>{{ $employee->name }}</h1>
                </div></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
