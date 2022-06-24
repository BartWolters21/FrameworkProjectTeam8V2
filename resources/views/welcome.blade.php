@extends('common.master')

@section('content')
    <html>
    <body>
    <div id="app">
        <section class="main-content columns is-fullheight">
            <div class="container columns is-10">
                <div class="section column is-three-fifths">
                    <table id="graph-table" class="charts-css bar show-labels show-5-secondary-axes">
                        <caption>Graph</caption>
                        <thead>
                        <tr>
                            <th scope="col"> Year</th>
                            <th scope="col"> Progress</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($graph as $graph)
                        <tr>
                            <th scope="row"> Beschikbaarheid</th>
                            <td style="--size: 0.{{$graph->availablity}};">{{$graph->availability}}%</td>
                        </tr>
                        <tr>
                            <th scope="row"> Prestatie</th>
                            <td style="--size: 0.{{$graph->performance}};">{{$graph->performance}}%</td>
                        </tr>
                        <tr>
                            <th scope="row"> Kwaliteit</th>
                            <td style="--size: 0.{{$graph->quality}};">{{$graph->quality}}%</td>
                        </tr>
                        <tr>
                            <th scope="row"> OEE</th>
                            <td style="--size: 0.{{$graph->OEE}};">{{$graph->OEE}}%</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <section class="main-content columns is-fullheight">
                        <div class="container">
                            <div class="section">
                                <div class="card">
                                    <div class="card-header"><p class="card-header-title">Shifts</p></div>
                                    <div class="table is-narrow is-hoverable is-bordered">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Shift</th>
                                                <th>Output In Metres</th>
                                                <th>Output In Tones</th>
                                                <th>Availability</th>
                                                <th>Performance</th>
                                                <th>Quality</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($shifts as $shift)
                                                <tr>
                                                    <td>{{$shift->shift}}</td>
                                                    <td style="{{$shift->output_metres < 500 ? 'background: #F67280; color: white' : '' }}">{{$shift->output_metres}}</td>
                                                    <td style="{{$shift->output_tones < 800 ? 'background: #F67280; color: white' : '' }}">{{$shift->output_tones}}</td>
                                                    <td style="{{$shift->availability < 80 ? 'background: #F67280; color: white' : '' }}">{{$shift->availability}}</td>
                                                    <td style="{{$shift->performance < 80 ? 'background: #F67280; color: white' : '' }}">{{$shift->performance}}%</td>
                                                    <td>{{$shift->quality}}%</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td>Total</td>
                                                <td>{{$shifts->sum('output_metres')}}</td>
                                                <td>{{$shifts->sum('output_tones')}}</td>
                                                <td>{{$shifts->sum('availability')}}</td>
                                                <td>{{number_format((float)$shifts->sum('performance') / $shifts->count(), 2, '.','')}}%</td>
                                                <td>{{number_format((float)$shifts->sum('quality') / $shifts->count(), 2, '.','')}}%</td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br/>
                            </div>
                        </div>
                    </section>
                    <br/>
                </div>
                <div class="container column is-two-fifths is-10">
                    <div class="section">
                        <div class="card">
                            <div class="card-header"><p class="card-header-title">TOP 10 Stoppers</p></div>
                            <div>
                                <table class="table is-narrow is-hoverable is-bordered">
                                    <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Duration</th>
                                        <th>Frequency</th>
                                        <th>Average</th>
                                        <th>Comments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($stoppers as $stopper)
                                        <tr>
                                            <td>{{$stopper->description}}</td>
                                            <td>{{$stopper->duration}}</td>
                                            <td>{{$stopper->frequency}}</td>
                                            <td>{{$stopper->average}}</td>
                                            <td>

                                                <button id="{{$stopper->id}}" class="js-modal-trigger button is-primary"
                                                        data-target="modal-stopper-comments">

                                                 <span class="icon is-small">
                                                        <i class="fa-solid fa-comment"></i>
                                                 </span>
                                                    </a>
                                            </td>
                                        </tr>
                                        <!-- Bulma Modal -->
                                        <div id="modal-stopper-comments" class="modal">
                                            <div class="modal-background"></div>

                                            <div class="modal-content">
                                                <div class="box">
                                                    <p>{{$stopper->comments}}</p>
                                                </div>
                                            </div>

                                            <button class="modal-close is-large" aria-label="close"></button>
                                        </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    </body>
    </html>
@endsection
