<!DOCTYPE html>
<html>

<head>
    <title></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Custome CSS link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- font awsome link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- owl theme -->
    <link href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">

    <!-- google material ui -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

</head>

<body>

    <div class="super_container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('images/college_logo2.png') }}" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ url('/institute') }}">Institute</a>
                    <a class="nav-item nav-link" href="{{ url('/administration') }}">Administration</a>
                    <a class="nav-item nav-link" href="{{ url('/departments') }}">Departments</a>
                    <a class="nav-item nav-link" href="{{ url('/admission') }}">Admission</a>
                    <a class="nav-item nav-link" href="{{ url('/gallery') }}">Gallery</a>
                    <a class="nav-item nav-link" href="{{ url('/e-learning') }}">E-Learning</a>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- Footer -->

        <footer class="footer">
            <div class="container">


                <!-- Footer Content -->

                <div class="footer_content">
                    <div class="row">

                        <!-- Footer Column - About -->
                        <div class="col-lg-3 footer_col">

                            <!-- Logo -->
                            <div class="logo_container">
                                <div class="logo">
                                    <span>pggc 11</span>
                                </div>
                            </div>

                            <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla,
                                vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum,
                                tempor lacus.</p>

                        </div>

                        <!-- Footer Column - Menu -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Menu</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_list_item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="footer_list_item"><a href="{{ url('/') }}">About Us</a></li>
                                    <li class="footer_list_item"><a href="{{ url('/') }}">Courses</a></li>
                                    <li class="footer_list_item"><a href="{{ url('/') }}">News</a></li>
                                    <li class="footer_list_item"><a href="{{ url('/') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column - Usefull Links -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Usefull Links</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_list_item"><a href="#">Testimonials</a></li>
                                    <li class="footer_list_item"><a href="#">FAQ</a></li>
                                    <li class="footer_list_item"><a href="#">Community</a></li>
                                    <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column - Contact -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Contact</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <i class="fas fa-map-marker"></i>
                                        </div>
                                        <span>Sector - 11 , Chandigarh , India</span>
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <span>0034 37483 2445 322</span>
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <span>info@gc11.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Copyright -->

                <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                    <div class="footer_copyright">
                        <span>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | PGGC 11 and created by <a href="#" data-toggle="tooltip"
                                data-placement="top" title="Website Coming Soon! Contact Us on 7973639088">ViewPort
                                Techstudio</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="footer_social ml-sm-auto">
                        <ul class="menu_social">
                            <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </footer>

    </div>

    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

    <script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>