@extends('layouts.master')

@section('content')

<div class="top_hero_image dean_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>vice-principal</h1>
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
                    <h1>Vice-Principal</h1>
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
                <div class="img-box"><img src="{{ asset('images/viceprincipal.jpeg') }}" alt=""></div>
                <h1>Ms. Anuradha Mittal</h1>
                <p>I feel extremely proud of being the Vice-Principal of an institution that explains itself through a
                    long legacy of excellence in different fields. Believing that the main aim of education is to build
                    the power of human mind and spirit, we provide our students an environment that is rich in knowledge
                    and supportive for their extra-curricular interests. It is really a very fulfilling experience to be
                    a part of the journey of intellectual and emotional growth of the young generation. The successful
                    alumni are an additional matter of great pride.</p>
            </div>
        </div>
    </div>
</div>

@endsection