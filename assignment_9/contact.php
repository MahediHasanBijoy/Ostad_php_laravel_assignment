<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light navbar-expand-md px-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php">
            <img src="logo1.png" alt="" width="30" height="24" class="d-inline-block img-fluid">
            Larablog
          </a>
        <!-- </div>
        <div class="container-fluid"> -->
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-3">
                  <a class="nav-link " aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item mx-3">
                  <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item mx-3">
                  <a class="nav-link active" href="contact.php">Contact</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>

      <section class="container">
        <div class="row">
            <div class="col-md-6 mx-auto my-3 p-5">
                <h1>Leave your comment here</h1>
                <?php
                $msg = $_GET['success'] ?? "";
                if($msg){
                  echo '<p class="bg-success rounded p-3 text-white" id="success">Thank you for your message..</p>';
                }
                ?>
                <form action="process.php" method="post" class="mt-4">
                    <label for="">Name:</label>
                    <input type="text" name="name" class="form-control mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control mb-3">
                    <label for="">Subject</label>
                    <input type="text" name="subject" class="form-control mb-3">
                    <label for="">Comment</label>
                    <textarea name="comment" class="form-control mb-3" id="" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      </section>






      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <script>
        let message = document.getElementById('success');
        console.log(message);
        if(message){
          setTimeout(clear, 2000);
        }

        function clear(){
          message.style.display = "none";
        }
      </script>
</body>
</html>