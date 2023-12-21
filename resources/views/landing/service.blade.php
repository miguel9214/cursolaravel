@extends('layout.landing')
@section('title','Service')

@section('content')
<h1>Services</h1>
@component('_components.card')
@slot('title','Service 1')
@slot('content','lorem ip sum more die')
@endcomponent
@component('_components.card')
@slot('title','Service 2')
@slot('content','lorem ip sum more die')
@endcomponent
@component('_components.card')
@slot('title','Service 3')
@slot('content','lorem ip sum more die')
@endcomponent
@endsection