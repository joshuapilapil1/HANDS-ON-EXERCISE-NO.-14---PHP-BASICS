<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add custom styles here */
        body {
            background-image: url('nature1.webp'); /* Replace 'nature1.webp' with your actual image file */
            background-repeat: no-repeat;
            background-size: cover;
        }
        .jumbotron {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background color */
            color: #ffffff;
            margin-bottom: 0; /* Remove default margin bottom */
        }
        .jumbotron .btn {
            color: #ffffff; /* Set button text color */
            border-color: #ffffff; /* Set button border color */
        }
        .jumbotron .btn:hover {
            color: #000000; /* Change button text color on hover */
            background-color: #ffffff; /* Change button background color on hover */
        }
        .jumbotron h1, .jumbotron p {
            margin-bottom: 1rem; /* Add margin bottom to headings and paragraphs */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background color */
            border-radius: 10px; /* Add border radius for a cleaner look */
            padding: 20px; /* Add padding */
            margin-top: 20px; /* Add margin top */
            margin-bottom: 20px; /* Add margin bottom */
        }
        .container h2 {
            margin-top: 0; /* Remove default margin top for headings */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">josh site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <!-- Add navigation links here if needed -->
        </ul>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to Josh website</h1> <!-- Centered header -->
    <p class="lead">This is a simple and clean homepage designed with Bootstrap.</p>
    <hr class="my-4">
    <a class="btn btn-success" href="main.php">Main Page</a> <!-- Link to the PHP process file -->
</div>

<div class="container">
<div class="row">
<div class="col-md-6 mx-auto text-center my-5">
    <h2>Welcome to my first website</h2>
    <p>This is not a fully developed site and has clanky front backend some of features wont work</p>
</div>


</div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
