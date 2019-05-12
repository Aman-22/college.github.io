@extends('layouts.master')

@section('content')

<div class="top_hero_image about_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Film Club</h1>
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
                    <h1>Film Club</h1>
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
                    <li> <a href="{{ url('/pressClub') }}">Press</a> </li>
                    <li> <a href="{{ url('/filmClub') }}">Film</a> </li>
                    <li> <a href="{{ url('/entrepreneurialClub') }}">Entrepreneurial</a> </li>
                    <li> <a href="{{ url('/gcdc') }}">GCDC</a> </li>
                    <li> <a href="{{ url('/cinnamonClub') }}">Cinnamon</a> </li>
                </ul>
            </div>
            <div class="col-7 main_content">
                <div class="row">
                    <p>The purpose is to visually enhances the creativity and intellect of cinema lovers by screening
                        films from around the world.</p>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th width="50%" class="text-center">NAME</th>
                            <th width="20%" class="text-center">DESIGNATION</th>
                            <th width="20%" class="text-center">CONTACT NUMBER</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Dr. Shalini Wadhwa</td>
                                <td class="text-center">Co-ordinator</td>
                                <td class="text-center">8699002424</td>
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