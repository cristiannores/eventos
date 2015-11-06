@extends('layouts.master')
@include('layouts.navigation')
@section('title', 'Page Title')

@section('content')
<div class="parallax parallax-1" style="background-image: url(/img/breadcumb.jpg); background-attachment: fixed; background-position: 50% 37px;">
    <span class="parallax-overlay"></span>
    <div class="container parallax-content">
        <header>
            <ul class="breadcrumb"><!-- breadcrumb -->
                <li><a href="/">Inicio</a></li>
                <li class="active">Quienes somos</li>
            </ul><!-- /breadcrumb -->
            <h2><!-- Page Title -->
                <strong>Quienes</strong> somos
            </h2><!-- /Page Title -->

        </header>
    </div>
</div>



<!-- CONTENT -->

<!-- BORN TO BE A WINNER -->
<section>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="owl-carousel controlls-over" data-plugin-options='{"items": 1, "singleItem": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
                    <div>
                        <img class="img-responsive" src="/img/eventos/baja_resolucion/CAM00125.jpg" width="555" height="311" alt="">
                    </div>
                    <div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/23630702" width="800" height="450"></iframe>
                        </div>
                    </div>
                    <div>
                        <img class="img-responsive" src="/epona/images/demo/about_2.jpg" width="555" height="311" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>
                    Somos 
                    <span class="word-rotator"><!-- word rotator -->
                        <span class="items bold">
                            <span>profesionales</span>
                            <span>cordiales</span>
                            <span>lo que necesitas</span>
                        </span>
                    </span><!-- /word rotator -->
                </h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore dolore magnm aliquam quaerat voluptatem.</p>
            </div>

        </div>
    </div>
</section>
<!-- /BORN TO BE A WINNER -->



<!-- WHO WE ARE and SKILLS -->
<section class="alternate">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h3>Our best <b>skills</b></h3>

                <p>This is the Best Theme I have ever seen. I am a full time web dev, and this theme blows me away. I wanted to thank you for all your hard work. I am really looking forward to building my new site! I think you thought of everything and then some.</p>
                <p>This is the Best Theme I have ever seen. I am a full time web dev, and this theme blows me away. I wanted to thank you for all your hard work. I am really looking forward to building my new site! I think you thought of everything and then some.</p>

                <div class="progress-bars">

                    <div class="progress-label">
                        <span>HTML/CSS</span>
                    </div>

                    <div class="progress thin">
                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%">
                            <span class="progress-bar-tooltip">100%</span>
                        </div>
                    </div>

                    <div class="progress-label">
                        <span>Design</span>
                    </div>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="96%" data-appear-animation-delay="300">
                            <span class="progress-bar-tooltip">96%</span>
                        </div>
                    </div>

                    <div class="progress-label">
                        <span>Mysql</span>
                    </div>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="69%" data-appear-animation-delay="600">
                            <span class="progress-bar-tooltip">69%</span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-6">
                <h3><b>Who</b> we are</h3>

                <div class="toogle">

                    <div class="toggle active">
                        <label>Our Company Mission</label>
                        <div class="toggle-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur <a data-toggle="tooltip" data-original-title="Default tooltip" href="#">pellentesque neque eget</a> diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. <a href="#" data-container="body" data-toggle="popover" data-placement="top" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" title="A Title">Popover on top</a></p>
                        </div>
                    </div>

                    <div class="toggle">
                        <label>The Epona inside</label>
                        <div class="toggle-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur <a data-toggle="tooltip" data-original-title="Default tooltip" href="#">pellentesque neque eget</a> diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. <a href="#" data-container="body" data-toggle="popover" data-placement="top" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" title="A Title">Popover on top</a></p>
                        </div>
                    </div>

                    <div class="toggle">
                        <label>The Epona Philosophy</label>
                        <div class="toggle-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur <a data-toggle="tooltip" data-original-title="Default tooltip" href="#">pellentesque neque eget</a> diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. <a href="#" data-container="body" data-toggle="popover" data-placement="top" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" title="A Title">Popover on top</a></p>
                        </div>
                    </div>

                    <div class="toggle">
                        <label>Work With Our Great Team</label>
                        <div class="toggle-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur <a data-toggle="tooltip" data-original-title="Default tooltip" href="#">pellentesque neque eget</a> diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. <a href="#" data-container="body" data-toggle="popover" data-placement="top" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" title="A Title">Popover on top</a></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section >
<!-- /WHO WE ARE and SKILLS -->


