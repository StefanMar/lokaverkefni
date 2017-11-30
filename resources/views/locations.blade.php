@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach($locations as $location)
                <div class="panel-heading"><div class="panel-body">
                    <h1>{{ $location->name }}</h1>

                    <form method="POST" action="/locations/{{ $location->id }}/like">
                        {{ csrf_field() }}
                        <button class="btn btn-default">Likes: {{ $location->likes()->count() }}</button>
                    </form>

                </div></div>

                <form method="POST" action="/locations/{{ $location->id }}/comment">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea style="resize: none" rows="1" name="body" class="form-control" placeholder="Hvernig fannst þér þjónustan?"></textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button style="width: 100%;" class="btn btn-primary">Senda</button>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach

            

            </div>
        </div>
    </div>
</div>
@endsection
