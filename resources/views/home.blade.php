@extends('layouts.master')

@section('content')

<!-- home row 1 -->

<!-- Home -->
<div class="container-fluid home_section1">
    <div class="flex-container">
        <div class="col-6 col-center m-auto">
            <div class="home_images_section">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <img src="{{ asset('images/homeNav1.jpg') }}" alt="">
                        </div>
                        <div class="item carousel-item">
                            <img src="{{ asset('images/homeNav2.jpg') }}" alt="">
                        </div>
                        <div class="item carousel-item">
                            <img src="{{ asset('images/homeNav3.jpg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 home_notice_board">
            <div class="popular page_section">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center">
                                <h1>Thing's You Have To Notice</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notice Board -->
            <div class="notice_board">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                                <li>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel
                                    nunc. Proin quis mi malesuada, finibus tortor fermentum,tempor lacus.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container more_info">
    <div class="row">
        <div class="col">
            <a href="{{ url('/ncc') }}" class="btn btn-outline-primary" role="button">NCC</a>
        </div>
        <div class="col">
            <a href="{{ url('/nss') }}" class="btn btn-outline-success" role="button">NSS</a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-outline-info" role="button">MHRD</a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-outline-warning" role="button">RUSA</a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-outline-danger" role="button">IQAC</a>
        </div>
    </div>
</div>


<!-- home row 3 -->
<!-- About us -->

<div class="about_college_home parallax">
    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>About The College</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container about_space">
        <div class="row">
            <div class="col-12">
                <p>Post Graduate Government College, Sector 11, Chandigarh is as old and as young as the City Beautiful.
                    Its growth and expansion have kept pace with the growth and expansion of the city.</p>
                <p>The college was established on May 26, 1953, in the building now housing the Mountview Hotel. Later
                    it shifted to the premises of Government Model Senior Secondary School in Sector 23. It moved
                    finally to its present building in Sector 11 on October 13, 1960. Since its inception, it has
                    witnessed a steady growth in its infrastructure and enrollment. The college building which was
                    originally designed by E Maxwell Fry to accommodate 700 students, now has more than 3272 students
                    with additions in infrastructure.</p>
                <p>The college was envisaged as a leading institution having its own distinct impress on the educational
                    and cultural map of the ‘City Beautiful’. A prestigious temple of learning, (just in the footsteps
                    of famous Govt College, Lahore), that could grow into an epicentre of intellectual and aesthetic
                    activities in the region. <span><a href="#">Read more >></a></span> </p>
            </div>
        </div>
    </div>
</div>

<!-- home row 4 -->
<!-- Courses -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Departments</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home_departments">
    <div class="container-fluid">
        <div class="row">
            <!-- course 1 -->
            <div class="col-4">
                <img src="{{ asset('images/libra.png') }}" alt="Humanities">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Humanities</a> </h2>
            </div>
            <!-- course 2 -->
            <div class="col-4">
                <img src="{{ asset('images/physics.png') }}" alt="Sciences">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Sciences</a> </h2>
            </div>
            <!-- course 3 -->
            <div class="col-4">
                <img src="{{ asset('images/economy.png') }}" alt="Commerce & Management">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Commerce & Management</a> </h2>
            </div>
        </div>
        <div class="row">
            <!-- course 4 -->
            <div class="col-6">
                <img src="{{ asset('images/running.png') }}" alt="Physical Education">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Physical Education</a> </h2>
            </div>
            <!-- course 5 -->
            <div class="col-6">
                <img src="{{ asset('images/web.png') }}" alt="Information Technology">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Information Technology</a> </h2>
            </div>
        </div>
    </div>
</div>



<!-- home row 5 -->
<!-- Gallery Link -->
<div class="home_gallery_link">
    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>PGGC 11 Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container gallery_link">
        <div class="row">
            <div class="col">
                <i class="far fa-images"></i>
                <p>PHOTOS</p>
            </div>
            <div class="col">
                <i class="far fa-calendar-alt"></i>
                <p>EVENTS</p>
            </div>
            <div class="col">
                <i class="fas fa-camera-retro"></i>
                <p>CAMPUS TOUR</p>
            </div>
            <div class="col">
                <i class="far fa-image"></i>
                <p>PLACEMENT</p>
            </div>
        </div>
    </div>
</div>

