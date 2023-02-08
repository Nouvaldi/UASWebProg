<div class="container-fluid text-center text-bg-success d-flex">
    <a class="navbar-brand fs-2 py-3" href="">Amazing E-Grocery</a>
    @auth
        <ul class="navbar-nav ms-auto my-auto">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="nav-link bg-success border-0"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            </li>
        </ul>
    @else
        <ul class="navbar-nav ms-auto my-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-3 my-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><i class="bi bi-box-arrow-in-down"></i> Register</a>
            </li>
        </ul>
    @endauth
</div>
@auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order') }}">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    @if (Auth::user()->role->role_name == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Account Maintenance</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endauth