<!-- parallax -->
<div class="parallax parallax-1" style="background-image:url(assets/images/demo/other/o2.jpg);">
    <span class="parallax-overlay"></span>

    <div class="container parallax-content">

        <div class="row">
            <div class="col-md-5 col-sm-5">

                <!-- testimonial -->
                <div class="owl-carousel text-center fsize20" data-plugin-options='{"items": 1, "singleItem": true, "navigation": false, "pagination": true, "autoPlay": true}'>

                    <div>
                        <p>This is the Best Theme I have ever seen. I am a full time web dev, and this theme blows me away. I wanted to thank you for all your hard work. I am really looking forward to building my new site! I think you thought of everything and then some.</p>
                        <cite><strong>John Doe</strong>, Customer</cite>
                    </div>

                    <div>
                        <p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa.</p>
                        <cite><strong>Jessica Doe</strong>, Customer</cite>
                    </div>

                    <div>
                        <p>Praesent est laborum dolo rumes fugats untras. Etha rums ser quidem rerum facilis dolores nemis onis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                        <cite><strong>Dorin Doe</strong>, Customer</cite>
                    </div>

                </div>
                <!-- /testimonial -->

            </div>

            <div class="col-md-7 col-sm-7 text-right">


                <h4 class="nomargin">Give us a call</h4>
                <h1>800 - 1234 567</h1>
                <a href="#" class="btn btn-white btn-sm radius6">OR CONTACT US</a>

            </div>
        </div>

    </div>

</div>
<!-- /parallax -->


<!-- counter -->
<div class="text-center countTo paddings styleBackgroundColor"><!-- add "styleBackgroundColor" class for colored background and white text OR "dark" for a dark callout -->

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <strong data-to="13">0</strong>
                <label>Years Experience</label>
            </div>
            <div class="col-md-3">
                <strong data-to="13566">0</strong>
                <label>Hours of Development</label>
            </div>
            <div class="col-md-3">
                <strong data-to="6543">0</strong>
                <label>Happy Customers</label>
            </div>
            <div class="col-md-3">
                <strong data-to="1543">0</strong>
                <label>Cups of Coffee</label>
            </div>
        </div>
    </div>

</div>
<!-- /counter -->


<section class="container">

    <!-- CUSTOM CONTENT BOX -->
    <h3>Our great <strong>team</strong></h3>

    <div class="row">

        <div class="col-sm-3 col-md-3">
            <div class="box-content thumbnail text-center">
                <a href="page-about-me.html" class="item-image">
                    <img class="img-responsive" src="/epona/images/demo/people/fixed-height/9.jpg" alt="" />
                    <h3>
                        <span>Jessica Doe</span> <br />
                        <small>CEO</small>
                    </h3>
                </a>
                <div class="caption text-left">
                    <p>Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this template amets sumon.</p>
                    <a href="#" class="social rounded fa fa-facebook"></a>
                    <a href="#" class="social rounded fa fa-twitter"></a>
                    <a href="#" class="social rounded fa fa-google-plus"></a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-md-3">
            <div class="box-content thumbnail text-center">
                <a href="page-about-me.html" class="item-image">
                    <img class="img-responsive" src="/epona/images/demo/people/fixed-height/10.jpg" alt="" />
                    <h3>
                        <span>Jessica Doe</span> <br />
                        <small>Developer</small>
                    </h3>
                </a>
                <div class="caption text-left">
                    <p>Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis.</p>
                    <a href="#" class="social rounded fa fa-facebook"></a>
                    <a href="#" class="social rounded fa fa-twitter"></a>
                    <a href="#" class="social rounded fa fa-google-plus"></a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-md-3">
            <div class="box-content thumbnail text-center">
                <a href="page-about-me.html" class="item-image">
                    <img class="img-responsive" src="/epona/images/demo/people/fixed-height/11.jpg" alt="" />
                    <h3>
                        <span>Jessica Doe</span> <br />
                        <small>Design</small>
                    </h3>
                </a>
                <div class="caption text-left">
                    <p>Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this template amets sumon.</p>
                    <a href="#" class="social rounded fa fa-facebook"></a>
                    <a href="#" class="social rounded fa fa-twitter"></a>
                    <a href="#" class="social rounded fa fa-google-plus"></a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-md-3">
            <div class="box-content thumbnail text-center">
                <a href="page-about-me.html" class="item-image">
                    <img class="img-responsive" src="/epona/images/demo/people/fixed-height/13.jpg" alt="" />
                    <h3>
                        <span>Jessica Doe</span> <br />
                        <small>Director</small>
                    </h3>
                </a>
                <div class="caption text-left">
                    <p>Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this template.</p>
                    <a href="#" class="social rounded fa fa-facebook"></a>
                    <a href="#" class="social rounded fa fa-twitter"></a>
                    <a href="#" class="social rounded fa fa-google-plus"></a>
                </div>
            </div>
        </div>

    </div>
    <!-- /CUSTOM CONTENT BOX -->

</section>

<!-- /CONTENT -->


<!-- CALLOUT -->
<div class="callout dark"><!-- add "styleBackgroundColor" class for colored background and white text OR "dark" for a dark callout -->
    <div class="container">

        <div class="row">

            <div class="col-md-9"><!-- title + shortdesc -->
                <h3>Does Epona Convinced you?</h3>
                <p>If so, click to buy now, including <strong>lifetime upgrade</strong> for free!</p>
            </div>

            <div class="col-md-3"><!-- button -->
                <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-primary btn-lg">Purchase Now</a>
            </div>

        </div>

    </div>
</div>
<!-- /CALLOUT -->

@stop