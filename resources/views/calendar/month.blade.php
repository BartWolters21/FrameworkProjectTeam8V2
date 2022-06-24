@extends('common.master')

@section('content')
    <div id="app">
        <section class="main-content columns is-fullwidth">
            <div class="container columns is-10">
                <div class="container is-10">
                    <div class="section is-fullwidth" >
                        <div class="card">
                            <div class="card-header"><p class="card-header-title">Calendar</p>

                            </div>
        <table class="table">
            <tbody>

    <tr>
        <td class="card-header-icon">

            <a href="/calendar/month/{{$defaultMonth}}/1/{{$defaultYear}}" class="button is-light " > <i class="fa-solid fa-caret-left"></i></a>
            <p class="button is-light is-hovered">{{$month[$defaultMonth -1]. ' '. $defaultYear}}</p>
            <a href="/calendar/month/{{$defaultMonth}}/2/{{$defaultYear}}" class="button is-light "> <i class="fa-solid fa-caret-right"></i></a>
        </td>
    </tr>

    @for($j = 0; $j <= 30; $j++)


        @if (!is_int($j / 6) )
            <td class="box"
                style="display: inline-block; height: 38mm; padding: 0; width: 38mm; overflow: auto">

                <p class="@if($j+1 == $defaultDay && $count == true)currentDate @endif">{{$j+1 .'.'}}</p>

                <br>
                @foreach($appointments as $appointment)
                    @if($appointment->day == $j+1 && $appointment->month == $defaultMonth)

                        <button id="{{$appointment->id}}"
                                class=" js-modal-trigger button box"
                                data-target="modal-calendar" style="margin: 0">
                            <p class="hovertext"
                               data-hover="{{$appointment->time}}">{{$appointment->type}}</p>
                            <br>
                        </button>
                        <!-- Bulma Modal -->
                        <div id="modal-calendar" class="modal">
                            <div class="modal-background"></div>

                            <div class="modal-content">
                                <div class="box">
                                    <div class="box">
                                        <p class="card-header-title" style="display: inline">{{$month[$appointment->month - 1]. ' ' .$appointment->day. '.'}}</p>
                                        <p class="subtitle is-6" style="display: inline">{{$appointment->time}}</p>
                                    </div>
                                    <p class="card-header-title">{{$appointment->type}}</p>
                                    <p class="box">{{$appointment->information}}</p>
                                </div>
                            </div>

                            <button class="modal-close is-large"
                                    aria-label="close"></button>
                        </div>
                    @endif
                @endforeach
            </td>
        @endif

        @if (is_int($j / 6) )
            <tr></tr>
            <td class="box"
                style="display: inline-block; padding: 0; height: 38mm; width: 38mm; overflow: auto">


                <p class="@if($j+1 == $defaultDay && $count == true)currentDate @endif" >{{$j+1 .'.'}}</p>
                <br>
                @foreach($appointments as $appointment)
                    @if($appointment->day == $j+1 && $appointment->month == $defaultMonth)

                        <button id="{{$appointment->id}}"
                                class=" js-modal-trigger button box"
                                data-target="modal-calendar" style="margin: 0">
                            <p class="hovertext"
                               data-hover="{{$appointment->time}}">{{$appointment->type}}</p>
                            <br>
                        </button>
                        <!-- Bulma Modal -->
                        <div id="modal-calendar" class="modal">
                            <div class="modal-background"></div>

                            <div class="modal-content">
                                <div class="box">
                                    <div class="box">
                                        <p class="card-header-title" style="display: inline">{{$month[$appointment->month - 1]. ' ' .$appointment->day. '.'}}</p>
                                        <p class="subtitle is-6" style="display: inline">{{$appointment->time}}</p>
                                    </div>
                                    <p class="card-header-title">{{$appointment->type}}</p>
                                    <p class="box">{{$appointment->information}}</p>
                                </div>
                            </div>

                            <button class="modal-close is-large"
                                    aria-label="close"></button>
                        </div>
                    @endif
                @endforeach

            </td>
        @endif


        @if($defaultMonth == 1)
            @if($j == 27)
                @break
            @endif
        @endif

        @if($defaultMonth % 2 != 0 && $defaultMonth < 7)

            @if($j == 29)
                @break
            @endif
        @endif

        @if($defaultMonth > 7 && $defaultMonth % 2 == 0)
            @if($j == 29)
                @break
            @endif
        @endif

    @endfor

            </tbody>
        </table>
    </div>
                        </div>
                    </div>
                </div>


        </section>
    </div>

@endsection
