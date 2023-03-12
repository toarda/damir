<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}"
    />
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}"/>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Logo -->
    <a class="navbar-brand" href="#">My Blog</a>
    <!-- Mobile Menu Button -->
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navigation Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog-index') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('shop-index') }}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Header -->
<header class="jumbotron text-center">
    <section class="hero">
        <div class="hero-inner">
            <h1 class="hero-title">Welcome to my blog</h1>
            <p class="hero-subtitle">
                Sharing my thoughts on technology, business, and life
            </p>
            <a href="#" class="hero-button">Read my latest post</a>
        </div>
    </section>
</header>

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">
        <!-- Blog Posts -->
        <div class="col-md-8">
            <h2>Latest Posts</h2>
            @foreach ($posts as $post)
                <!-- Blog Post 1 -->
                <div class="card mb-3">
                    <img
                        class="card-img-top"
                        src=" {{ $post->image }}"
                        alt="Blog Post 1"
                    />
                    <div class="card-body">
                        <h4 class="card-title">
                            {{ $post->title }}
                        </h4>
                        <p class="card-text">
                            {{ $post->content }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $posts->links(('vendor.pagination.default')) !!}
    </div>
</div>


<!-- Footer -->
<footer class="bg-dark text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; 2023 Toriya Damir.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js') }}"></script>
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
</body>
</html>
