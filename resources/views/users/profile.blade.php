<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyJobs - Job Platform Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Profile specific styles */
        .profile-header {
            background-color: #f0f8ff;
            /* Light blue background */
            padding: 20px;
            border-radius: 0.5rem;
            margin-bottom: 20px;
            border-left: 5px solid var(--bs-primary);
        }

        .info-group {
            border-bottom: 1px dashed #e9ecef;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .info-group:last-child {
            border-bottom: none;
        }
    </style>
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
                        @guest
                            <a class="nav-link text-white mx-2 px-3 py-2"
                                href="{{ route('auth.login.page') }}">Register/Login</a>
                        @endguest
                        @auth
                            <a class="nav-link text-white mx-2 px-3 py-2" href="{{ route('profile') }}">Profile</a>
                        @endauth
                    </div>
                </nav>
            </div>
        </header>

        <div class="container py-4">
            <div class="container-fluid py-4">
                <h1 class="mt-4 mb-4 text-primary"><i class="bi bi-person-lines-fill me-2"></i>My Profile Information
                </h1>

                <!-- Profile Card: View Mode -->
                <div class="card shadow mb-4" id="view-mode">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 fw-bold text-primary">Personal Details</h6>
                        <button class="btn btn-primary btn-sm" onclick="toggleEditMode()"><i
                                class="bi bi-pencil me-1"></i> Edit Profile</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-group">
                                    <p class="text-muted mb-0">Full Name</p>
                                    <p class="fw-bold fs-5" id="view-fullname">{{ auth()->user()->fullname }}</p>
                                </div>
                                <div class="info-group">
                                    <p class="text-muted mb-0">Email Address</p>
                                    <p class="fw-bold" id="view-email">{{ auth()->user()->email }}</p>
                                </div>
                                <div class="info-group">
                                    <p class="text-muted mb-0">Contact Number</p>
                                    <p class="fw-bold" id="view-contact">{{ auth()->user()->contact }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-group">
                                    <p class="text-muted mb-0">Address</p>
                                    <p class="fw-bold" id="view-address">{{ auth()->user()->address }}</p>
                                </div>
                                <div class="info-group">
                                    <p class="text-muted mb-0">Current CV / Resume</p>
                                    <p class="fw-bold">
                                        <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                                        <a href="{{ auth()->user()->cv_path_url() }}" class="text-primary"
                                            id="view-cv-link" target="_blank">{{ auth()->user()->fullname }}.pdf</a>
                                        @if (auth()->user()->cv_path)
                                            <embed style="height: 400px"
                                                src="{{ auth()->user()->cv_path_url() }}"><embed>
                                        @endif

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Card: Edit Mode (Hidden by default) -->
                <div class="card shadow mb-4 d-none" id="edit-mode">
                    <div class="card-header py-3">
                        <h6 class="m-0 fw-bold text-primary">Edit Personal Details</h6>
                    </div>
                    <div class="card-body">
                        <form id="profile-form" action="{{ route('profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <!-- Personal Info Column -->
                                <div class="col-md-6">

                                    <x-form-field name="fullname" :value="auth()->user()->fullname"></x-form-field>

                                    <x-form-field name="email" :value="auth()->user()->email" type="email"></x-form-field>
                                </div>

                                <!-- Address & CV Column -->
                                <div class="col-md-6">
                                    <x-form-field name="address" :value="auth()->user()->address"></x-form-field>
                                    <x-form-field name="contact" :value="auth()->user()->contact" type="tel"></x-form-field>
                                </div>

                                <x-form-field name="cv_path" type="file" label="CV File"></x-form-field>
                                @if (auth()->user()->cv_path)
                                    CURRENT CV:
                                    <embed src=" http://localhost:8000/storage/{{ auth()->user()->cv_path }}"><embed>
                                    {{ auth()->user()->contact }}
                                @endif
                            </div>

                            <div class="mt-4 pt-3 border-top">
                                <button type="submit" class="btn btn-success me-2"><i
                                        class="bi bi-check-circle me-1"></i> Save Changes</button>
                                <button type="button" class="btn btn-secondary" onclick="toggleEditMode()"><i
                                        class="bi bi-x-circle me-1"></i> Cancel</button>
                            </div>
                        </form>
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
    <script>
        function toggleEditMode() {
            const viewMode = document.getElementById('view-mode');
            const editMode = document.getElementById('edit-mode');

            viewMode.classList.toggle('d-none');
            editMode.classList.toggle('d-none');
        }

        @session('errors')
        toggleEditMode();
        @endsession

        // document.getElementById('profile-form').addEventListener('submit', function(event) {
        //     event.preventDefault();

        //     // In a real app, this is where you'd send data to a server/database.
        //     console.log("Saving changes...");


        // });
    </script>
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
