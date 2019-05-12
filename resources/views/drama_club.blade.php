@extends('layouts.master')

@section('content')

<div class="top_hero_image about_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>GCDC</h1>
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
                    <h1>GCDC</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about_row1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h1>Student Clubs</h1>
                <ul>
                <li> <a href="{{ url('/readersClub') }}">Readers</a> </li>
                    <li> <a href="{{ url('/writerClub') }}">Writers</a> </li>
                    <li> <a href="{{ url('/preesClub') }}">Press</a> </li>
                    <li> <a href="{{ url('/filmClub') }}">Film</a> </li>
                    <li> <a href="{{ url('/entrepreneurialClub') }}">Entrepreneurial</a> </li>
                    <li> <a href="{{ url('/gcdc') }}">GCDC</a> </li>
                    <li> <a href="{{ url('/cinnamonClub') }}">Cinnamon</a> </li>
                </ul>
            </div>
            <div class="col-7 main_content">
                <div class="row">
                    <p>Government College Dramatic Club has been working in the field of theatre since 2006. It is a
                        ‘Student organisation for the students by the students’ where different teachers come forward to
                        help out students to achieve their goals.</p>

                    <p>The main objective of team is to inspire the students to participate in co-curricular
                        activities. As theatre is a form which develops art of public speaking, a perfect body language,
                        self-confidence, teamwork, management. As well as it helps to highlight and aware students and
                        society about social evils and upcoming problems in a dramatic way.</p>

                    <p>The achievements of GCDC are uncountable. It has been regularly dominating Youth Fest,
                        Inter-Zonal, Inter-Universities and Inter-College competitions. Its various pass outs are now in
                        Indian TV industry as well as running various professional theatre groups such as “Satvik Art
                        Society”, “Alankaar”.</p>

                    <p>In breif it has given a good start to students and helped them to explore themselves with taking
                        along their academic performances. Every year auditions are done and students are enrolled in
                        this team. Presently it is a team of about 26 members.</p>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th width="50%" class="text-center">NAME</th>
                            <th width="20%" class="text-center">DESIGNATION</th>
                            <th width="20%" class="text-center">CONTACT NUMBER</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Dr. Rakesh Thakur</td>
                                <td class="text-center">Co-ordinator</td>
                                <td class="text-center">9316175022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row nav_tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Notice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu1">Updates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu2">Upcoming</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu3">Gallery</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <h2>Notice</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <h2>Updates</h2>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                            <h2>Upcoming</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="container tab-pane fade"><br>
                            <h2>Gallery</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $(".nav-tabs a").click(function() {
        $(this).tab('show');
    });
});
</script>


@endsection