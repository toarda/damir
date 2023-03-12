<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Bootstrap Shop Page</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('index') }}">Shop</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shop-index') }}">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section class="hero bg-light">
      <div class="container">
        <div class="row align-items-center">
            @foreach($products as $product)
          <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p class="lead">
                {{ $product->description }}
            </p>
              <a href="https://wa.me/87078627777?text=Здравствуйте! Пишу по поводу товара: {{ $product->name }} | Цена: {{ $product->price }}">Купить</a>
          </div>
          <div class="col-md-6">
            <img src="{{ $product->image }}" alt="Shop image" class="img-fluid" />
          </div>
            @endforeach
        </div>
      </div>
    </section>




    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());

          </script>
          Company Name
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->

    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.3/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/shop.js') }}"></script>
  </body>
</html>
