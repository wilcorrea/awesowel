@extends('app')

@section('content')

    <section class="app container-fluid">

        <div class="row">

            <div class="col-sm-2">

                @include('awesovel.app.html.partials.sidebar')

            </div>

            <div class="col-sm-10">

                @yield('layout')

            </div>

        </div>
    </section>

@endsection