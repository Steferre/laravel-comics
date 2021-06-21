@extends('layouts.default')

@section('singlePageTitle', 'ComicPage')

@section('content')

@php 
/*formatto la data secondo lo stile richiesto*/
$saleDate = $singleComic['sale_date'];

$date = date_create($saleDate);

$formatDate = date_format($date, "M d Y");
@endphp

<main class="mainComicPage">
    <div class="blueLine">
        <img src="{{$singleComic['thumb']}}" alt="poster comic">
        <div class="layover">
            <div class="comicBook">
                <a href="#">comic book</a>
            </div>
            <div class="gallery">
                <a href="#">view gallery</a>
            </div>
        </div>        
    </div>
    <div class="containerMCP">
        <div class="contentBox">
            <div class="lxSide">
                <h2>{{$singleComic['title']}}</h2>
                <div class="greenBar">
                    <div class="price">
                        <span>U.S. Price: <strong>{{$singleComic['price']}}</strong></span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="avBtn">
                        <a href="#">Check Availability</a>
                    </div>
                </div>
                <p>
                    {{$singleComic['description']}}
                </p>
            </div>
            <div class="rxSide">
                <span>advertisement</span>
                <img src="{{ asset('images/adv.jpg') }}" alt="pubblicita'">
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
                        @foreach($singleComic['artists'] as $artist)
                            <a href="#">{{$artist}}</a>
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
                        @foreach($singleComic['writers'] as $writer)
                            <a href="#">{{$writer}}</a>
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
                        <a href="#"><span>{{$singleComic['series']}}</span></a>
                    </div>
                </div>
                <div class="rowBox">
                    <div class="boxTitle">
                        <span>U.S. Price:</span>
                    </div>
                    <div class="boxList">
                        <span>{{$singleComic['price']}}</span>
                    </div>
                </div>
                <div class="rowBox">
                    <div class="boxTitle">
                        <span>On Sale Date:</span>
                    </div>
                    <div class="boxList">
                        <span>{{ $formatDate }}</span>
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
                    <div class="imgWindow"></div>
                </div>
            </a>
            <a href="#">
                <div class="bannerCard">
                    <span>shop dc</span>
                    <div class="imgWindow"></div> 
                </div>
            </a>
            <a href="#">
                <div class="bannerCard">
                    <span>comic shop locator</span>
                    <div class="imgWindow"></div>
                </div>
            </a>
            <a href="#">
                <div class="bannerCard">
                    <span>subscriptions</span>
                    <div class="imgWindow"></div>
                </div>
            </a>
        </div>
    </div>
</main>
@endsection