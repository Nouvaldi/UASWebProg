@extends('layouts.layout')

@section('content')
    <div class="py-5"></div>
    <div class="container">
        @if (session()->has('failed'))
            <div class="modal fade" id="errorModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-bg-danger">
                        <div class="modal-header border-0">
                            <h5 class="modal-title"><i class="bi bi-exclamation-triangle-fill"></i> {{ session('failed') }}</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            The email/ password is incorrect. Please try again.
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('login.auth') }}" method="POST">
            @csrf
            <div class="col-md-4 mx-auto">
                <div class="card shadow border-0" data-aos="fade-left">
                    <div class="card-header text-bg-success">
                        <h5 class="card-title my-2"><i class="bi bi-box-arrow-in-right"></i> Login</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email" autofocus>
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="password">
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-center mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        <div class="text-center">
                            <small><a href="{{ route('register') }}">Don't have an account? Click here to sign up</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>

    @if (session()->has('failed'))
        <script>
            $(document).ready(function () {
                $('#errorModal').modal('show');
            });
        </script>
    @endif
@endsection
