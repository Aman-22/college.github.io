@extends('layouts.master')

@section('content')

<div class="top_hero_image ncc_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>NCC</h1>
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
                    <h1>NCC</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="institute_row1">
    <div class="container-fluid">
        <div class="row">
            <!-- course 1 -->
            <div class="col-4">
                <img src="{{ asset('images/tank.png') }}" alt="Army">
                <h2> <a href="{{ url('/ncc_army') }}" rel="noopener noreferrer">Army</a> </h2>
            </div>
            <!-- course 2 -->
            <div class="col-4">
                <img src="{{ asset('images/airplane.png') }}" alt="Air">
                <h2> <a href="{{ url('/ncc_air') }}" rel="noopener noreferrer">Air</a> </h2>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/ship.png') }}" alt="Navy">
                <h2> <a href="{{ url('/ncc_navy') }}" rel="noopener noreferrer">Navy</a> </h2>
            </div>
        </div>
    </div>
</div>

@endsection