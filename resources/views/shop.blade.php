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
        <a class="navbar-brand" href="#">Bootstrap Shop</a>
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
          <div class="col-md-6">
            <h1>Welcome to our shop</h1>
            <p class="lead">
              Find the latest trends and best deals on our website.
            </p>
            <a href="#" class="btn btn-primary">Shop now</a>
          </div>
          <div class="col-md-6">
            <img src="path/to/image.jpg" alt="Shop image" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img
                src="path/to/image.jpg"
                alt="Product image"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title">Product 1</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Vestibulum eget felis euismod, tristique augue id, aliquet
                  enim. Donec fringilla, sapien nec elementum faucibus, nibh
                  quam luctus massa, eu ultricies felis felis a nisl.
                </p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="path/to/image.jpg"
                alt="Product image"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Vestibulum eget felis euismod, tristique augue id, aliquet
                  enim. Donec fringilla, sapien nec elementum faucibus, nibh
                  quam luctus massa, eu ultricies felis felis a nisl.
                </p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="path/to/image.jpg"
                alt="Product image"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title">Product 3</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Vestibulum eget felis euismod, tristique augue id, aliquet
                  enim. Donec fringilla, sapien nec elementum faucibus, nibh
                  quam luctus massa, eu ultricies felis felis a nisl.
                </p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="path/to/image.jpg"
                alt="Product image"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title">Product 4</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Vestibulum eget felis euismod, tristique augue id, aliquet
                  enim. Donec fringilla, sapien nec elementum faucibus, nibh
                  quam luctus massa, eu ultricies felis felis a nisl.
                </p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="path/to/image.jpg"
                alt="Product image"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title">Product 5</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Vestibulum eget felis euismod, tristique augue id, aliquet
                  enim. Donec fringilla, sapien nec elementum faucibus, nibh
                  quam luctus massa, eu ultricies felis felis a nisl.
                </p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="path/to/image.jpg"
                alt="Product image"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title">Product 6</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Vestibulum eget felis euismod, tristique augue id, aliquet
                  enim. Donec fringilla, sapien nec elementum faucibus, nibh
                  quam luctus massa, eu ultricies felis felis a nisl.
                </p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
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
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.3/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/shop.js') }}"></script>
  </body>
</html>
