<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;  
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-md px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.html">
                <img src="logo1.png" alt="" width="30" height="24" class="d-inline-block img-fluid">
                Larablog
            </a>
            <!-- </div>
        <div class="container-fluid"> -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container mb-5">
        <div class="row">
            <div class="col-md-3 mt-5">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                  <h2 class="my-3">Caterories</h2>
                  <ul class="list-group">
                    <li class="list-group-item"><a href="blog.php?cat=football" class="text-dark">Football</a></li>
                    <li class="list-group-item"><a href="blog.php?cat=cricket" class="text-dark">Cricket</a></li>
                    <li class="list-group-item"><a href="blog.php?cat=programming" class="text-dark">Programming</a></li>
                    <li class="list-group-item"><a href="blog.php?cat=trending" class="text-dark">Trending</a></li>
                  </ul>
            </div>
            <div class="col-md-9">
                <h1 class="text-center my-5">Latest Blogs</h1>
                <div class="row gx-5 mb-3">
                    <div class="col-md-4 mb-3">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                    <div class="col-md-4 mb-3 ">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4 mb-3">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h3>Blog title</h3>
                        <img src="post1.jpg" class="img-fluid" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quia accusamus id eligendi.
                            Ipsam eos sed sint itaque quas!</p>
                        <a href="single_blog.php" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>