<!-- home row 4 -->
<!-- events -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Upcoming Events</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="upcoming_events">
    <div class="container">
        <div class="event_items">

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">07</div>
                                <div class="event_month">January</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Student Festival</a></div>
                                <div class="event_location">Grand Central Park</div>
                                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">07</div>
                                <div class="event_month">January</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Open day in the Univesrsity
                                        campus</a></div>
                                <div class="event_location">Grand Central Park</div>
                                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">07</div>
                                <div class="event_month">January</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a>
                                </div>
                                <div class="event_location">Grand Central Park</div>
                                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- home row 4 -->
<!-- Achiements -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Our Achievements</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home_achievements">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/achieve.png') }}" alt="" class="float-left">
            </div>
            <div class="col">
                <ol class="float-right">
                    <li><a href="#">University Toppers's</a></li>
                    <li><a href="#">College Toppers's</a></li>
                    <li><a href="#">Placements</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>


<!-- home row 4 -->
<!-- Clubs name -->
<div class="student_clubs_section">
    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Student's Clubs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_clubs">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('images/reading.png') }}" alt="">
                    <h2> <a href="#" target="_blank" rel="noopener noreferrer">Reading</a> </h2>
                </div>
                <div class="col-4">
                    <img src="{{ asset('images/pen.png') }}" alt="">
                    <h2> <a href="#" target="_blank" rel="noopener noreferrer">Writers</a> </h2>
                </div>
                <div class="col-4">
                    <img src="{{ asset('images/woman.png') }}" alt="">
                    <h2> <a href="#" target="_blank" rel="noopener noreferrer">Press</a> </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('images/video-camera.png') }}" alt="">
                    <h2> <a href="#" target="_blank" rel="noopener noreferrer">Film</a> </h2>
                </div>
                <div class="col-4">
                    <img src="{{ asset('images/teamwork.png') }}" alt="">
                    <h2> <a href="#" target="_blank" rel="noopener noreferrer">Entrepreneurial</a> </h2>
                </div>
                <div class="col-4">
                    <img src="{{ asset('images/theater.png') }}" alt="">
                    <h2> <a href="#" target="_blank" rel="noopener noreferrer">Drama</a> </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('images/cinnamon-roll.png') }}" alt="">
                    <h2> <a href="#" target="_blank" rel="noopener noreferrer">Cinnamon</a> </h2>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- home row 4 -->
<!-- Clubs name -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Student Testimonial</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home_testimonial_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="img-box"><img src="{{ asset('images/avatar2.png') }}" alt=""></div>
                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper
                                malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non
                                aliquet.</p>
                            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="{{ asset('images/avatar2.png') }}" alt=""></div>
                            <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget
                                nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis
                                quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida
                                odio.</p>
                            <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="{{ asset('images/avatar2.png') }}" alt=""></div>
                            <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id
                                lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan
                                tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa.
                                Etiam hendrerit dolor eget rutrum.</p>
                            <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- home row 4 -->
<!-- Links -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Popular Links</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home_popular_links">
    <div class="container-fluid">
        <div class="row">
            <!-- Link 1 -->
            <div class="col-3">
                <img src="{{ asset('images/team.png') }}" alt="Staff Notice">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Staff Notice</a> </h2>
            </div>
            <!-- Link 2 -->
            <div class="col-3">
                <img src="{{ asset('images/learning.png') }}" alt="Student Notice">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Student Notice</a> </h2>
            </div>
            <!-- Link 3 -->
            <div class="col-3">
                <img src="{{ asset('images/mortarboard.png') }}" alt="Alumni Association">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Alumni Association</a> </h2>
            </div>
            <!-- Link 4 -->
            <div class="col-3">
                <img src="{{ asset('images/network.png') }}" alt="Department Activities">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Department Activities</a> </h2>
            </div>
        </div>
        <div class="row">
            <!-- Link 5 -->
            <div class="col-4">
                <img src="{{ asset('images/diploma.png') }}" alt="Pending Degrees">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Pending Degrees</a> </h2>
            </div>
            <!-- Link 6 -->
            <div class="col-4">
                <img src="{{ asset('images/question.png') }}" alt="Panjab University Question Papers">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Panjab University Question Papers</a> </h2>
            </div>
            <!-- Link 7 -->
            <div class="col-4">
                <img src="{{ asset('images/auction.png') }}" alt="Tenders">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Tenders</a> </h2>
            </div>
        </div>
    </div>
</div>





@endsection