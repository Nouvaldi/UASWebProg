@extends('layouts.layout')

@section('content')
    <div class="py-5"></div>
    <div class="container">
        <div class="card shadow border-0 mx-auto col-5" data-aos="fade-up">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center m-0">
                    <thead>
                        <tr>
                            <th scope="col">Account</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_data as $data)
                            <tr>
                                <td scope="row">{{ $data->first_name }} {{ $data->last_name }} - {{ $data->role->role_name }}</td>
                                <td>
                                    <form action="{{ route('admin.delete', $data->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.update', $data->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
    <div class="py-5"></div>
    <div class="py-5"></div>
@endsection
