@extends('layouts.master')

@section('content')

<div class="top_hero_image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Admission</h1>
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
                    <h1>Admission</h1>
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
                <img src="{{ asset('images/book-cover.png') }}" alt="Prospectus">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Prospectus</a> </h2>
            </div>
            <!-- course 2 -->
            <div class="col-4">
                <img src="{{ asset('images/business.png') }}" alt="Admission Schedule">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Admission Schedule</a> </h2>
            </div>
            <!-- course 3 -->
            <div class="col-4">
                <img src="{{ asset('images/web.png') }}" alt="Online Forms">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Online Forms</a> </h2>
            </div>
        </div>
        <div class="row">
            <!-- course 1 -->
            <div class="col-4">
                <img src="{{ asset('images/checklist.png') }}" alt="Merit List">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Merit List</a> </h2>
            </div>
            <!-- course 2 -->
            <div class="col-4">
                <img src="{{ asset('images/accounts.png') }}" alt="Fee Structure">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Fee Structure</a> </h2>
            </div>
            <!-- course 3 -->
            <div class="col-4">
                <img src="{{ asset('images/network2.png') }}" alt="Courses Offered">
                <h2> <a href="#" target="_blank" rel="noopener noreferrer">Courses Offered</a> </h2>
            </div>
        </div>
    </div>
</div>

@endsection