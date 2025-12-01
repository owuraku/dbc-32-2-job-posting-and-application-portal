<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyJobs | Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Custom Styles for Auth Pages */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Placeholder for a professional job-related background image */
            background-image: url('https://placehold.co/1920x1080/007bff/ffffff?text=EasyJobs+Background');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .auth-card {
            max-width: 450px;
            width: 90%;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            /* Semi-transparent white card */
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="auth-card text-center">
        <h2 class="fw-bold text-primary mb-4">EasyJobs Login</h2>
        <p class="text-muted mb-4">Your future job awaits you.</p>

        <form action="{{ route('auth.login') }}" method="POST">
            @csrf
            <x-form-field name="email"></x-form-field>

            <x-form-field name="password" type="password"></x-form-field>

            <div class="d-grid gap-2 mb-4">
                <button type="submit" class="btn btn-primary btn-lg rounded-pill">Sign In</button>
            </div>

            <p class="small">
                Don't have an account? <a href="{{ route('auth.register.page') }}" class="text-primary fw-bold">Register
                    Now</a>
            </p>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
