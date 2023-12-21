@extends('layouts.app')

@section('title', 'Today Trains')

@section('content')
    <main>
        <div class="d-flex mx-2">
            <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
            <h3 class="mx-4">Today Trains</h3>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($trains as $train)
                    @if ($train->date == date('2023-12-21'))
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-title bg-danger text-light p-3">
                                    <span>{{ $train->company }} - {{ $train->train_code }}</span>
                                    <span>{{ $train->date }}</span>
                                </div>
                                <div class="p-3">
                                    <p>{{ $train->type }}</p>
                                    <p>Number of carrigages: {{ $train->carriages }}</p>
                                </div>
                                <ul class="list-group list-group-flush bg-body-tertiary p-3">
                                    <li class="list-unstyled">Departure Station: {{ $train->departure_station }} -
                                        {{ $train->departure_time }} </li>
                                    <li class="list-unstyled">Arrival Station: {{ $train->arrival_station }} -
                                        {{ $train->arrival_time }} </li>
                                </ul>
                                <div class="p-3">
                                    @if ($train->on_time == 'Delayed')
                                        <span class="badge bg-warning ">Delayed </span>
                                    @elseif ($train->on_time == 'Cancelled')
                                        <span class="badge bg-danger">Cancelled</span>
                                    @else
                                        <span class="badge bg-success">On Time</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </main>
@endsection
