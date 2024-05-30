<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link">Categories</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('nightstays') }}" class="nav-link">Nightstays</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('packages') }}" class="nav-link">Packages</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{-- <header>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about-us') }}">About Us</a>
        <a href="{{ route('categories') }}">Categories</a>
        <a href="{{ route('nightstays') }}">Nightstays</a>
        <a href="{{ route('packages') }}">Packages</a>
    </nav>
</header> --}}
