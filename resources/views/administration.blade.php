@extends('layouts.master')

@section('content')

<div class="top_hero_image admin_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Administration</h1>
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
                    <h1>Administration</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="institute_row1">
    <div class="container-fluid">
        <div class="row">
            <!-- Admin 1 -->
            <div class="col-6">
                <img src="{{ asset('images/boss.png') }}" alt="Principal">
                <h2> <a href="{{ url('/principal') }}" target="_blank" rel="noopener noreferrer">Principal</a> </h2>
            </div>
            <!-- Admin 2 -->
            <div class="col-6">
                <img src="{{ asset('images/girl.png') }}" alt="Dean">
                <h2> <a href="{{ url('/dean') }}" target="_blank" rel="noopener noreferrer">Dean</a> </h2>
            </div>
        </div>
        <div class="row">
            <!-- Admin 3 -->
            <div class="col-6">
                <img src="{{ asset('images/man.png') }}" alt="Vice-Principal">
                <h2> <a href="{{ url('/vice-principal') }}" target="_blank" rel="noopener noreferrer">Vice-Principal</a> </h2>
            </div>
            <!-- Admin 4 -->
            <div class="col-6">
                <img src="{{ asset('images/collaboration.png') }}" alt="College Council">
                <h2> <a href="{{ url('/college-council') }}" target="_blank" rel="noopener noreferrer">College Council</a> </h2>
            </div>
        </div>
    </div>
</div>

@endsection