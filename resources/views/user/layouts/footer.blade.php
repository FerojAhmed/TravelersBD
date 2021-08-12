<footer class="bg-dark type-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h2><span style="font-weight: normal;">traveler</span><b>BD</b></h2>
                    <br>
                    <div class="f_text color-grey-7">Traveler’s BD is a platform by which tourist can easily find there trip without any trouble.Here they can find a lot of tourist places which are posting by many agencies.Different agencies posting there tour package and special offers through this site</div>
                    <div class="footer-share">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-pinterest"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
                <div class="footer-block">
                    <h6>Travel News</h6>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('user/img/home_6/news_1.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                            <span class="date-f">Mar 18, 2015</span>
                            <a href="#" class="r-more">read more</a>
                        </div>
                    </div>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('user/img/home_6/news_2.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                            <span class="date-f">Mar 18, 2015</span>
                            <a href="#" class="r-more">read more</a>
                        </div>
                    </div>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('user/img/home_6/news_1.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                            <span class="date-f">Mar 18, 2015</span>
                            <a href="#" class="r-more">read more</a>
                        </div>
                    </div>                          
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h6>Tags:</h6>
                    <a href="#" class="tags-b">flights</a>
                    <a href="#" class="tags-b">traveling</a>
                    <a href="#" class="tags-b">sale</a>
                    <a href="#" class="tags-b">cruises</a>
                    <a href="#" class="tags-b">cars</a>
                    <a href="#" class="tags-b">hotels</a>
                    <a href="#" class="tags-b">tours</a>
                    <a href="#" class="tags-b">booking</a>
                    <a href="#" class="tags-b">countries</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h6>Contact Info</h6>
                    <div class="contact-info">
                        <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>life is beautifull</span></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:93123456789">01521468423</a></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:">travelersbd01@gmail.com</a></div>                  
                        <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#">travelersbd01@gmail.com</a></div>                  

                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="footer-link bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <span>&copy; 2019 All rights reserved. travelerBD</span>
                    </div>
                    <ul>
                        <li><a class="link-aqua" href="{{ route('privacy') }}">Privacy Policy </a></li>
                        <li><a class="link-aqua" href="{{ route('about') }}">About Us</a></li>
                        <li><a class="link-aqua" href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>                                                                                                                    
<script src="{{ asset('user/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('user/js/idangerous.swiper.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.viewportchecker.min.js') }}"></script>
<script src="{{ asset('user/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('user/js/all.js') }}"></script>

@section('footer')
    @show