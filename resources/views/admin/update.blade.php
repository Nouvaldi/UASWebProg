@extends('layouts.layout')

@section('content')
    <div class="py-5"></div>
    <div class="container">
        <div class="card shadow border-0 mx-auto col-4" data-aos="fade-up">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $user_data->first_name }} {{ $user_data->last_name }}</h5>
                <form action="{{ route('admin.update.role', $user_data->id) }}" method="post">
                    @csrf
                    <div class="row my-3">
                        <label class="col-2 col-form-label" for="role">Role</label>
                        <div class="col">
                            <select class="form-select" name="role" id="role">
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
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
    <div class="py-5"></div>
    <div class="py-5"></div>
@endsection
