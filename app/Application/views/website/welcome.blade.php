@extends('layouts.app')
@push('css')
<style>

</style>
@endpush
@section('search')
    @include('layouts.search')
@endsection
@section('content')
    <!--_______________________________________ Carousel__________________________________ -->
    <div class="allcontain">
        <div id="carousel-up" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner " role="listbox">
                <div class="item active">
                    <img src="{{url('website/image/oldcar.jpg')}}" alt="oldcar">
                    <div class="carousel-caption">
                        <h2>Porsche 356</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                            sed do eiusmod tempor incididunt ut labore </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{url('website/image/porche.jpg')}}" alt="porche">
                    <div class="carousel-caption">
                        <h2>Porche</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                            sed do eiusmod tempor incididunt ut labore </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{url('website/image/benz.jpg')}}" alt="benz">
                    <div class="carousel-caption">
                        <h2>Car</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                            sed do eiusmod tempor incididunt ut labore </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
