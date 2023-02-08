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
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mx-auto">
                <div class="card shadow border-0" data-aos="fade-up">
                    <div class="card-header text-bg-dark">
                        <h5 class="card-title my-2"><i class="bi bi-person-circle"></i> Profile</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="{{ asset('storage/profile-picture/'.$user_data->display_picture_link) }}" alt="" class="img-fluid w-100 h-100" style="object-fit: cover">
                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label" for="first_name">First Name</label>
                                    <div class="col">
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ $user_data->first_name }}">
                                        @error('first_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <label class="col-2 col-form-label" for="last_name">Last Name</label>
                                    <div class="col">
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ $user_data->last_name }}">
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
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $user_data->email }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="role" value="{{ $user_data->role_id }}">
                                    <label class="col-2 col-form-label" for="role">Role</label>
                                    <div class="col">
                                        <select class="form-select" name="role" id="role" disabled>
                                            @if ($user_data->role_id == 1)
                                                <option value="1" selected>Admin</option>
                                                <option value="2">User</option>
                                            @else
                                                <option value="1">Admin</option>
                                                <option value="2" selected>User</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-2 col-form-label" for="gender">Gender</label>
                                    <div class="col">
                                        @if ($user_data->gender_id == 1)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="gender" value="1" checked>
                                                <label class="form-check-label" for="gender">Male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="gender" value="2">
                                                <label class="form-check-label" for="gender">Female</label>
                                            </div>
                                        @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="gender" value="1">
                                                <label class="form-check-label" for="gender">Male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="gender" value="2" checked>
                                                <label class="form-check-label" for="gender">Female</label>
                                            </div>
                                        @endif
                                    </div>
                                    <label class="col-2 col-form-label" for="picture">Display Picture</label>
                                    <div class="col">
                                        <input class="form-control @error('picture') is-invalid @enderror" type="file" name="picture" id="picture">
                                        @error('picture')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="hidden" name="oldPicture" value="{{ $user_data->display_picture_link }}">
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
                            </div>
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
