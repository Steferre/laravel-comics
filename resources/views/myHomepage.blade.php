@extends('layouts.default')

@section('singlePageTitle', 'HOMEPAGE')

@section('content')
<main>
    <div class="my_btn_large">
        <a href="#">current series</a>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="comicsBox">
            @foreach($comicsList as $key => $singleComics)
                <div class="comicsCard">
                    <a href="{{ route('comicPage', ['index' => $key]) }}"><img src="{{ $singleComics['thumb'] }}" class="comicImg" alt="comics poster"></a>
                    <h5><a href="{{ route('comicPage', ['index' => $key]) }}">{{ $singleComics['series'] }}</a></h5>
                </div> 
            @endforeach
            </div>
            <div class="my_btn">
                <a href="#">load more</a>
            </div>
        </div>
    </div>
    <div class="blueBox">
        <div class="container">
            <a href="#">
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="immagine">
                <span>DIGITAL COMICS</span>
            </a>
            <a href="#">
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="immagine">
                <span>DC MERCHANDISE</span>
            </a>
            <a href="#">
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="immagine">
                <span>SUBSCRIPTION</span>
            </a>
            <a href="#">
                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="immagine">
                <span>COMIC SHOP LOCATOR</span>
            </a>
            <a href="#">
                <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="immagine">
                <span>DC POWER VISA</span>
            </a>
        </div>
    </div>
</main>
@endsection