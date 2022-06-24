@extends('common.master')

@section('content')
    <div id="app">
        <section class="main-content columns is-fullwidth">
            <div class="table column mt-5">
                <h1 class="has-background-link-light is-large">Latest SAP Records</h1>
                <table class="mt-2">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Duration</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->start_date }}</td>
                            <td>{{ $record->end_date }}</td>
                            <td>{{ $record->duration }} Hours</td>
                            <td>
                                <div class="field has-addons">
                                        <button id="{{$record->id}}" class="js-modal-trigger button is-primary" data-target="modal-record-description">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Bulma Modal -->
                        <div id="modal-record-description" class="modal">
                            <div class="modal-background"></div>

                            <div class="modal-content">
                                <div class="box">
                                    <p>{{$record->description}}</p>
                                </div>
                            </div>

                            <button class="modal-close is-large" aria-label="close"></button>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>


@endsection
