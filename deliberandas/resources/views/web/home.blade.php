<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deliberandas</title>
    <link rel="icon" 
      type="image/png" 
      href="{{ asset('assets/web') }}/assets/images/logo.png">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/plugins/gimpo-icons/style.css">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/web') }}/assets/css/responsive.css">
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <header class="site-header site-header__header-two ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('assets/web') }}/assets/images/logo.png" class="main-logo" width="88" alt="Deliberandas" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" one-page-scroll-menu navigation-box">
                            <li class="current scrollToLink">
                                <a href="#banner">Inicio</a>
                                
                            </li>
                            <li class="scrollToLink">
                                <a href="#features">Beneficios</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#screenshots">App Screenshots</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#pricing">Pricing</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#video">Video</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#news">News</a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">News Page</a></li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a class="thm-btn header__cta-btn" href="#">Sign In</a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->
        <section class="banner-two" id="banner">
            <div class="container">
                <div class="banner-two__moc">
                    <img with="30px" src="{{ asset('assets/web') }}/assets/images/000.png" alt="">
                </div><!-- /.banner-two__moc -->
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-two__content">
                            <img src="{{ asset('assets/web') }}/assets/images/cta-line-1-1.png" class="banner-two__line" alt="">
                            <h3 class="banner-two__title">Elige tu<br>
                                compra <br>
                                Nosotros la entregamos.</h3><!-- /.banner-two__title -->
                            <p class="banner-two__text">Excepteur sint occaecat cupidatat non proident sunt in culpa
                                <br> qui
                                officia deserunt mollit lorem ipsum anim id est laborum <br> perspiciatis unde.</p>
                            <!-- /.banner-two__text -->
                            <a href="#" class="banner-two__btn thm-btn ">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.banner-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-two -->
      
        <section class="service-one" id="features">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tag-line">Las ventajas de usar nuestros servicios
                    </p><!-- /.block-title__tag-line -->
                    <h2 class="block-title__title">La única app que necesitarás</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="service-one__content-wrap">
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-responsive"></i>
                            <h3 class="service-one__title"><a href="#">Suscripción <br> Grátuita</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-computer-graphic "></i>
                            <h3 class="service-one__title"><a href="#">Fácil <br> Acceso</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-development"></i>
                            <h3 class="service-one__title"><a href="#">Todo tipo de <br> Usuarios</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-development1"></i>
                            <h3 class="service-one__title"><a href="#">Totalmente <br> Segura</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                    <!--<div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-app-development"></i>
                            <h3 class="service-one__title"><a href="#">Daily <br> Update</a></h3>
                            
                        </div>
                    </div> /.service-one__single -->
                </div><!-- /.service-one__content-wrap -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

 


        <section class="cta-three">
            <div class="container">
                <div class="cta-three__image">
                    <img src="{{ asset('assets/web') }}/assets/images/cta-line-1-2.png" class="cta-three__line" alt="">
                    <img src="{{ asset('assets/web') }}/assets/images/cta-moc-1-2.png" alt="">
                </div><!-- /.cta-two__image -->
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="cta-three__content">
                            <div class="block-title text-left">
                                <p class="block-title__tag-line">Checkout App Features
                                </p><!-- /.block-title__tag-line -->
                                <h2 class="block-title__title">Discover the Powerful <br>
                                    Tools For Your Repeat <br>
                                    Customers</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="cta-three__text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry
                                when an unknown printer took a galley of type and scrambled it to make. Lorem ipsum
                                dolor sit
                                amet, consectetur adipisicing elit, sed do eiusmod tempor anagi icdunt ut labore et
                                dolore magna
                                aliqua.</p><!-- /.cta-two__tagline -->

                            <a href="#" class="thm-btn cta-three__btn">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-three -->

        <section class="fact-one">
            <div class="container">
                <div class="inner-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-one__single color-1">
                                <h3 class="fact-one__title counter">7842 </h3><!-- /.fact-one__title -->
                                <p class="fact-one__text">Downloads</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__single -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-one__single color-2">
                                <h3 class="fact-one__title counter">6020</h3><!-- /.fact-one__title -->
                                <p class="fact-one__text">Likes</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__single -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-one__single color-3">
                                <h3 class="fact-one__title counter">360</h3><!-- /.fact-one__title -->
                                <p class="fact-one__text">5 Star Rating</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__single -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-one__single color-4">
                                <h3 class="fact-one__title counter">200</h3><!-- /.fact-one__title -->
                                <p class="fact-one__text">Awards</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__single -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.fact-one -->
    
        <section class="pricing-one" id="pricing">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tag-line">Pricing Tables
                    </p><!-- /.block-title__tag-line -->
                    <h2 class="block-title__title">Choose Pricing Plans</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pricing-one__single color-1 wow fadeInDown" data-wow-duration="1500ms">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__amount">$20.00 </h3><!-- /.pricing-one__amount -->
                                <p class="pricing-one__name">Basic Pack</p><!-- /.pricing-one__name -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="list-unstyled pricing-one__list">
                                <li>Extra features</li>
                                <li>Lifetime free support</li>
                                <li>Upgrate options</li>
                                <li>Full access</li>
                            </ul><!-- /.list-unstyled pricing-one__list -->
                            <a href="#" class="thm-btn pricing-one__btn">Purchase</a><!-- /.thm-btn pricing-one__btn -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="pricing-one__single color-2 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__amount">$30.00 </h3><!-- /.pricing-one__amount -->
                                <p class="pricing-one__name">Standard Pack</p><!-- /.pricing-one__name -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="list-unstyled pricing-one__list">
                                <li>Extra features</li>
                                <li>Lifetime free support</li>
                                <li>Upgrate options</li>
                                <li>Full access</li>
                            </ul><!-- /.list-unstyled pricing-one__list -->
                            <a href="#" class="thm-btn pricing-one__btn">Purchase</a><!-- /.thm-btn pricing-one__btn -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="pricing-one__single color-3 wow fadeInDown" data-wow-duration="1500ms">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__amount">$40.00 </h3><!-- /.pricing-one__amount -->
                                <p class="pricing-one__name">Professional Pack</p><!-- /.pricing-one__name -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="list-unstyled pricing-one__list">
                                <li>Extra features</li>
                                <li>Lifetime free support</li>
                                <li>Upgrate options</li>
                                <li>Full access</li>
                            </ul><!-- /.list-unstyled pricing-one__list -->
                            <a href="#" class="thm-btn pricing-one__btn">Purchase</a><!-- /.thm-btn pricing-one__btn -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->


        <section class="blog-one blog-one__home thm-gray-bg" id="news">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Solicita tu primer envio</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                 

            </div><!-- /.container -->
        </section><!-- /.blog-one blog-one__home -->

        <div class="container">
               <!-- MultiStep Form -->
               <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form id="msform" method="POST" action="{{ route('cargarPedido') }}">
                            @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active">Datos persona que envia</li>
                                    <li>Datos de producto</li>
                                    <li>Datos de pago</li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <h2 class="fs-title">Datos persona que envia</h2>
                                    <h3 class="fs-subtitle">Dinos quien eres</h3>
                                    <input type="text" id="fname" name="fname" placeholder="Nombre" required>
                                    <input type="text" id="lname" name="lname" placeholder="Apellido" required>
                                    <input type="text" id="dni" name="dni" placeholder="Documento de identidad" required>
                                    <input type="text" id="phone" name="phone" placeholder="Número celular" required>
                                    <input type="text" id="mail" name="mail" placeholder="Correo" required>
                                    <input type="text" id="address" name="address" placeholder="Dirección de entrega" required>

                                    <input type="button" id="button1" name="next" class="next action-button" value="Siguiente">
                                </fieldset>
                                <fieldset>
                                    <h2 class="fs-title">Datos de Productos</h2>
                                    <h3 class="fs-subtitle">Especifica los detalles del producto y de donde se envia</h3>
                                    <input type="text" id="attendant" name="attendant" placeholder="Nombre del encargado de entrega del producto"/>
                                    <input type="text" id="description" name="description" placeholder="Descripción detallada del producto"/>
                                    <input type="text" id="originAddress" name="originAddress" placeholder="Dirección de origen"/>
                                     <input type="button" id="button2" class="next action-button" value="Siguiente"/>
                                </fieldset>
                                <fieldset>
                                    <h2 class="fs-title">Método de pago</h2>
                                    <h3 class="fs-subtitle">Método de pago a utilizar</h3>
                                    <!-- <input type="text" id="payment" name="payment" placeholder="Email"/> -->
                                    <select name="payment" id="payment">
                                        <option value="volvo">Elige un metodo de pago</option>
                                        <option value="volvo">Pago movil</option>
                                        <option value="saab">transferencia</option>
                                        <option value="mercedes">Zelle</option>
                                        <option value="audi">criptomoneda</option>
                                    </select>
                                    <!-- <input type="submit" id="submit" name="submit" class="submit action-button" value="Enviar"/> -->
                                    <button type="submit" class="btn btn-primary btn-round btn-lg">Enviar</button>
                                </fieldset>
                            </form>
                        
                        </div>
                    </div>
                    <!-- /.MultiStep Form -->
        </div>

        <section class="cta-one">
            <div class="container text-center">
                <h3 class="block-title__title">Download our App Today & <br>
                    Experience Endless Possibilities. </h3><!-- /.block-title__title -->
                <p class="cta-one__text">and get started with a free 1 month trial for your business</p>
                <!-- /.cta-one__text -->
                <a href="#" class="thm-btn cta-one__btn">Download Our App</a><!-- /.thm-btn -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->
        <footer class="site-footer">
            <div class="site-footer__bubble-1"></div><!-- /.site-footer__bubble-1 -->
            <div class="site-footer__line"></div><!-- /.site-footer__line -->
            <div class="site-footer__bubble-2"></div><!-- /.site-footer__bubble-2 -->
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="footer-widget footer-widget__about">
                                <img src="{{ asset('assets/web') }}/assets/images/logo-light.png" width="88" alt="" class="footer-widget__logo">
                                <p class="footer-widget__contact"><a href="tel:888-666-0000">888 666 0000</a></p>
                                <!-- /.footer-widget__contact -->
                                <p class="footer-widget__contact"><a
                                        href="mailto:needhelp@example.com">needhelp@example.com</a>
                                </p><!-- /.footer-widget__contact -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-6 d-flex justify-content-between footer-widget__links-wrap">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links list-unstyled">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">How It Works</a></li>
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Services</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links list-unstyled">
                                    <li><a href="#">Speed Optimization </a></li>
                                    <li><a href="#">Marketing Analysis </a></li>
                                    <li><a href="#">SEO and Backlinks </a></li>
                                    <li><a href="#">Content Marketing</a></li>
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links list-unstyled">
                                    <li><a href="#">Help </a></li>
                                    <li><a href="#">Support </a></li>
                                    <li><a href="#">Clients </a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget__mailchimp">
                                <h3 class="footer-widget__title">Subscribe</h3><!-- /.footer-widget__title -->
                                <form action="#" class="footer-widget__mc-form mc-form"
                                    data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e">
                                    <input type="email" id="mc-email" class="formInput" placeholder="Email address">
                                    <button type="submit"><i class="fa fa-location-arrow"></i>
                                        <!-- /.fa fa-paper-plane --></button>
                                </form><!-- /.footer-widget__mc-form -->
                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container">
                        <p class="site-footer__copy">&copy; copyright 2019 by <a href="#">Layerdrops.com</a></p>
                        <!-- /.site-footer__copy -->
                        <div class="site-footer__social">
                            <a href="#" class="fa fa-facebook-square"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-pinterest-p"></a>
                        </div><!-- /.site-footer__social -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('assets/web') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/TweenMax.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/wow.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/swiper.min.js"></script>
    <script src="{{ asset('assets/web') }}/assets/js/jquery.easing.min.js"></script>

    <!-- template scripts -->
    <script src="{{ asset('assets/web') }}/assets/js/theme.js"></script>

    <script>

        $(document).ready(function(){
            $('#button1').attr('disabled',true);


            function validateNextButton() {
                var buttonDisabled = $('#fname').val().trim() === '' || $('#lname').val().trim() === '' || $('#dni').val().trim() === '' || $('#phone').val().trim() === '' || $('#mail').val().trim() === '' || $('#address').val().trim() === '';
                $('#button1').prop('disabled', buttonDisabled);
            }

            $('#fname').on('keyup', validateNextButton);
            $('#lname').on('keyup', validateNextButton);
            $('#dni').on('keyup', validateNextButton);
            $('#phone').on('keyup', validateNextButton);
            $('#mail').on('keyup', validateNextButton);
            $('#address').on('keyup', validateNextButton); 


            $('#button2').attr('disabled',true);


            function validateNextButton2() {
                var buttonDisabled2 = $('#attendant').val().trim() === '' || $('#description').val().trim() === '' || $('#originAddress').val().trim() === '';
                $('#button2').prop('disabled', buttonDisabled2);
            }

            $('#attendant').on('keyup', validateNextButton2);
            $('#description').on('keyup', validateNextButton2);
            $('#originAddress').on('keyup', validateNextButton2);

            $('#submit').attr('disabled', true);


            function validateNextButton3() {
                var buttonDisabled3 = $('#payment').val().trim() === '';
                $('#submit').prop('disabled', buttonDisabled3);
            }

            $('#payment').on('change', validateNextButton3);

               
            
        });

    </script>


    <script>
    
    
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
        if(animating) return false;
        animating = true;
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
            'transform': 'scale('+scale+')',
            'position': 'absolute'
        });
                next_fs.css({'left': left, 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
                current_fs.hide();
                animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
                current_fs.hide();
                animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function(){
        return false;
    })

</script>

</body>

</html>