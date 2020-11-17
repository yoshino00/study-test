@extends('../layouts/test')
@section('title',$title)
@section('content')
    <h3>{{ $title }}</h3>
    <p>{{ $body }}</p>
@endsection