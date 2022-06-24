@extends('common.master')

@section('content')
    <div id="app">
        <section class="main-content columns is-fullwidth">
            <div class="container columns is-10">
                <div class="container is-10">
                    <div class="section">
                        <div class="card">
                            <div class="card-header"><p class="card-header-title">Tonnage</p></div>
                            <div class="table">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Code</th>
                                        <th>Output In Metres</th>
                                        <th>Output In Tones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tonnages as $tonnage)
                                        <tr>
                                            <td>{{$tonnage->type}}</td>
                                            <td>{{$tonnage->code}}</td>
                                            <td style="{{($tonnage->output_metres <= $tonnagesMinOutputMeters) ? 'background: #F67280; color: white' : (($tonnage->output_metres >= $tonnagesMaxOutputMeters) ? 'background: #00B0BA; color: white' : '') }}">{{$tonnage->output_metres}}</td>
                                            <td style="{{($tonnage->output_tones <= $tonnagesMinOutputTones) ? 'background: #F67280; color: white' : (($tonnage->output_tones >= $tonnagesMaxOutputTones) ? 'background: #00B0BA; color: white' : '') }}">{{$tonnage->output_tones}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection
