<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyJobs - Job Platform Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="loading-screen" class="d-flex justify-content-center align-items-center">
        <img class="d-block" src="{{ asset('img/logo.png') }}" height="150" alt="Logo">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <div id="main-content" class="d-none">
        <header class="bg-primary shadow-sm">
            <div class="container-fluid">
                <nav class="navbar navbar-expand p-0">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link btn btn-light text-primary mx-2 rounded-2 px-3 py-2" href="#">Home</a>
                        <a class="nav-link text-white mx-2 px-3 py-2" href="#">Post A Job</a>
                        <a class="nav-link text-white mx-2 px-3 py-2" href="#">Find Jobs</a>
                        <a class="nav-link text-white mx-2 px-3 py-2" href="#">Login</a>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container py-4">
            <div class="slider-area mb-4 border rounded-3 p-5 text-center bg-light">
                Slider Image
            </div>

            <div class="input-group mb-5">
                <input type="text" class="form-control form-control-lg py-3"
                    placeholder="Search Jobs by title, skills, location, salary ..." aria-label="Search Jobs">
            </div>

            <h2 class="mb-4 fw-bold">Featured Jobs</h2>
            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="card job-card h-100 shadow-sm border-2">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-2 job-type-badge">Remote</span>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Job Title</h5>
                            <p class="card-text text-muted">Short description about the job</p>
                            <hr>
                            <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Location: **Accra**</p>
                            <p class="card-text"><i class="bi bi-currency-dollar me-2"></i>**$5000**</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card job-card h-100 shadow-sm border-2">
                        <span class="badge bg-warning position-absolute top-0 end-0 m-2 job-type-badge">Remote</span>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Job Title</h5>
                            <p class="card-text text-muted">Short description about the job</p>
                            <hr>
                            <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Location: **Accra**</p>
                            <p class="card-text"><i class="bi bi-currency-dollar me-2"></i>**$5000**</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card job-card h-100 shadow-sm border-2">
                        <span class="badge bg-success position-absolute top-0 end-0 m-2 job-type-badge">On Site</span>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Job Title</h5>
                            <p class="card-text text-muted">Short description about the job</p>
                            <hr>
                            <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Location: **Accra**</p>
                            <p class="card-text"><i class="bi bi-currency-dollar me-2"></i>**$5000**</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="mb-4 fw-bold">Search Results ....</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card job-card h-100 shadow-sm border-2">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-2 job-type-badge">Remote</span>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Job Title</h5>
                            <p class="card-text text-muted">Short description about the job</p>
                            <hr>
                            <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Location: **Accra**</p>
                            <p class="card-text"><i class="bi bi-currency-dollar me-2"></i>**$5000**</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card job-card h-100 shadow-sm border-2">
                        <span class="badge bg-warning position-absolute top-0 end-0 m-2 job-type-badge">Remote</span>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Job Title</h5>
                            <p class="card-text text-muted">Short description about the job</p>
                            <hr>
                            <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Location: **Accra**</p>
                            <p class="card-text"><i class="bi bi-currency-dollar me-2"></i>**$5000**</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card job-card h-100 shadow-sm border-2">
                        <span class="badge bg-success position-absolute top-0 end-0 m-2 job-type-badge">On Site</span>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Job Title</h5>
                            <p class="card-text text-muted">Short description about the job</p>
                            <hr>
                            <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i>Location: **Accra**</p>
                            <p class="card-text"><i class="bi bi-currency-dollar me-2"></i>**$5000**</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-dark text-white text-center py-4 mt-5">
            Footer with some links
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>



{{-- <!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyJobs</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-dark text-white">

    <!-- Loader -->
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
        <a class="navbar-brand fw-bold text-white" href="#">EasyJobs</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Post A Job</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Find Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item">
                    <button id="modeToggle" class="btn btn-outline-light btn-sm ms-3">Light Mode</button>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carousel Slider -->
    <section class="container mt-4">
        <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded">

                <div class="carousel-item active">
                    <img src="assets/slider1.jpg" class="d-block w-100 slider-img" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="assets/slider2.jpg" class="d-block w-100 slider-img" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="assets/slider3.jpg" class="d-block w-100 slider-img" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- Search -->
    <section class="container mt-4">
        <input class="form-control form-control-lg search-input" id="searchBox" type="text"
            placeholder="Search jobs by title, skills, location, salary ...">
    </section>

    <!-- Featured Jobs -->
    <section class="container mt-5">
        <h3 class="fw-bold">Featured Jobs</h3>
        <div id="featuredJobs" class="row g-4 mt-2"></div>
    </section>

    <!-- Search Results -->
    <section class="container mt-5">
        <h3 class="fw-bold">Search Results</h3>
        <div id="searchResults" class="row g-4 mt-2"></div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 footer-bg">
        © 2025 EasyJobs — Your future job awaits you.
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html> --}}
