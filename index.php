<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #8ac0df">
        <div class="container-fluid">
            <a class="navbar-brand text-primary fs-2 fw-bold" href="#">IEEE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/ieee_sample.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Library
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item fw-bold" href="#">IEEE Membership</a>
                            </li>
                            <li>
                                <a class="dropdown-item fw-bold" href="#">IEEE Communities</a>
                            </li>
                            <li>
                                <a class="dropdown-item fw-bold" href="#">IEEE Conferences</a>
                            </li>

                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Publications</a></li>
                            <li><a class="dropdown-item" href="#">Education</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.html">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-primary btn-lg fw-bold" type="submit">
                        Search
                    </button>
                </form>
                <button class="btn btn-secondary btn-lg fw-bold ms-2 me-1" data-bs-toggle="modal" data-bs-target="#joinModal" type="submit">
                    Join IEEE
                </button>
                <button class="btn btn-primary btn-lg fw-bold ms-1 me-2" data-bs-toggle="modal" data-bs-target="#signModal" type="submit">
                    Sign in
                </button>
            </div>
        </div>
    </nav>

  <div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="joinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="joinModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Name</label>
                  <input type="text" id="name" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <label for="surname" class="form-label">Surname</label>
                  <input type="text" id="surname" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
              </div>
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">New Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>New Delhi</option>
                    <option>West Bengal </option>
                    <option>Bihar </option>
                    <option>Punjab </option>
                    <option>Andhra Pradesh </option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Are you a student?
                    </label>
                  </div>
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <button type="button" class="btn btn-primary">Create Account</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="signModal" tabindex="-1" aria-labelledby="signModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
            
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
              </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <button type="button" class="btn btn-primary">Sign in</button>
        </div>
      </div>
    </div>
  </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="caro1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block fs-4 fw-bold">
                    <h1>Advancing Technology for Humanity</h1>
                    <p>IEEE and its members inspire a global community through highly-cited publications, conferences,
                        technology standards, and professional and educational activities..</p>
                    <button type="button" class="btn btn-primary btn-lg">Learn More</button>
                </div>

            </div>
            <div class="carousel-item">
                <img src="caro2.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block fs-4 fw-bold">
                    <h1>Advancing Technology for Humanity</h1>
                    <p>IEEE and its members inspire a global community through highly-cited publications, conferences,
                        technology standards, and professional and educational activities..</p>
                    <button type="button" class="btn btn-primary btn-lg">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="caro3.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block fs-4 fw-bold">
                    <h1>Advancing Technology for Humanity</h1>
                    <p>IEEE and its members inspire a global community through highly-cited publications, conferences,
                        technology standards, and professional and educational activities..</p>
                    <button type="button" class="btn btn-primary btn-lg">Learn More</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <h1 class="mb-5 mt-5">Upcoming Events</h1>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Workshop</strong>
                        <h3 class="mb-0">Java Development</h3>
                        <div class="mb-1 text-muted">June 12</div>
                        <p class="card-text mb-auto">Java was originally developed by James Gosling at Sun Microsystems
                            and released in May 1995 as a core component of Sun Microsystems' Java platform.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                        <img class="bd-placeholder-img" src="ev1.jpg" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">UX/UI</strong>
                        <h3 class="mb-0">Web Development</h3>
                        <div class="mb-1 text-muted">Aug 08</div>
                        <p class="mb-auto">Web dev platform has wide range of internships and jobs. This is a wider card
                            with supporting text below as a natural lead-in to object oriented programming and
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" src="ev2.jpg" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Coding Challenge</strong>
                        <h3 class="mb-0">JAVA & PYTHON Master</h3>
                        <div class="mb-1 text-muted">Sept 22</div>
                        <p class="card-text mb-auto">Selecting an IDE for Java App Development and Pyhon program. Almost
                            all the
                            developers in the world is already familiar with the Java programming language.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                        <img class="bd-placeholder-img" src="ev3.jpg" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Journlas</strong>
                        <h3 class="mb-0">Research Paper Submission</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content. It should be familiar with any programming language and aslo object oriented programming .</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" src="ev4.jpg" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>The latest from IEEE</h2>
                    <p>Learn how wearables and mobile devices are getting smarter. They gather data across multiple
                        variables, integrate that data with information from other devices, and leverage AI to provide
                        new levels of analysis for a variety of conditions.</p>
                    <button class="btn btn-outline-light" type="button">More on IEEE</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Ray Liu, 2022 IEEE President and CEO</h2>
                    <p>Follow Ray Liu on social media to get updates from across IEEE, your professional home. He’ll be
                        highlighting different initiatives and products.</p>
                    <button class="btn btn-outline-secondary" type="button">Social Sites</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <h1 class="mb-5 mt-5">
            Some Executive Members of IEEE
        </h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="busi1.jpg" alt="">
                    <div class="card-body">
                        <h3>Mark Henderson</h3>
                        <p class="card-text fs-5">CEO of Henderson Gadgets</p>
                        <p>Munich, Germany </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-primary">Follow</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="busi2.jpg" alt="">

                    <div class="card-body">
                        <h3>Rudward Shane</h3>
                        <p class="card-text fs-5">CFO of London Glorry</p>
                        <p>Manchester, England </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-primary">Follow</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="busi3.jpg" alt="">
                    <div class="card-body">
                        <h3>Fernando Rudiger</h3>
                        <p class="card-text fs-5">Professor of University of California</p>
                        <p>Los Angels, USA </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-primary">Follow</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Events</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Team</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Company, Inc</p>
          </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>