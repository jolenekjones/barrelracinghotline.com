@extends('layouts.front-end-app')

@section('title', 'Home Page')

@section('content')
<!-- Horse For Sale Slider -->
<div class="slider">
    <div class="Modern-Slider content-section" id="top">
        <!-- Item -->
        <div class="item item-1">
            <div class="img-fill">
                <div class="image"></div>
                <div class="info">
                    <div>
                        <h1>HorseHotline.net</h1>
                        <p>Sell, Shop, Showcase
                            <a href="https://plus.google.com/+templatemo" target="_blank">templatemo</a> Barrel Racing Horses.<br>
                        </p>
                        <div class="white-button button">
                            <a href="#featured">Shop Barrel Horses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-2">
            <div class="img-fill">
                <div class="image"></div>
                <div class="info">
                    <div>
                        <h1>Solid 1D</h1>
                        <p>All Horses Listed here are have credentials verified.</p>

                        <div class="white-button button">
                            <a href="#featured">Shop Solid 1D</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-3">
            <div class="img-fill">
                <div class="image"></div>
                <div class="info">
                    <div>
                        <h1>Horses Wanted ~ ISO</h1>
                        <div class="white-button button">
                            <a href="#featured">View ISO Horses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>

<div id='fh5co-main'>

    <!-- Company Intro -->
    <section id="video" class="content-section">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1>Our <em>Platform</em> In Action.</h1>
                    <p>Anyone can create an account and list horses here FREE.
                        We offer a variety of DIY TOOLS.  (link to diy-tools.php).
                        You can also HIRE US.  (link to hire-us.php).
                    </p>
                </div>
                <div class='row'>
                    <div class="col-lg-6">
                        <div class="accent-button button">
                            <a href="{{url('/')}}diy-tools.php">Do It Yourself</a>
                        </div>
                    </div>
                    <div class='col-lg-6'> 
                        <div class="accent-button button">
                            <a href="{{url('/')}}/hire-us.php">Hire Us</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="box-video">
                    <div class="bg-video" style="background-image: url(https://unsplash.imgix.net/photo-1425036458755-dc303a604201?fit=crop&fm=jpg&q=75&w=1000);">
                        <div class="bt-play">Play</div>
                    </div>
                    <div class="video-container">
                        <iframe width="100%" height="520" src="https://www.youtube.com/embed/j-_7Ub-Zkow?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featrued Stallions -->
    <section id='featured'  class="fh5co-narrow-content-pad">
        <div class="section-heading">
            <h1>Featured<br><em>Stallions</em></h1>
            <div class="featured-button button">
                <a href="#projects">Continue Reading</a>
            </div>
        </div>
        <div  class="section-content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_1.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>Lorem ipsum dolor</h4>
                        <span>Proin et sapien</span>
                        <p>#1 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed at massa turpis. Fusce ut pretium dui, vitae ullamcorper velit.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_2.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>Phasellus a lacus ac odio</h4>
                        <span>Maximus</span>
                        <p>#2 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed at massa turpis. Fusce ut pretium dui, vitae ullamcorper velit.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_3.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>Proin sit amet fringilla</h4>
                        <span>Vulputate</span>
                        <p>#3 Aliquam mollis lacus eget metus efficitur lobortis. Suspendisse libero lacus, accumsan vitae commodo tristique, luctus gravida metus.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_2.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>In volutpat augue lectus</h4>
                        <span>Elementum</span>
                        <p>#4 Aliquam mollis lacus eget metus efficitur lobortis. Suspendisse libero lacus, accumsan vitae commodo tristique, luctus gravida metus.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_1.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>Cras commodo odio</h4>
                        <span>Aliquam</span>
                        <p>#5 Mauris lacinia pretium libero, ut tincidunt lacus molestie ornare. Phasellus a facilisis erat. Praesent eleifend nibh mauris, quis sodales lorem convallis pulvinar.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_3.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>Sed at massa turpis</h4>
                        <span>Curabitur</span>
                        <p>#6 Vestibulum tincidunt ornare ligula vel molestie. Curabitur hendrerit mauris mollis ipsum vulputate rutrum. Phasellus luctus odio eget dui imperdiet.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_2.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>Aliquam mollis lacus</h4>
                        <span>Suspendisse</span>
                        <p>#7 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_1.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>Mauris lacinia pretium</h4>
                        <span>Vestibulum</span>
                        <p>#8 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('/')}}/assets/front/img/featured_3.jpg" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Reading</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>Proin sit amet fringilla erat</h4>
                        <span>Convallis</span>
                        <p>#9 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="featured-button button">
                    <a href="#projects">Browse/Search Barrel Racing Stallions</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Horses -->
    <section  class="fh5co-narrow-content-pad">
        <div class="section-heading">
            <h1>Featured<br><em>Horses</em></h1>

            <div class="featured-button button">
                <a href="#projects">Featured Your Horse</a>
            </div>
        </div>
        <div class="section-content">
            <div class="row p-0 m-0">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="row">
                        <div class="masonry">
                            <div class="row">
                                <div class="col-md-6 gallery-item">
                                    <a    href="{{url('/')}}/assets/front/img/portfolio_big_1.jpg" data-lightbox="image">
                                        <div class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_1.jpg);
                                             height: 322px; background-position: center; background-size: cover;'>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 gallery-item">
                                    <a  
                                        href="{{url('/')}}/assets/front/img/portfolio_big_2.jpg" data-lightbox="image">
                                        <div class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_2.jpg);    height: 322px;
                                             background-position: center;background-size: cover;'></div>
                                    </a>
                                </div>
                                <div class="col-md-4 gallery-item">
                                    <a href="{{url('/')}}/assets/front/img/portfolio_big_3.jpg"
                                       data-lightbox="image">
                                        <div  class='img-item'   style='background:url({{url('/')}}/assets/front/img/portfolio_big_3.jpg);    height: 250px;
                                              background-position: center; background-size: cover;'></div>
                                    </a>
                                </div>
                                <div class="col-md-4 gallery-item">
                                    <a href="{{url('/')}}/assets/front/img/portfolio_big_4.jpg" data-lightbox="image">
                                        <div class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_4.jpg);    height: 250px;
                                             background-position: center; background-size: cover;'></div>
                                    </a>
                                </div>
                                <div class="col-md-4 gallery-item gallery-overlay-container">
                                    <div class='number'>2+</div>
                                    <a href="{{url('/')}}/assets/front/img/portfolio_big_5.jpg" data-lightbox="image">
                                        <div  class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_5.jpg);    height: 250px;
                                              background-position: center;  background-size: cover;'></div>
                                    </a>
                                </div>
                                <div class="col-md-8"  style="display: none;">
                                    <a href="{{url('/')}}/assets/front/img/portfolio_big_2.jpg" data-lightbox="image">
                                    </a>
                                </div>
                                <div class="col-md-8" style="display: none;">
                                    <a href="{{url('/')}}/assets/front/img/portfolio_big_5.jpg" data-lightbox="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <figure class="d-flex">

                        <p>Praesent pellentesque efficitur magna, 
                            <br>sed pellentesque neque malesuada vitae.</p>
                </div>   
                <div class="row m-0">
                    <div class='col-lg-8 col-md-8 col-sm-12 gallery-overlay-container'>
                        <img src="{{url('/')}}/assets/front/img/blog_1.jpg" class="img-fluid" alt="Responsive image">
                        <div class="number">5+</div>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-sm-12'>
                        <div class="text-content">
                            <figure class="d-flex">
                                <a href="https://performancehorsehotline.com/details/member.php?id=11442">                                      
                                    <img loading="lazy" 
                                         src="https://phhusers.s3.us-east-2.amazonaws.com/userfiles/11442/PDR-logo-profile.jpg" 
                                         class="profile-pic-img" alt="">
                                </a>
                                <h3 class="biznametruncate" style="margin-top: 0;">
                                    <a class=" profile-business-name text-decoration-none" href="https://performancehorsehotline.com/details/member.php?id=11442">
                                        PDR Performance Horses                                             
                                    </a>
                                    <div>
                                        <i class="fa-solid fa-crown"></i>
                                        <a  class="profile-name text-decoration-none"
                                            href="https://performancehorsehotline.com/details/member.php?id=11442">    
                                            Tammy Brown                                                
                                        </a>
                                    </div>
                                </h3>
                            </figure>
                            <div class=" p-0">
                                <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                    <a class="text-decoration-none" 
                                       href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                </h1>
                                <p class="horses-sire-dam-ds text-capitalize mb-0">
                                    2022 Brown Stallion
                                </p>
                                <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                    Slye By Design  x<br>
                                    Misscharlypotatoes12<br>
                                </p> 
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="row p-0 m-0">
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="row">
                                <div class="masonry">
                                    <div class="row">
                                        <div class="col-md-6 gallery-item">
                                            <a    href="{{url('/')}}/assets/front/img/portfolio_big_1.jpg" data-lightbox="image">
                                                <div class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_1.jpg);
                                                     height: 322px; background-position: center; background-size: cover;'></div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 gallery-item">
                                            <a  
                                                href="{{url('/')}}/assets/front/img/portfolio_big_2.jpg" data-lightbox="image">
                                                <div class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_2.jpg);    height: 322px;
                                                     background-position: center;background-size: cover;'></div>
                                            </a>
                                        </div>
                                        <div class="col-md-12 gallery-item">
                                            <a href="{{url('/')}}/assets/front/img/portfolio_big_3.jpg"
                                               data-lightbox="image">
                                                <div  class='img-item'   style='background:url({{url('/')}}/assets/front/img/portfolio_big_3.jpg);    height: 322px;
                                                      background-position: center; background-size: cover;'></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <figure class="d-flex">
                                <a href="https://performancehorsehotline.com/details/member.php?id=11442">                                      
                                    <img loading="lazy" 
                                         src="https://phhusers.s3.us-east-2.amazonaws.com/userfiles/11442/PDR-logo-profile.jpg" 
                                         class="profile-pic-img" alt="">
                                </a>
                                <h3 class="biznametruncate " style="    margin-top: 0;">
                                    <a class=" profile-business-name text-decoration-none" href="https://performancehorsehotline.com/details/member.php?id=11442">
                                        PDR Performance Horses                                             </a>
                                    <div>
                                        <i class="fa-solid fa-crown"></i>
                                        <a  class="profile-name text-decoration-none"
                                            href="https://performancehorsehotline.com/details/member.php?id=11442">    
                                            Tammy Brown                                                
                                        </a>
                                    </div>
                                </h3>
                            </figure>
                            <div class=" p-0">
                                <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                    <a class="text-decoration-none" href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                </h1>
                                <p class="horses-sire-dam-ds text-capitalize mb-0">
                                    2022 Brown Stallion
                                </p>
                                <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                    Slye By Design  x<br>
                                    Misscharlypotatoes12<br>
                                </p> 
                            </div>
                        </div>
                    </div>


                    <hr />
                    <div class="row p-0 m-0">
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="row">
                                <div class="masonry">
                                    <div class="row">
                                        <div class="col-md-6 gallery-item">
                                            <a    href="{{url('/')}}/assets/front/img/portfolio_big_1.jpg" data-lightbox="image">
                                                <div class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_1.jpg);
                                                     height: 322px; background-position: center; background-size: cover;'></div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 gallery-item">
                                            <a  
                                                href="{{url('/')}}/assets/front/img/portfolio_big_2.jpg" data-lightbox="image">
                                                <div class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_2.jpg);    height: 322px;
                                                     background-position: center;background-size: cover;'></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <figure class="d-flex">
                                <a href="https://performancehorsehotline.com/details/member.php?id=11442">                                      
                                    <img loading="lazy" 
                                         src="https://phhusers.s3.us-east-2.amazonaws.com/userfiles/11442/PDR-logo-profile.jpg" 
                                         class="profile-pic-img" alt="">
                                </a>
                                <h3 class="biznametruncate " style="    margin-top: 0;">
                                    <a class=" profile-business-name text-decoration-none" href="https://performancehorsehotline.com/details/member.php?id=11442">
                                        PDR Performance Horses                                             </a>
                                    <div>
                                        <i class="fa-solid fa-crown"></i>
                                        <a  class="profile-name text-decoration-none"
                                            href="https://performancehorsehotline.com/details/member.php?id=11442">    
                                            Tammy Brown                                                
                                        </a>
                                    </div>
                                </h3>
                            </figure>
                            <div class=" p-0">
                                <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                    <a class="text-decoration-none" href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                </h1>
                                <p class="horses-sire-dam-ds text-capitalize mb-0">
                                    2022 Brown Stallion
                                </p>
                                <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                    Slye By Design  x<br>
                                    Misscharlypotatoes12<br>
                                </p> 
                            </div>
                        </div>
                    </div>


                    <hr />
                    <div class="row p-0 m-0">
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="row">
                                <div class="masonry">
                                    <div class="row">
                                        <div class="col-md-12 gallery-item">
                                            <a    href="{{url('/')}}/assets/front/img/portfolio_big_1.jpg" data-lightbox="image">
                                                <div class='img-item'  style='background:url({{url('/')}}/assets/front/img/portfolio_big_1.jpg);
                                                     height: 500px; background-position: center; background-size: cover;'></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <figure class="d-flex">
                                <a href="https://performancehorsehotline.com/details/member.php?id=11442">                                      
                                    <img loading="lazy" 
                                         src="https://phhusers.s3.us-east-2.amazonaws.com/userfiles/11442/PDR-logo-profile.jpg" 
                                         class="profile-pic-img" alt="">
                                </a>
                                <h3 class="biznametruncate " style="    margin-top: 0;">
                                    <a class=" profile-business-name text-decoration-none" href="https://performancehorsehotline.com/details/member.php?id=11442">
                                        PDR Performance Horses                                             </a>
                                    <div>
                                        <i class="fa-solid fa-crown"></i>
                                        <a  class="profile-name text-decoration-none"
                                            href="https://performancehorsehotline.com/details/member.php?id=11442">    
                                            Tammy Brown                                                
                                        </a>
                                    </div>
                                </h3>
                            </figure>
                            <div class=" p-0">
                                <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                    <a class="text-decoration-none" href="https://performancehorsehotline.com/details/horse-profile.php?horseid=16185">Designed By Charly </a>
                                </h1>
                                <p class="horses-sire-dam-ds text-capitalize mb-0">
                                    2022 Brown Stallion
                                </p>
                                <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                    Slye By Design  x<br>
                                    Misscharlypotatoes12<br>
                                </p> 
                            </div>
                        </div>
                    </div>
                    <div class="accent-button button mt-2">
                        <a href="{{url('/horse-details/88998')}}">Continue Reading</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="blog" class="content-section">
        <div class="section-heading">
            <h1>Blog<br><em>Entries</em></h1>
            <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum. 
                <br>Phasellus luctus odio eget dui imperdiet.</p>
        </div>
        <div class="section-content">
            <div class="tabs-content">
                <div class="wrapper">
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        <li><a href="#tab1" class="active">Horses For Sale</a></li>
                        <li><a href="#tab2">Horses ISO</a></li>
                        <li><a href="#tab3">Stallions For Sale</a></li>
                        <li><a href="#tab4">Horse Highlights</a></li>
                    </ul>
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <ul>
                                <li>
                                    <div class="item row m-0">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_1.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div>
                                        <div class='col-lg-3 col-md-3 col-sm-12 col-sm-12'>
                                            <div class="text-content">
                                                <h4>Integer ultrices augue</h4>
                                                <span>25 July 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_2.jpg" alt="">
                                            <div class="number">4+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>16 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_3.jpg" alt="">
                                            <div class="number">3+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 text-content">
                                            <h4>Sed at massa turpis</h4>
                                            <span>10 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab2">
                            <ul>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_3.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 text-content">
                                            <h4>Sed at massa turpis</h4>
                                            <span>30 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_1.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>24 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_2.jpg" alt="">

                                            <div class="number">5+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>12 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab3">
                            <ul>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_2.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div> 
                                        <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>26 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_1.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>22 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12 gallery-overlay-container'>
                                            <img src="{{url('/')}}/assets/front/img/blog_3.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                            <h4>Integer ultrices augue</h4>
                                            <span>8 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab4">
                            <ul>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12'>
                                            <img src="{{url('/')}}/assets/front/img/blog_1.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>26 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>                                
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12'>
                                            <img src="{{url('/')}}/assets/front/img/blog_3.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12  text-content">
                                            <h4>Integer ultrices augue eu</h4>
                                            <span>24 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item row">
                                        <div class='col-lg-9 col-md-9 col-sm-12'>
                                            <img src="{{url('/')}}/assets/front/img/blog_2.jpg" alt="">
                                            <div class="number">5+</div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>20 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section> 
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="content-section">
        <div id="map">

            <!-- How to change your own map point
               1. Go to Google Maps
               2. Click on your location point
               3. Click "Share" and choose "Embed map" tab
               4. Copy only URL and paste it within the src="" field below
            -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="contact-content">
            <div class="section-heading">
                <h1>Contact<br><em>Sentra</em></h1>
                <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum. 
                    <br>Phasellus luctus odio eget dui imperdiet.</p>

            </div>
            <div class="section-content">
                <form id="contact" action="#" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="footer">
        <p>Copyright &copy; 2018. Design: <a href="http://templatemo.com/tm-518-sentra" target="_blank">Sentra</a> | Distribution: <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
    </section>
</div>
<script type='text/javascript'>
    function equalizeOwlItemHeights() {
        var maxHeight = 0;

        // Reset heights
        $('.owl-carousel .owl-item.active').css('height', 'auto');

        // Find max height
        $('.owl-carousel .owl-item.active').each(function () {
            var thisHeight = $(this).outerHeight();
            if (thisHeight > maxHeight) {
                maxHeight = thisHeight;
            }
        });

        // Set all active items to the max height
        $('.owl-carousel .owl-item.active').css('height', maxHeight + 'px');
    }

// Run after Owl initializes and on resize
    jQuery('.owl-carousel').on('initialized.owl.carousel resized.owl.carousel changed.owl.carousel', function () {
        setTimeout(equalizeOwlItemHeights, 100); // Delay to ensure content is rendered
    });

</script>
@endsection