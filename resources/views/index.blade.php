<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}"
    />
    <link
      href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-md navbar-lqight bg-light justify-content-center"
    >
        @if(Auth::user())
            <a class="navbar-brand" href="#">{{ Auth::user()->getName() }}</a>
            <form action="{{ route('vixod') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a class="navbar-brand" href="#">Main</a>


        @endif

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
        @auth
            <a href="{{ route('admin.index') }}">Dashboard</a>
        @endauth
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('shop-index') }}">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog-index') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="hero">
      <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#heroCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
          <!-- First slide -->
          <div class="carousel-item active">
            <img
              src="{{ asset('images/main/pexels-bich-tran-669996.jpg') }}"
              class="d-block w-100"
              alt="First slide"
            />
            <div class="carousel-caption">
              <h1>Welcome to our website</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>

          <!-- Second slide -->
          <div class="carousel-item">
            <img
              src="{{ asset('images/main/pexels-fauxels-3183198.jpg') }}"
              class="d-block w-100"
              alt="Second slide"
            />
            <div class="carousel-caption">
              <h1>Discover our products</h1>
              <button class="btn btn-primary">Shop now</button>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a
          class="carousel-control-prev"
          href="#heroCarousel"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#heroCarousel"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img
              class="card-img-top"
              src="{{ asset('images/main/cards/pexels-canva-studio-3277808.jpg') }}"
              alt="Service 1"
            />
            <div class="card-body">
              <h5 class="card-title">Help with business</h5>
              <p class="card-text">
                No clients, no work. We will help you find clients.
              </p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img
              class="card-img-top"
              src="{{ asset('images/main/cards/pexels-tracy-le-blanc-607812.jpg') }}"
              alt="Service 2"
            />
            <div class="card-body">
              <h5 class="card-title">Social network help</h5>
              <p class="card-text">Let us help you manage your accounts.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img
              class="card-img-top"
              src="{{ asset('images/main/cards/pexels-monstera-9429485.jpg') }}"
              alt="Service 3"
            />
            <div class="card-body">
              <h5 class="card-title">Startup help</h5>
              <p class="card-text">
                We will help you find sponsors for your startup.
              </p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Visit our Telegram!</h2>
          <p>
            Join our community and get updates on our latest products and
            promotions.
          </p>
          <a
            href="{{ asset('https://t.me/shop_reactbot') }}"
            target="_blank"
            class="btn btn-primary"
            >Join Telegram</a
          >
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Watch our Blog</h3>
          <p>
            Stay up to date with the latest news and insights from our team of
            experts.
          </p>
          <a href="#" class="btn btn-primary">Visit Blog</a>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img
                  style="height: 150px"
                  class="card-img-top"
                  src="{{ asset('images/blog/pexels-caio-59601.jpg') }}"
                  alt="Blog 1"
                />
                <div class="card-body">
                  <h5 class="card-title">Our company opens on Poland...</h5>
                  <p class="card-text">
                    We are pleased to announce that our company is...
                  </p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  style="height: 150px"
                  class="card-img-top"
                  src="{{ asset('images/blog/pexels-tim-mossholder-2432221.jpg') }}"
                  alt="Blog 2"
                />
                <div class="card-body">
                  <h5 class="card-title">Our company opens on Kazakhstan...</h5>
                  <p class="card-text">
                    Dear customers, we want to officially announce the...
                  </p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-light py-5">
      <p class="text-center">Designed and developed by Toriya Damir</p>
    </footer>

    <!-- JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- jQuery library -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap JavaScript library -->
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
  </body>
</html>
