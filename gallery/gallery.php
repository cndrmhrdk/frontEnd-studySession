<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Cander - GALLERY PAGE</title>
    <style>
        /* * {outline: 1px solid red;} */

        nav{
            background-color: rgb(37, 38, 75);
            box-shadow: rgba(41, 7, 99, 0.559) 0px 0px 30px;
        }

        .nav-link{
            font-family: 'Poppins', sans-serif;
            font-size: large;
            color: rgb(171, 171, 171);
        }

        body{
            background: rgb(12, 0, 32);
        }

        .gallery{
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            margin-bottom: 40px;
            padding: 20px;
            gap: 30px;
        }

        .gallery img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 10px;
            transition: 0.5s all ease-in-out;
            border: solid whitesmoke 1px;
        }

        .gallery img:hover{
            transform: scale(1.05);
        }

        .back-home{
            width: 100%;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 50px;
        }
        
        .click{
            transition: 0.4s all ease-in-out;
        }
        
        .click:hover{
            box-shadow: rgba(255, 255, 255, 0.46) 0px 0px 20px;
            transform: scale(1.02);
        }
    </style>
</head>
<body>
    <!-- nav section start -->
    <nav class="navbar navbar-expand-lg sticky-top p-0">
        <div class="container-fluid p-2 px-3 gap-3">
            <div class="align-items-center">
                <a class="navbar-brand d-flex align-items-center m-0 p-0 gap-1" href="#">
                    <img src="../assets/myFace.jpg" alt="myFace" class="rounded-pill"style="box-shadow: white 0px 0px 2px;" width=30>
                    <span style="color: rgb(162, 162, 162); font-weight: 500;">Canhpoug</span>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item justify-content-center">
                        <a class="nav-link fw-medium" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle fw-bold"  style="color: white;" aria-current="page" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Others
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Contact</a></li>
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                            <li><a class="dropdown-item" href="#">Sosmed</a></li>
                        </ul>
                    </li>
                </ul>              
                <form class="d-flex" role="search" action="">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- nav section end -->

    <!-- first layout start -->
    <div class="container-fluid text-center text-light p-0">
        <div class="text-center mt-5 mb-3">
            <span style="font-family: 'Poppins', sans-serif; font-size: 20px; text-shadow: 0 0 10px rgb(59, 28, 255); font-weight: 600;">
                WELCOME TO MY GALLERY
            </span>
            <p style="font-family: 'Poppins', sans-serif; font-style: italic; font-size: 15px; text-shadow: 0 0 10px rgb(59, 28, 255); font-weight: 400;">-Make memories by taking photos of every moment i came across-</p>
        </div>
        <div class="gallery">
            <?php
                $images = scandir("../assets/gallery-assets/");
                foreach($images as $img){
                    if ($img != "." && $img != ".."){
                        echo "<img src='../assets/gallery-assets/$img'>";
                    }
                }
            ?>
        </div>
        <div class="text-center mb-1">
            <p style="font-family: 'Poppins', sans-serif; font-style: italic; font-size: 15px; text-shadow: 0 0 10px rgb(59, 28, 255); font-weight: 400;">-Thanks sudah mampir gussys-</p>
        </div>
        <div class="back-home">
            <a class="click btn btn-light fw-medium" href="../index.html">Wanna go back hum?</a>
        </div>
    </div>
    <!-- first layout end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>