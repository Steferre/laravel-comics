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
            <div class="talentBox">
                <h3>Talent</h3>
                <div class="artBox">
                    <div class="boxTitle">
                        <span>Art by:</span>
                    </div>
                    <span>
                    @foreach($comicsList[0]['artists'] as $artist)
                        <a href="#">{{$artist}},</a>
                    @endforeach
                    </span>
                </div>
                <div class="writtenBox"></div>
            </div>
            <div class="SpecsBox">
                <h3>Specs</h3>
            </div>                        
        </div>

    </div>
</main>
@endsection