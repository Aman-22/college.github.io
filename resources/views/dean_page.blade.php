@extends('layouts.master')

@section('content')

<div class="top_hero_image dean_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>dean</h1>
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
                    <h1>Dean</h1>
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
                <div class="img-box"><img src="{{ asset('images/DEAN.jpg') }}" alt=""></div>
                <h1>Mr. Ranjjan Verma</h1>
                <p>The College strives to imparts complete education and believes in the overall development of our dear
                    students in the moral, physical and intellectual realms. The college provides a liberal, lively and
                    competitive environment enabling the students to craft their success and have a towering
                    personality. Carrying oneself with dignity is the need of the hour.</p>
            </div>
        </div>
    </div>
</div>

@endsection