@extends('layouts.master')

@section('content')

<div class="top_hero_image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>E-learning</h1>
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
                    <h1>E-learning</h1>
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

@endsection