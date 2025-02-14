<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumni - ISPSC Department of Psychology</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/logo.ico" />
  </head>
  <body>
    <header class="header">
      <div class="container">
       <div
        class="d-flex flex-column align-items-center justify-content-center text-center"
        >
          <div>
            <img
              src="img/ispsc.png"
              alt="ISPSC Logo"
              width="100"
              height="100"
              class="me-3"
            />
            <img
              class="bagong-pilipinas"
              src="img/bagong-pilipinas.png"
              alt="ISPSC Logo"
              width="120"
              height="120"
              class="me-3"
            />
          </div>
          <div>
            <h1 class="ispsc-logo mb-0">REPUBLIC OF THE PHILIPPINES</h1>
            <hr class="my-2 border-white" />
            <h1 class="ispsc-logo mb-0">
              ILOCOS SUR POLYTECHNIC STATE COLLEGE
            </h1>
            <h2 class="ispsc-logo mb-0">ILOCOS SUR, PHILIPPINES</h2>
          </div>
        </div>
      </div>
    </header>

    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="navbar-toggler-icon" id="menu"></i>
        </button>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link "
               
                href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="instruction.php">Instruction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="research.php">Research</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="extension.php">Extension</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="internationalization.php"
                >Internationalization</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="psychometrician-reviewer.php"
                >Psychometrician Reviewer</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active"  style="color: yellow"
              aria-current="page" href="alumni.php">Alumni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="others.php">Others</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <main class="container my-4">
      <h1>Alumni</h1>
      <p class="lead">
        Our alumni are a proud community of ISPSC graduates who continue to make
        significant contributions in the field of psychology. This page
        highlights success stories, networking events, and opportunities for
        ongoing engagement.
      </p>
      <ul>
        <li>Success Stories and Testimonials</li>
        <li>Alumni Events and Reunions</li>
        <li>Career Opportunities and Networking</li>
      </ul>
      <img
        src="placeholder.svg"
        alt="Alumni"
        class="img-fluid rounded shadow-sm mb-4"
      />
    </main>

   
    <?php include "footer.php"?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/script.js"></script>
  </body>
</html>
