@extends('layouts.master')

@section('content')

<div class="top_hero_image vision_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Vision & Mission</h1>
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
                    <h1>Vision</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about_row1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h1>Institute</h1>
                <ul>
                <li> <a href="{{ url('/about-us') }}">About Us</a> </li>
                    <li> <a href="{{ url('/our-mission') }}">Vision & Mission</a> </li>
                    <li> <a href="{{ url('/our-rules') }}">Rules & Regulation</a> </li>
                    <li> <a href="{{ url('/admin-staff') }}">Administtrative Staff</a> </li>
                </ul>
            </div>
            <div class="col-7 vision_list">
                <ul>
                    <li>To create an educational experience to open minds and expand perspectives, to nurture, share and
                        apply knowledge in an inclusive environment of intellectual inquiry.</li>
                    <li>To sustain excellence in teaching, scholarly research and community outreach initiatives.</li>
                    <li>To extend learning beyond the classroom to encompass a broad range of extra-curricular and
                        sports opportunities.</li>
                    <li>To strive for individual and collective excellence by helping students to develop their unique
                        potentials with reason, imagination and human concern.</li>
                    <li>To build a student community committed to bring about equity, diversity and social justice.</li>
                    <li>To be a centre of excellence in the region with multifaceted development-centre approach and
                        strengthen our identity at national and international levels.</li>
                </ul>

                <div class="popular page_section">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="section_title text-center">
                                    <h1>Mission</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p>True to our College Motto ‘Higher and Still Higher’ our constant and untiring efforts are aimed at preparing students for holistic lifelong learning, ethical leadership, community service and responsible citizenship. Our goal is to enrich intellect, encourage creativity and build character in a student-centered learning environment. Learners thus empowered are sure to excel and assume roles of leadership in their chosen fields of endeavour. We are thus committed to create and sustain learning environment for an educational journey that is intellectually, socially and personally transformative.</p>

            </div>
        </div>
    </div>
</div>

@endsection