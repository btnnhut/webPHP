@extends('masterView')
@section('sidebar')


@parent
<hr>
<p>This is Page AboutView.</p>
<hr>
@endsection


@section('component')
<hr>
<h1>Abut Us Page View.</h1>

<p>First name: {{$first_name}}</p>
<p>Last name: {{$last_name}}</p>
<hr>
@endsection
