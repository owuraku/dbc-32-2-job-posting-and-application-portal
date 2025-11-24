<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal - Home</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fa;
        }

        /* Header */
        header {
            background: #2d6cdf;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            background: #eef3ff;
            padding: 60px 20px;
            text-align: center;
        }

        .hero h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .hero p {
            color: #555;
            margin-bottom: 20px;
        }

        .hero input {
            padding: 12px;
            width: 60%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            padding: 10px 20px;
            background: #2d6cdf;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        /* Featured Jobs */
        .jobs-section {
            padding: 40px 20px;
        }

        .job-card {
            background: white;
            padding: 20px;
            margin: 10px 0;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .job-card h3 {
            margin-top: 0;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: #2d6cdf;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Job Portal</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Jobs</a>
            <a href="#">Post a Job</a>
            <a href="#">Login</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Find Your Dream Job</h2>
        <p>Search thousands of job listings from top companies.</p>
        <input type="text" id="searchInput" placeholder="Search for jobs...">
        <button class="btn" onclick="searchJobs()">Search</button>
    </section>

    <section class="jobs-section">
        <h2>Featured Jobs</h2>

        <div class="job-card">
            <h3>Frontend Developer</h3>
            <p>Company: TechVision</p>
            <p>Location: Remote</p>
        </div>

        <div class="job-card">
            <h3>Marketing Specialist</h3>
            <p>Company: BrightMedia</p>
            <p>Location: New York, USA</p>
        </div>

        <div class="job-card">
            <h3>Data Analyst</h3>
            <p>Company: DataWorks</p>
            <p>Location: London, UK</p>
        </div>
    </section>

    <footer>
        &copy; 2025 Job Portal. All Rights Reserved.
    </footer>

    <script>
        function searchJobs() {
            const query = document.getElementById("searchInput").value.trim();
            if (query) {
                alert("Searching for: " + query);
            } else {
                alert("Please enter a search term.");
            }
        }
    </script>

</body>

</html>
