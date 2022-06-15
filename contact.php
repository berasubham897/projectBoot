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
                        <a class="nav-link " aria-current="page" href="/ieee_sample.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/about.html">About</a>
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
                        <a class="nav-link active" href="/contact.html">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-primary btn-lg fw-bold" type="submit">
                        Search
                    </button>
                </form>
                <button class="btn btn-secondary btn-lg fw-bold ms-2 me-1" type="submit">
                    Join IEEE
                </button>
                <button class="btn btn-primary btn-lg fw-bold ms-1 me-2" type="submit">
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
    <div class="container mt-5">
        <h1>Contact Us</h1>
        <div class="mt-5 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-check">
            <label class="form-check-label" for="flexCheckDefault">
                Are you a member?
            </label>
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

        </div>
        <div class="mt-3 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="alert alert-primary text-dark mt-5 fs-2 fw-bold role=" alert">
            IEEE Supports
        </div>
        <p class="fs-5 mt-3">
            IEEE has approximately 1,000 employees who support various IEEE activities. The Executive Director is
            the full-time chief operating officer.IEEE online product support for electronic subscriptions: For
            assistance with electronic online subscriptions for universities, government, and academic customers, please
            contact onlinesupport@ieee.org
        </p>
        <p class="fs-5 mt-3"> If you wish to speak to a representative, please call:</p>

        <p class="fs-5 mt-3"> +1 800 701 IEEE (USA and Canada)</p>
        <p class="fs-5 mt-3"> +1 732 981 0060 (Worldwide)</p>
        <p class="fs-5 mt-3"> or fax at: +1 732 981 9667</p>

        <p class="fs-5 mt-3"></p> Business hours: Monday through Friday, 8:30 a.m. to 5:00 p.m. ET (12:30 to 21:00
        UTC-04)</p>

    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2022 Company, Inc</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>