@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<p>found!</p>

<p>
    <a href="/listings/{{$listing['id']}}">{{$listing['id']}}</a>
</p>
<h2>{{$listing['title']}}</h2>
<p>{{$listing['description']}}</p>