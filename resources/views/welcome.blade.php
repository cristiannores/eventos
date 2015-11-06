
@extends('layouts.master')
@include('layouts.navigation')
@include('layouts.silder_flex')
@section('title', 'Page Title')



@section('content')


<!-- CONTENT -->
<section>
    <div class="container">

        <header class="nomargin">
            <h2>
                Welcome to 
                <span class="word-rotator"><!-- word rotator -->
                    <span class="items bold">
                        <span><em>Epona</em></span>
                        <span><em>the future</em></span>
                        <span><em>multipurpose</em></span>
                    </span>
                </span><!-- /word rotator -->
            </h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et.</p>
        </header>

        <div id="portfolio" class="container">

            <ul class="nav nav-pills isotope-filter isotope-filter" data-sort-id="isotope-list" data-option-key="filter">
                <li data-option-value="*" class="active"><a href="#">All</a></li>
                <li data-option-value=".development"><a href="#">Development</a></li>
                <li data-option-value=".photography"><a href="#">Photography</a></li>
                <li data-option-value=".design"><a href="#">Design</a></li>
            </ul>


            <div class="row">

                <ul class="sort-destination isotope" data-sort-id="isotope-list">

                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="portfolio-single-basic.html">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a1.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Epona Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                    <li class="sotope-item col-sm-6 col-md-4 photography"><!-- item 2 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>VIEW</strong> VIDEO
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a2.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Video Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                    <li class="sotope-item col-sm-6 col-md-4 design"><!-- item 3 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="portfolio-single-basic.html">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a3.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Epona Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                    <li class="sotope-item col-sm-6 col-md-4 photography"><!-- item 4 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="portfolio-single-basic.html">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a4.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Epona Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item 5 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>VIEW</strong> VIDEO
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a5.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Video Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                    <li class="sotope-item col-sm-6 col-md-4 design"><!-- item 6 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="portfolio-single-basic.html">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a6.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Epona Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                    <li class="sotope-item col-sm-6 col-md-4 photography"><!-- item 7 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="portfolio-single-basic.html">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a7.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Epona Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item 8 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>VIEW</strong> VIDEO
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a8.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Video Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                    <li class="sotope-item col-sm-6 col-md-4 design"><!-- item 9 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="portfolio-single-basic.html">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="/epona/images/demo/portfolio/a2.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Epona Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </li>

                </ul>

            </div><!-- /.masonry-container -->


            <!-- Banner -->
            <a class="margin-bottom60 block clearfix" href="#purchase" target="_blank" rel="nofollow">
                <img class="img-responsive" src="/epona/images/big_banner.png" alt="">
            </a><!-- /Banner -->

        </div>


    </div>
</section>
<!-- /CONTENT -->


@stop