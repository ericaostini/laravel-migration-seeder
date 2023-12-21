@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="container">
        <div class="d-flex align-items-center">
            <h4 class="mx-3">Displays all available trains</h4>
            <a href="{{ route('trains.index') }}" class="btn btn-danger"><i class="fa-solid fa-circle-arrow-right"></i></a>
        </div>
        <div class="d-flex align-items-center">
            <h4 class="mx-3">Displays today available trains</h4>
            <a href="{{ route('today-trains.index') }}" class="btn btn-danger"><i
                    class="fa-solid fa-circle-arrow-right"></i></a>
        </div>
    </main>

@endsection
