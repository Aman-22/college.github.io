@extends('layouts.master')

@section('content')

<div class="top_hero_image principal_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>principal</h1>
            </div>
        </div>
    </div>
</div>

<!-- Courses -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Principal</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about_row1 principal_row1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h1>Administration</h1>
                <ul>
                    <li> <a href="{{ url('/principal') }}">Principal</a> </li>
                    <li> <a href="{{ url('/dean') }}">Dean</a> </li>
                    <li> <a href="{{ url('/vice-principal') }}">Vice Principal</a> </li>
                    <li> <a href="{{ url('/college-council') }}">College Council</a> </li>
                </ul>
            </div>
            <div class="col-7">
                <div class="img-box"><img src="{{ asset('images/ramaarora-principal.jpg') }}" alt=""></div>
                <h1>Prof. (Dr.) Rama Arora</h1>
                <p>Post Graduate Govt. College Sector 11, now a Co-educational Institute, was established in 1953. Over
                    the years, our illustrious students have carved a niche for themselves in fields as diverse as
                    Politics, Administration, Business, Law etc. We offer a broad curriculum and a range of
                    opportunities for all our students to achieve excellence in academic, creative, social, cultural,
                    sporting and community endeavours. There are as many as 30 departments in the BA, B.COM, BBA, BCA,
                    BPEd, B.Sc Medical and Non Medical as well as PG courses in Chemistry, History, English, Punjabi,
                    Physical Education and Information Technology. The college boasts of a large sports ground with
                    cinder track and a sports pavilion. There is also a swimming pool, a gymnasium, tennis, golf course
                    and a basketball court. It has a department of Environment Education with a highly specialized
                    Cosmic Garden, the first of its kind in India with special reference to Phytochemicals as an
                    alternative medicine.</p>
                <p>Our college is spread over an area of 43.8 acres and is equipped with the latest technology,
                    numerous internet labs, Wi-Fi facility, overall e-surveillance and the largest library among the
                    college in this city. The library is fully computerized with online access and a new feature of
                    transaction messaging through SMS. It has made old question papers and data of pending degrees since
                    1958 available online. It has a separate Braille corner for visually challenged students.</p>
                <p>Students, we believe are our most valued assets. A dedicated team of our teachers monitor and mentor
                    young students to help them imbibe attributes, skills and capabilities to achieve their cherished
                    goals. I am positive that in times to come, we will make steady progress in this rewarding journey
                    of teaching and learning in Post Graduate Govt. College Sector 11, Chandigarh.</p>
            </div>
        </div>
    </div>
</div>

@endsection