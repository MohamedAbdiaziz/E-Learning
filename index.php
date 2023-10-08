<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning App</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">E-Learning App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto bg-dark">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="display-4">Welcome to Our E-Learning App!</h1>
        <p class="lead">Learn new skills and expand your knowledge with our wide range of courses.</p>
        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
      </div>
    </section>

    <section class="container">
      <h2 class="text-center">Featured Courses</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="6461.jpg" class="card-img-top" alt="Course 1">
            <div class="card-body">
              <h5 class="card-title">Course 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="6461.jpg" class="card-img-top" alt="Course 2">
            <div class="card-body">
              <h5 class="card-title">Course 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="6461.jpg" class="card-img-top" alt="Course 3">
            <div class="card-body">
              <h5 class="card-title">Course 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <!-- Add more courses here -->
      </div>
    </section>
    <section class="container">
      <h2 class="text-center">Available Courses</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="6461.jpg" class="card-img-top" alt="Course 1">
            <div class="card-body">
              <h5 class="card-title">Course 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="6461.jpg" class="card-img-top" alt="Course 2">
            <div class="card-body">
              <h5 class="card-title">Course 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="6461.jpg" class="card-img-top" alt="Course 3">
            <div class="card-body">
              <h5 class="card-title">Course 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
        </div>
        <!-- Add more courses here -->
      </div>
    </section>

    <section class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="medium-shot-man-waving-laptop.jpg" class="img-fluid" alt="About Image">
        </div>
        <div class="col-md-6">
          <h2>About Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor tellus mauris, eget vulputate neque iaculis ac. Cras rutrum, felis ac eleifend dapibus, massa dui consectetur nunc, quis hendrerit ex purus id tortor.</p>
          <p>Donec eget nisl id odio convallis rutrum in non purus. Aliquam erat volutpat. Suspendisse eget semper urna, eget aliquam massa.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Contact Us</h2>
          <p>Got any questions? We'd love to hear from you. Please fill out the form below, and we'll get back to you as soon as possible.</p>
          <form>
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Your Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-md-6">
          <h2>Our Location</h2>
          <p>123 Street, City</p>
          <p>Country</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1234567890!2dlongitude!3dlatitude!4m18!1m12!4m11!1m3!2m2!1dlongitude!2dlatitude!1m6!1m2!1s0x0:0x0!2zMzjCsDU2JzE2LjQiTiA4NcKwMjQnMzMuNCJF!2m2!1dlongitude!2dlatitude!3m4!1s0x0:0x0!8m2!3dlatitude!4dlongitude" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2023 E-Learning App. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="app.js"></script>
</body>
</html>