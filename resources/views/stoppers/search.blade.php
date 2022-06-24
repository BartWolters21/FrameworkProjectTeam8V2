@extends('common.master')

@section('content')
    <div id="app">
        <section class="main-content columns is-fullwidth">
            <div class="container columns is-10">
                <div class="container is-10">
                    <div class="section">
                        <div class="card">
                            <div class="card-header">
                                <a href="/stoppers">
                                    <button class="button is-info">Back</button>
                                </a>
                                <form class="form" method="GET" action="/search">
                                    <div class="field is-grouped">
                                        <p class="control is-expanded">
                                            <input class="input" name="query" type="search" placeholder="Find a Stopper">
                                        </p>
                                        <p class="control">
                                            <button class="button is-info">
                                                Search
                                            </button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if(count($stoppers) > 0)
                            <div class="card">
                                <div class="card-header"><p class="card-header-title">TOP 10 Stoppers</p></div>
                                <div class="table">
                                    <table>
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
                                                <td>{{$stopper->comments}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @else
                            No matching results found
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
