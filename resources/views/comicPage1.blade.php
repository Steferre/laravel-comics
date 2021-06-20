@extends('layouts.default')

@section('singlePageTitle', 'ComicPage')

@section('content')
<main class="mainComicPage">
    <div class="blueLine">
        <img src="{{$comicsList[0]['thumb']}}" alt="poster comic">        
    </div>
    <div class="containerMCP">
        <div class="contentBox">
            <div class="lxSide">
                <h2>{{$comicsList[0]['title']}}</h2>
                <div class="greenBar">
                    <div class="price">
                        <span>U.S. Price: <strong>{{$comicsList[0]['price']}}</strong></span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="avBtn">
                        <a href="#">Check Availability</a>
                    </div>
                </div>
                <p>
                    {{$comicsList[0]['description']}}
                </p>
            </div>
            <div class="rxSide">
                {{-- <img src="{{ asset('images/adv.jpg') }}" alt="pubblicita'"> --}}
                {{-- ERR_BLOCKED_BY_CLIENT --}}
                <div class="fakeImg"></div>
            </div>
        </div>
    </div>
    <div class="mainBtmHalf">
        <div class="containerMCP">
            <div class="tableBox">
                <h3>Talent</h3>
                <div class="rowBox">
                    <div class="boxTitle">
                        <span>Art by:</span>
                    </div>
                    <div class="boxList lineH">
                        <span>
                        @foreach($comicsList[0]['artists'] as $artist)
                            <a href="#">{{$artist}},</a>
                        @endforeach
                        </span>
                    </div>
                </div>
                <div class="rowBox">
                    <div class="boxTitle">
                        <span>Written by:</span>
                    </div>
                    <div class="boxList lineH">
                        <span>
                        @foreach($comicsList[0]['writers'] as $writer)
                            <a href="#">{{$writer}},</a>
                        @endforeach
                        </span>
                    </div>
                </div>
            </div>
            <div class="tableBox">
                <h3>Specs</h3>
                <div class="rowBox">
                    <div class="boxTitle">
                        <span>Series:</span>
                    </div>
                    <div class="boxList">
                        <a href="#"><span>{{$comicsList[0]['series']}}</span></a>
                    </div>
                </div>
                <div class="rowBox">
                    <div class="boxTitle">
                        <span>U.S. Price:</span>
                    </div>
                    <div class="boxList">
                        <span>{{$comicsList[0]['price']}}</span>
                    </div>
                </div>
                <div class="rowBox">
                    <div class="boxTitle">
                        <span>On Sale Date:</span>
                    </div>
                    <div class="boxList">
                        <span>{{$comicsList[0]['sale_date']}}</span>
                    </div>
                </div>
            </div>                        
        </div>

    </div>
    <div class="btnBanner">
        <div class="containerMCP">
            <a href="#">
                <div class="bannerCard">
                    <span>digital comics</span>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                </div>
            </a>
            <a href="#">
                <div class="bannerCard">
                    <span>shop dc</span>
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                </div>
            </a>
            <a href="#">
                <div class="bannerCard">
                    <span>comic shop locator</span>
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                </div>
            </a>
            <a href="#">
                <div class="bannerCard">
                    <span>subscriptions</span>
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                </div>
            </a>
        </div>
    </div>
</main>
@endsection