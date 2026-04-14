@extends('base.base')
@section('content')
    <h1>Store Page</h1>
    @foreach ($product_category as $pc )
    <h5>{{ $pc->['name'] }}</h5>
    <p>{{ $pc->['description'] }}</p>
    @endforeach
    <img src="{{ asset('storage/images/foto.jpeg) }}" alt=""> 
        
    @endforeach
@endsection