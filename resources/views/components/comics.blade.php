@extends('layouts.app')

@section('content')
<div class="container text-start">
    <div class="row">

        <div class="col-12">
            <div class="col-3 d-flex align-items-center flex-wrap">
                <button type="button" class="btn-cards text-white">CURRENT SERIES</button>
            </div>
        </div>
        
        <div class="col-12 d-flex py-5 px-4 gap-5 flex-wrap justify-content-center">
            @forelse ($comics as $key => $e)
            <div class="card d-flex flex-wrap col-10 col-md-5 col-lg-3 col-xxl-2">
                <img src="{{$e['thumb']}}" alt="">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{$e['series']}}</h5>
                    <a href="{{route('comic', $key)}}" class="btn btn-primary">Buy {{$e['price']}}</a>
                </div>
            </div>
            @empty
            <div class="empty display-1 fw-1 text-danger">Nothing to show</div>
            @endforelse
            <div class="col-12 text-center">
                <a href="#" class="btn-load text-white">LOAD MORE</a>
            </div>
        </div>

    </div>
</div>
@endsection