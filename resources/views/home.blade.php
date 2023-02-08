@extends('layouts.layout')

@section('content')
    <div class="py-5"></div>
    <div class="container">
        <div class="row row-cols-5">
            <div class="d-none">{{ $i = 1}}</div>
            @foreach ($item_data as $data)
                <div class="col g-3">
                    <div class="card shadow-sm border-0" data-aos="fade-up" data-aos-duration="{{ $i * 1000 }}">
                        <div class="card-body text-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/3058/3058995.png" class="card-img-top mb-3" alt="...">
                            <h5 class="card-title">{{ $data->item_name }}</h5>
                            <a href="{{ route('detail', $data->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="d-none">{{ $i += 0.1 }}</div>
            @endforeach
            <div class="d-flex w-100 justify-content-center align-items-center my-5">
                {{ $item_data->links() }}
            </div>
        </div>
    </div>
    <div class="py-5"></div>
@endsection
