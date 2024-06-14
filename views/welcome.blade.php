<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Welcome to the GitHub Login App</h2>
                    </div>
                    <div class="card-body text-center">
                        @if (Auth::check())
                            <h1 class="mb-4">Welcome, {{ Auth::user()->name }}!</h1>
                            <a class="btn btn-danger" href="{{ route('githublogin.logout') }}">Logout</a>
                        @else
                            <h1 class="mb-4">Welcome to the GitHub Login App</h1>
                            <a class="btn btn-primary" href="{{ route('githublogin.login') }}">Login with GitHub</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
