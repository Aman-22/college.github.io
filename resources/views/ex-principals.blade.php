@extends('layouts.master')

@section('content')

<div class="top_hero_image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Ex-Principals</h1>
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
                    <h1>Ex-Principals</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rules_row1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <h1>Institute</h1>
                <ul>
                    <li> <a href="{{ url('/about-us') }}">About Us</a> </li>
                    <li> <a href="{{ url('/our-mission') }}">Vision & Mission</a> </li>
                    <li> <a href="{{ url('/our-rules') }}">Rules & Regulation</a> </li>
                    <li> <a href="{{ url('/admin-staff') }}">Administtrative Staff</a> </li>
                    <li> <a href="{{ url('/ex-principals') }}">Ex-Principals</a> </li>
                </ul>
            </div>
            <div class="col-7">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th width="10%" class="text-center">SR. NO.</th>
                        <th width="50%" class="text-center">Name of the Principals</th>
                        <th width="20%" class="text-center">From</th>
                        <th width="20%" class="text-center">To</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">Dr. Jagjivan Singh</td>
                            <td class="text-center">May 1953</td>
                            <td class="text-center">July 1953</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">Dr. Harnam Singh</td>
                            <td class="text-center">July 1953</td>
                            <td class="text-center">September 1953</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-center">Dr. Jagjivan Singh</td>
                            <td class="text-center">September 1953</td>
                            <td class="text-center">December 1953</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="text-center">Sh. G.D. Khanna</td>
                            <td class="text-center">October 1953</td>
                            <td class="text-center">December 1953</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td class="text-center">Sh. I.M. Verma</td>
                            <td class="text-center">December 1953</td>
                            <td class="text-center">March 1956</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td class="text-center">Dr. H.R. Gupta</td>
                            <td class="text-center">April 1956</td>
                            <td class="text-center">June 1956</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td class="text-center">Sh. K.S. Thapar</td>
                            <td class="text-center">October 1956</td>
                            <td class="text-center">April 1963</td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td class="text-center">Sh. K.N. Dutt</td>
                            <td class="text-center">April 1963</td>
                            <td class="text-center">April 1964</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td class="text-center">Sh. Inder Singh</td>
                            <td class="text-center">August 1964</td>
                            <td class="text-center">September 1964</td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td class="text-center">Dr. G.L. Bakshi</td>
                            <td class="text-center">September 1964</td>
                            <td class="text-center">October 1968</td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td class="text-center">Mrs. H.M. Dhillon</td>
                            <td class="text-center">October 1968</td>
                            <td class="text-center">July 1975</td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td class="text-center">Dr. O.P. Bhardwaj</td>
                            <td class="text-center">September 1975</td>
                            <td class="text-center">June 1977</td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td class="text-center">Dr. Bhagat Singh</td>
                            <td class="text-center">July 1977</td>
                            <td class="text-center">October 1978</td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td class="text-center">Mrs. K. Atma Ram</td>
                            <td class="text-center">October 1978</td>
                            <td class="text-center">November 1981</td>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td class="text-center">Sh. T.N. Syngal</td>
                            <td class="text-center">November 1981</td>
                            <td class="text-center">December 1983</td>
                        </tr>
                        <tr>
                            <td class="text-center">16</td>
                            <td class="text-center">Mrs. P. Sharma</td>
                            <td class="text-center">January 1984</td>
                            <td class="text-center">May 1986</td>
                        </tr>
                        <tr>
                            <td class="text-center">17</td>
                            <td class="text-center">Dr. P.C. Vahisat</td>
                            <td class="text-center">May 1986</td>
                            <td class="text-center">February 1988</td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td class="text-center">Mrs. S. Kalekar</td>
                            <td class="text-center">March 1988</td>
                            <td class="text-center">October 1989</td>
                        </tr>
                        <tr>
                            <td class="text-center">19</td>
                            <td class="text-center">Dr. R.K Behl</td>
                            <td class="text-center">October 1989</td>
                            <td class="text-center">January 1992</td>
                        </tr>
                        <tr>
                            <td class="text-center">20</td>
                            <td class="text-center">Dr. Dula Singh</td>
                            <td class="text-center">January 1992</td>
                            <td class="text-center">June 1992</td>
                        </tr>
                        <tr>
                            <td class="text-center">21</td>
                            <td class="text-center">Dr. Attar Singh</td>
                            <td class="text-center">July 1992</td>
                            <td class="text-center">August 1995</td>
                        </tr>
                        <tr>
                            <td class="text-center">22</td>
                            <td class="text-center">Dr. S.N. Singla</td>
                            <td class="text-center">September 1995</td>
                            <td class="text-center">December 2002</td>
                        </tr>
                        <tr>
                            <td class="text-center">23</td>
                            <td class="text-center">Sh. Balvinder Singh</td>
                            <td class="text-center">January 2003</td>
                            <td class="text-center">December 2004</td>
                        </tr>
                        <tr>
                            <td class="text-center">24</td>
                            <td class="text-center">Sh. Pahlad Aggarwal</td>
                            <td class="text-center">January 2005</td>
                            <td class="text-center">March 2006</td>
                        </tr>
                        <tr>
                            <td class="text-center">25</td>
                            <td class="text-center">Dr. A.N. Garg</td>
                            <td class="text-center">April 2006</td>
                            <td class="text-center">August 2007</td>
                        </tr>
                        <tr>
                            <td class="text-center">26</td>
                            <td class="text-center">Dr. A.L. Gauba</td>
                            <td class="text-center">September 2007</td>
                            <td class="text-center">June 2009</td>
                        </tr>
                        <tr>
                            <td class="text-center">27</td>
                            <td class="text-center">Dr. Shyam Sunder</td>
                            <td class="text-center">July 2009</td>
                            <td class="text-center">December 2010</td>
                        </tr>
                        <tr>
                            <td class="text-center">28</td>
                            <td class="text-center">Dr. J.S. Raghu</td>
                            <td class="text-center">January 2011</td>
                            <td class="text-center">December 2015</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection