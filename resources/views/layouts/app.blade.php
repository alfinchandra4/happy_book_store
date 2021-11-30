<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Happy Book Store</title>
    {{-- <link rel="stylesheet" href="{{ asset('styles.css') }}"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }

        .content {
            min-height: 500px;
        }

        header {
            width: 100%;
            height: 150px;
            background: #344CB7;
        }

        header>.text {
            line-height: 150px;
            text-align: center;
            font-size: 3em;
        }

        footer {
            margin-top: 10px;
            width: 100%;
            height: 30px;
            background: #344CB7;
        }

        footer >.text {
            line-height: 30px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="text fw-bold text-white">Happy Book Store</div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('category/*') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('category-fiction') }}">Fiction</a></li>
                                <li><a class="dropdown-item" href="{{ route('category-science') }}">Science</a></li>
                                <li><a class="dropdown-item" href="{{ route('category-computer') }}">Computer</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold">@yield('book-title')</h5>
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold">Categories</h5>
                            <ul class="list-group list-group-flush">
                                <a href="{{ route('category-fiction') }}" class="list-group-item">Fiction</a>
                                <a href="{{ route('category-science') }}" class="list-group-item">Science</a>
                                <a href="{{ route('category-computer') }}" class="list-group-item">Computer</a>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="text text-white">@Happy Book Store 2021</div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
