@extends('layouts.layout')

@section('content')
    <div class="py-5"></div>
    <div class="container">
        <h1 class="card-title text-center fw-bold mb-3">Cart</h1>
        <div class="d-none">{{ $total = 0 }}</div>
        @if (count($order_data) == 0)
            <div class="col-4 mx-auto">
                <div class="card shadow border-0" data-aos="fade-up">
                    <div class="card-body text-center">
                        <p class="card-text">Empty...</p>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>
            <div class="py-5"></div>
        @else
            @foreach ($order_data as $data)
                <div class="row mx-5">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="row g-0">
                            <div class="col-md-1">
                                <div class="card-body">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3058/3058995.png" class="img-fluid rounded-start" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex align-items-center justify-content-between h-100">
                                    <h5 class="card-title">{{ $data->items->item_name }}</h5>
                                    <h5 class="card-title">Rp. {{ number_format($data->price,0,',','.') }}</h5>
                                    <form action="{{ route('order.delete', $data->item_id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none">{{ $total += $data->price }}</div>
            @endforeach
            <div class="row mx-5 mt-3">
                <div class="text-end">
                    <form action="{{ route('order.checkout') }}" method="post">
                        @csrf
                        @method('delete')
                        <h5 class="card-title mb-2">Total: Rp. {{ number_format($total,0,',','.') }}</h5>
                        <button type="submit" class="btn btn-warning">Checkout</button>
                    </form>
                </div>
            </div>
            <div class="py-5"></div>
        @endif
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
@endsection
