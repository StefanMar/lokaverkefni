@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach($extras as $extra)
                <div class="panel-heading"><div class="panel-body">
                    <h1>{{ $extra->name }}</h1>
                    <h5><b>Dagskostnaður:</b> {{ $extra->cost }}kr</h5>
                </div></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
