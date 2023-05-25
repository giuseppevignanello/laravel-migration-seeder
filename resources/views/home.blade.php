@extends('layouts.app')

@section('content')
    <div class="p-5 rounded-3 searchSection">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Book for your next adventure!</h1>
            <div class="col-md-8 row row-cols-12 row-cols-md-2">
                <div class="my-2">
                    <div>
                        <div class="form-control bg-dark text-white my-3 p-3">
                            <h6>FROM</h6> <input type="text">
                        </div>
                    </div>
                    <div>
                        <div class="form-control bg-dark text-white p-3">
                            <h6>TO</h6> <input type="text">
                        </div>
                    </div>
                </div>
                <div class="my-2">
                    <div>
                        <div class="form-control my-3 bg-dark text-white p-3">
                            <h6>DEPARTING DAY</h6> <input type="date">
                        </div>
                    </div>
                    <div>
                        <div class="form-control bg-dark text-white p-3">
                            <h6>RETURNING DAY</h6> <input type="date">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-dark my-3">Search</button>
        </div>
    </div>
@endsection
