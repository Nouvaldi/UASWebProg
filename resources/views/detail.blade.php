@extends('layouts.layout')

@section('content')
    <div class="py-5"></div>
    <div class="container">
        <div class="card shadow border-0 mx-auto col-8" data-aos="fade-up">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="card-body d-flex h-100 align-items-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3058/3058995.png" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body d-flex flex-column h-100">
                        <h5 class="card-title fw-bold mt-5">{{ $item_data->item_name }}</h5>
                        <h6 class="card-text mb-5">Price: Rp. {{ number_format($item_data->price,0,',','.') }}</h6>
                        <p class="card-text">{{ $item_data->item_desc }}</p>
                        <div class="text-center mt-auto mb-5">
                            <form action="{{ route('order.store', $item_data->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning">Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
@endsection
