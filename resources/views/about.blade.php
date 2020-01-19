@extends('master')

@section('content')
<div class="jumbotron">
    About Page
    <hr>
    <ul>
        @foreach ($names as $name)
            <li>Hello {{$name}}</li>
        @endforeach
    </ul>
    <ol>
        @forelse  ($names as $name)
            <li>Hello {{$name}}</li>
        @empty
            <li>No  Clients</li>
        @endforelse


    </ol>
</div>
@endsection

