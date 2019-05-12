@extends('layouts.master')

@section('content')

<div class="top_hero_image dean_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>college council</h1>
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
                    <h1>College Council</h1>
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
            <table class="table table-bordered table-hover">
                    <thead>
                        <th width="10%" class="text-center">SR. NO.</th>
                        <th width="50%" class="text-center">NAME</th>
                        <th width="20%" class="text-center">DESIGNATION</th>
                        <th width="20%" class="text-center">CONTACT NUMBER</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">Mr. Ranjjan Verma</td>
                            <td class="text-center">Dean College Instructions</td>
                            <td class="text-center">9988272027</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">Mrs. Anuradha Mittal</td>
                            <td class="text-center">Vice-Principal</td>
                            <td class="text-center">9463391726</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-center">Dr. Rajiv Bhandari</td>
                            <td class="text-center">Member</td>
                            <td class="text-center">9417925044</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="text-center">Mrs. Prem Lata</td>
                            <td class="text-center">Member</td>
                            <td class="text-center">9876905986</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection