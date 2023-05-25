@extends('layouts.app')


@section('content')
    <div class="container">
        @forelse ($trains as $train)
            <div class="card my-3">
                <div class="card-body">
                    <h4 class="card-title"><strong> {{ $train->startStation }}</strong> <i class="fa fa-arrow-right"
                            aria-hidden="true"></i> <strong> {{ $train->endStation }} </strong></h4>
                    <p class="card-text"><strong> {{ $train->departureTime }}</strong> <i class="fa fa-arrow-right"
                            aria-hidden="true"></i><strong> {{ $train->arrivalTime }}</strong></p>
                    <p class="card-text">{{ $train->company }}</p>
                    @if ($train->cancelled)
                        <span class="badge text-bg-danger">Cancelled</span>
                    @endif
                    @if ($train->onTime)
                        <span class="badge text-bg-success">On Time</span>
                    @endif
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection
