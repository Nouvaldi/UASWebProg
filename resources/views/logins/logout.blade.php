@extends('layouts.layout')

@section('content')
    <div class="py-5"></div>
    <div class="py-5"></div>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col mx-auto">
                <div class="card shadow border-0" data-aos="flip-left" style="height: 250px; width: 250px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title text-center mb-3"><i class="bi bi-check-lg"></i> Logout Success!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>

    <script>
        setTimeout(function() {
            window.location.href = "{{ url('/') }}";
        }, 1000);
    </script>

@endsection
