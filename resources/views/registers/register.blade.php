@extends('layouts.layout')

@section('content')
    <div class="py-5"></div>
    <div class="container">
        <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-10 mx-auto">
                <div class="card shadow border-0" data-aos="fade-right">
                    <div class="card-header text-bg-success">
                        <h5 class="card-title my-2"><i class="bi bi-box-arrow-in-down"></i> Register</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-2 col-form-label" for="first_name">First Name</label>
                            <div class="col">
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" autofocus>
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label class="col-2 col-form-label" for="last_name">Last Name</label>
                            <div class="col">
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name">
                                @error('last_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-2 col-form-label" for="email">Email</label>
                            <div class="col">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label class="col-2 col-form-label" for="role">Role</label>
                            <div class="col">
                                <select class="form-select" name="role" id="role">
                                    <option value="1">Admin</option>
                                    <option value="2" selected>User</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-2 col-form-label" for="gender">Gender</label>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1" checked>
                                    <label class="form-check-label" for="gender">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="2">
                                    <label class="form-check-label" for="gender">Female</label>
                                </div>
                            </div>
                            <label class="col-2 col-form-label" for="picture">Display Picture</label>
                            <div class="col">
                                <input class="form-control @error('picture') is-invalid @enderror" type="file" name="picture" id="picture">
                                @error('picture')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-2 col-form-label" for="password">Password</label>
                            <div class="col">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label class="col-2 col-form-label" for="confirm_password">Confirm Password</label>
                            <div class="col">
                                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" id="confirm_password">
                                @error('confirm_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        <div class="text-center">
                            <small><a href="{{ route('login') }}">Already have an account? Click here to login</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
@endsection
