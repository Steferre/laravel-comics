<nav>
    <div class="container my_flex">
        <img src="{{ asset('images/dc-logo.png') }}" class="dc_logo" alt="logo dc">
        <div class="linksBox">
            <ul class="horListStyle">
                <li><a href="#">characters</a></li>
                <li><a href="#">comics</a></li>
                <li><a href="#">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">collectibles</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">shop <i class="fa fa-sort-desc"></i></a></li>
                {{--l ultimo li dovra' contenere una select--}}
            </ul>
        </div>
        <div class="inputBox">
            <input type="text" placeholder='Search'>
            <i class="fa fa-search"></i>
        </div>
    </div>
</nav>