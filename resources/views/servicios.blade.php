@extends('layouts.master')
@include('layouts.navigation')
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="parallax parallax-1" style="background-image: url(/img/breadcumb.jpg); background-attachment: fixed; background-position: 50% 37px;">
    <span class="parallax-overlay"></span>
    <div class="container parallax-content">
        <header>
            <ul class="breadcrumb"><!-- breadcrumb -->
                <li><a href="/">Inicio</a></li>
                <li class="active">Servicios</li>
            </ul><!-- /breadcrumb -->
            <h2><!-- Page Title -->
                <strong>Servicios</strong>
            </h2><!-- /Page Title -->

        </header>
    </div>
</div>


<!-- CONTENT -->
<section>
    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <h3>Porque mereces <strong> el mejor servicio</strong>!</h3>
                <p>Est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui. Ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velits.</p>

            </div>

            <div class="col-md-4">
                <h3><strong>Toro</strong> Eventos</h3>
                <div class="toggle toggle-accordion">

                    <div class="toggle">
                        <label>Nuestra misión</label>
                        <div class="toggle-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
                        </div>
                    </div>

                    <div class="toggle">
                        <label>Nuestros servicios</label>
                        <div class="toggle-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
                        </div>
                    </div>

                    <div class="toggle">
                        <label>Nuestra filosofía</label>
                        <div class="toggle-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <h3>Nuestros <strong>Servicios</strong></h3>

        <div class="row">

            <div class="col-md-4">

                <figure>
                    <img class="img-responsive" src="/epona/images/demo/other/o1.jpg" alt="" />
                </figure>

                <h4>Responsive</h4>
                <p>Epona is fully responsive and can adapt to any screen size, its incredibly fast and flexible. Try resizing your browser window to see the action.</p>

            </div>

            <div class="col-md-4">

                <figure>
                    <img class="img-responsive" src="/epona/images/demo/other/o3.jpg" alt="" />
                </figure>

                <h4>Endless Possibilities</h4>
                <p>You have endless possibilities to create layouts - various shortcodes and page layouts!</p>

            </div>

            <div class="col-md-4">

                <figure>
                    <img class="img-responsive" src="/epona/images/demo/other/o4.jpg" alt="" />
                </figure>

                <h4>Powerful Sliders</h4>
                <p>Epona includes the Revolution Slider, Layer Slider, Flex Slider and the OWL Carousel to help your content stand out to your viewer.</p>

            </div>

        </div>


        <hr />


        <!-- FEATURED BOXES 3 -->
        <div class="row featured-box-minimal">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-group"></i> Customer Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-code"></i> HTML5 / CSS3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-bars"></i> Buttons</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
            </div>


            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-google-plus"></i> Google Fonts</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-check"></i> Icons</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4><i class="fa fa-desktop"></i> Lightbox</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
            </div>

        </div>
        <!-- /FEATURED BOXES 3 -->


       

    </div>
</section>
<!-- /CONTENT -->


@stop