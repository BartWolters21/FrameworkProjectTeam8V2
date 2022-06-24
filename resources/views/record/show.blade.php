@extends('common.master')

@section('content')
    <div id="app">
        <section class="main-content columns is-fullwidth">
            <div class="column mt-6">
                <h1>Maintenance Description</h1>
                <p class="mt-6">{{$record->description}}</p>
            </div>
        </section>
    </div>
@endsection
