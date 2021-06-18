<footer>
    <div class="topFooter" style="background-image: url('{{asset('images/footer-bg.jpg')}}')">
        <div class="container my_flex">
            <div class="textBox">
                <div class="colBox my_flex">
                    <div class="columnText">
                        <h4>DC COMICS</h4>
                        <ul>
                            <li><a href="#">characters</a></li>
                            <li><a href="#">comics</a></li>
                            <li><a href="#">movies</a></li>
                            <li><a href="#">tv</a></li>
                            <li><a href="#">games</a></li>
                            <li><a href="#">videos</a></li>
                            <li><a href="#">news</a></li>
                        </ul>
                        <h4>SHOP</h4>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>
                    <div class="columnText">
                        <h4>DC</h4>
                        <ul>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy policy (New)</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="columnText">
                        <h4>SITES</h4>
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                        </ul>
                    </div>
                    {{--le tre colonne devono avere flex basis diviso 4, una restera' fantasma ma lasciera' lo spazio--}}
                </div>
                <div class="rights">
                    <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.</p>
                    <p><a href="#">Cookies Settings</a></p>
                </div>
            </div>
            <div class="logoBgBox">
                <img src="{{ asset('images/dc-logo-bg.png') }}" alt="logo dc di sfondo">
            </div>
        </div>
    </div>
    <div class="bottomFooter">
        <div class="container my_flex_centerV">
            <div class="signUpBtn">
                <a href="#">sign-up now!</a>
            </div>
            <div class="socialBox my_flex_centerV">
                <a href="#">follow us</a>
                <ul class="horListStyle">
                    <li><a href="#"><img src="{{ asset('images/footer-facebook.png') }}" alt="social btn link"></a></li>
                    <li><a href="#"><img src="{{ asset('images/footer-twitter.png') }}" alt="social btn link"></a></li>
                    <li><a href="#"><img src="{{ asset('images/footer-youtube.png') }}" alt="social btn link"></a></li>
                    <li><a href="#"><img src="{{ asset('images/footer-pinterest.png') }}" alt="social btn link"></a></li>
                    <li><a href="#"><img src="{{ asset('images/footer-periscope.png') }}" alt="social btn link"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>