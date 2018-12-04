@extends('layouts.app')

@section('content')

    <h1>contact page </h1>

    @if(count($people))
    @foreach($people as $public)
        <li>{{$public}}</li>
    @endforeach

    @endif
@stop

@section('footer')
<script>
    alert('Hello visitor!!')
</script>
    
@stop