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
            @foreach($comicsList as $singleComics)
                <div class="comicsCard">
                    <a href="/comicPage1"><img src="{{ $singleComics['thumb'] }}" class="comicImg" alt="comics poster"></a>
                    <h5><a href="#">{{ $singleComics['series'] }}</a></h5>
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
                <i class="fa fa-tablet"></i>
                <span>DIGITAL COMICS</span>
            </a>
            <a href="#">
                <i class="fa fa-clone"></i>
                <span>DC MERCHANDISE</span>
            </a>
            <a href="#">
                <i class="fa fa-clone"></i>
                <span>SUBSCRIPTION</span>
            </a>
            <a href="#">
                <i class="fa fa-map-marker"></i>
                <span>COMIC SHOP LOCATOR</span>
            </a>
            <a href="#">
                <i class="fa fa-credit-card"></i>
                <span>DC POWER VISA</span>
            </a>
        </div>
    </div>
</main>
@endsection