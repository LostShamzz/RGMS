<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Grant Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
    <!-- WOW.js for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lexend Exa';
            background: linear-gradient(to bottom right, #1c1c2b, #2a2a4d);
            color: #f4f4f9;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .navbar a {
            color: rgb(242, 231, 109) !important;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #ff8c00 !important;
        }

        #home {
            background: url('https://wallpapers.com/images/hd/high-quality-black-colorful-waves-wv8q8gnhznq5o0ps.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        #home h3 {
            letter-spacing: 2px;
            animation-delay: 0.9s;
        }

        #home h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            animation-delay: 1.6s;
        }

        #home .btn {
            background: #d80303;
            border: none;
            border-radius: 25px;
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 4px;
            padding: 16px 38px;
            margin-top: 28px;
            transition: all 0.4s ease-in-out;
            animation-delay: 2s;
        }

        #home .btn:hover {
            background: #ffffff;
            color: #26253a;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section id="home">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h3 class="animate__animated animate__bounceIn">Hello! You are welcome to</h3>
            <h1 class="animate__animated animate__fadeInUp">Research Grant Management System</h1>
            
            <a href="{{ url('/dashboard') }}" class="btn btn-default animate__animated animate__fadeInUp">Get Started</a>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
