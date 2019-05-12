@extends('layouts.master')

@section('content')

<div class="top_hero_image rules_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Rules & Regulations</h1>
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
                    <h1>Rules & Regulations</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rules_row1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h1>Institute</h1>
                <ul>
                <li> <a href="{{ url('/about-us') }}">About Us</a> </li>
                    <li> <a href="{{ url('/our-mission') }}">Vision & Mission</a> </li>
                    <li> <a href="{{ url('/our-rules') }}" active>Rules & Regulation</a> </li>
                    <li> <a href="{{ url('/admin-staff') }}">Administtrative Staff</a> </li>
                </ul>
            </div>
            <div class="col-7">
                <ul>
                    <li>Ragging is strictly prohibited. Ragging in any form on the college campus or off campus will be
                        treated as crime.</li>
                    <li>The students are required to attend all the lectures/tutorials/practicals. Exemption will be
                        given only in case of a valid reason for which due leave should be obtained.</li>
                    <li>The students are required to maintain discipline on the college campus.</li>
                    <li>The students must appear in various House Examinations.</li>
                    <li>Use of mobile phones in the classrooms and library, is strictly prohibited.</li>
                    <li>Smoking, drinking and playing cards on the college campus is strictly prohibited.</li>
                    <li>Students must make it a point to read the Notice Board daily. Ignorance of orders/notices duly
                        displayed on the Notice Board shall not be accepted as an excuse for non-compliance.</li>
                    <li>Students violating rules and resorting to indiscipline are liable to be punished in the form of
                        heavy fine, withdrawal of concession or stipends and even expulsion from the college in extreme
                        cases.</li>
                    <li>Students who are under-age and do not have a valid driving license for a two-wheeler or a
                        four-wheeler are not allowed to drive as per the directions of the Hon‘ble Punjab and Haryana
                        High Court.</li>
                    <li>The students must park their vehicles in the parking lot. Plying of vehicles on the college
                        campus is not allowed.</li>
                    <li>It is imperative that students be well-behaved and respectful towards other students, especially
                        girls. Anyone indulging in or abetting gang fights or eve-teasing or causing damage to the
                        college property will be dealt with very strictly and can even be expelled.</li>
                    <li>Parents are requested to remain in touch with the faculty members to keep a track of their
                        ward‘s academic performance, attendance and conduct and are also requested to attend Parent
                        Teacher Meetings.</li>
                    <li>The college reserves the right to refuse admission to a student or to detain him/her on the
                        following grounds – Indiscipline, Shortage of Attendance, Not qualifying the eligibility
                        conditions as laid by Panjab University, Ragging (As per the guidelines from Hon‟ble Supreme
                        Court of India), Eve-teasing and Sexual Harassment, Drugs.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection