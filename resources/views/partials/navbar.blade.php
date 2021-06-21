@php
    $navItems = [
        0 => 'characters',
        1 => 'comics',
        2 => 'movies',
        3 => 'tv',
        4 => 'games',
        5 => 'collectibles',
        6 => 'videos',
        7 => 'fans',
        8 => 'news',
        9 => 'shop'
    ]
@endphp

<nav>
    <div class="container my_flex_centerV">
        <img src="{{ asset('images/dc-logo.png') }}" class="dc_logo" alt="logo dc">
        <div class="linksBox">
            <ul class="horListStyle">
                @foreach($navItems as $item)
                    <li><a href="/{{$item}}">{{ $item }}</a></li>
                @endforeach
                {{-- <li><a href="/characters">characters</a></li>
                <li><a href="#">comics</a></li>
                <li><a href="#">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">collectibles</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">shop <i class="fa fa-sort-desc"></i></a></li> --}}
                {{--l ultimo li dovra' contenere una select--}}
            </ul>
        </div>
        <div class="inputBox">
            <input type="text" placeholder='Search'>
            <i class="fa fa-search"></i>
        </div>
    </div>
</nav>