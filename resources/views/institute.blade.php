@extends('layouts.master')

@section('content')

<div class="top_hero_image institution_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Institute</h1>
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
                    <h1>Institute</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="institute_row1">
    <div class="container-fluid">
        <div class="row">
            <!-- course 1 -->
            <div class="col-6">
                <img src="{{ asset('images/team.png') }}" alt="About Us">
                <h2> <a href="{{ url('/about-us') }}" rel="noopener noreferrer">About Us</a> </h2>
            </div>
            <!-- course 2 -->
            <div class="col-6">
                <img src="{{ asset('images/mission.png') }}" alt="Vision & Mission">
                <h2> <a href="{{ url('/our-mission') }}" rel="noopener noreferrer">Vision & Mission</a> </h2>
            </div>
        </div>
        <div class="row">
            <!-- course 4 -->
            <div class="col-6">
                <img src="{{ asset('images/networking.png') }}" alt="Adminstrative Staff">
                <h2> <a href="{{ url('/admin-staff') }}" rel="noopener noreferrer">Adminstrative Staff</a> </h2>
            </div>
            <!-- course 5 -->
            <div class="col-6">
            <img src="{{ asset('images/avatar.png') }}" alt="Rules & Regulations">
                <h2> <a href="{{ url('/our-rules') }}" rel="noopener noreferrer">Rules & Regulations</a> </h2>
            </div>
        </div>
    </div>
</div>

@endsection