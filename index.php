<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/logo.ico" />
  </head>
  <body>
    <!-- Add News Modal -->
    <div
      class="modal fade"
      id="addNewsModal"
      tabindex="-1"
      aria-labelledby="addNewsModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="addNewsModalLabel">Add News</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="newsForm" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="newsTitle" class="form-label">Title</label>
                <input
                  type="text"
                  class="form-control"
                  id="newsTitle"
                  name="title"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="newsDescription" class="form-label"
                  >Description</label
                >
                <textarea
                  class="form-control"
                  id="newsDescription"
                  name="content"
                  rows="3"
                  required
                ></textarea>
              </div>
              <div class="mb-3">
                <label for="newsImage" class="form-label">Upload Image</label>
                <input
                  type="file"
                  class="form-control"
                  id="newsImage"
                  name="image"
                />
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Add News
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

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
                class="nav-link active"
                style="color: yellow"
                aria-current="page"
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
              <a class="nav-link" href="alumni.php">Alumni</a>
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

    <div class="container my-4">
      <h1 class="mb-4">Welcome to ISPSC Department of Psychology</h1>
      <p class="lead">
        Discover the power of the mind at Ilocos Sur Polytechnic State College's
        Department of Psychology. We offer cutting-edge programs, research
        opportunities, and a supportive community to help you explore the depths
        of human behavior and cognition.
      </p>

      <div class="overflow-hidden">
        <div class="my-4 psychology-slider">
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-brain"></i></div>
            <h1 class="fs-5 fw-bold">Cognitive Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-user-friends"></i></div>
            <h1 class="fs-5 fw-bold">Social Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-child"></i></div>
            <h1 class="fs-5 fw-bold">Developmental Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-brain"></i></div>
            <h1 class="fs-5 fw-bold">Neuropsychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-user-md"></i></div>
            <h1 class="fs-5 fw-bold">Clinical Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-brain"></i></div>
            <h1 class="fs-5 fw-bold">Behavioral Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-school"></i></div>
            <h1 class="fs-5 fw-bold">Educational Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-balance-scale"></i></div>
            <h1 class="fs-5 fw-bold">Forensic Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-heartbeat"></i></div>
            <h1 class="fs-5 fw-bold">Health Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-user-tie"></i></div>
            <h1 class="fs-5 fw-bold">Industrial-Organizational Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-user"></i></div>
            <h1 class="fs-5 fw-bold">Personality Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-futbol"></i></div>
            <h1 class="fs-5 fw-bold">Sports Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-exclamation-circle"></i></div>
            <h1 class="fs-5 fw-bold">Abnormal Psychology</h1>
          </div>
          <div class="mx-5 text-secondary d-flex align-items-center gap-3">
            <div><i class="fas fa-user-astronaut"></i></div>
            <h1 class="fs-5 fw-bold">Humanistic Psychology</h1>
          </div>
        </div>
      </div>

      <!-- New Section: Bottom Content (News, Programs, Quick Links) -->
      <div class="row">
        <!--first col-->
        <div class="col-lg-4 col-md-4">
          <div
            class="d-flex align-items-center justify-content-between"
            style="background-color: #800000; color: white"
          >
            <h2 class="p-2 fs-5 fw-bold">Latest News</h2>
          </div>
          <div id="news-container" class="mt-3">
            <p>Loading news...</p>
          </div>
        </div>

        <!--second col-->
        <div class="col-lg-8 col-md-4">
          <!--Top part-->
          <div class="d-flex flex-column gap-3">
            <div>
              <h2><i class="fa-solid fa-graduation-cap"></i> Programs</h2>
              <ul class="list-group">
                <li class="list-group-item">Bachelor of Arts in Psychology</li>
                <li class="list-group-item">
                  Master of Arts in Clinical Psychology
                </li>
                <li class="list-group-item">PhD in Cognitive Psychology</li>
              </ul>
            </div>
            <div>
              <h2><i class="fa-solid fa-link"></i> Quick Links</h2>
              <ul class="list-group">
                <li class="list-group-item">
                  <a href="#" class="text-decoration-none">
                    <i
                      class="fa-solid fa-list-check"
                      style="color: #800000"
                    ></i>
                    PhilGEPS / Procurement
                  </a>
                </li>
                <li class="list-group-item">
                  <a href="#" class="text-decoration-none">
                    <i class="fa-solid fa-person" style="color: #800000"></i>
                    Citizen's Charter</a
                  >
                </li>
                <li class="list-group-item">
                  <a href="#" class="text-decoration-none"
                    ><i
                      class="fa-solid fa-user-doctor"
                      style="color: #800000"
                    ></i>
                    Job Vacancies
                  </a>
                </li>
                <li class="list-group-item">
                  <a href="#" class="text-decoration-none"
                    ><i class="fa-solid fa-download" style="color: #800000"></i>
                    Downloads</a
                  >
                </li>
                <li class="list-group-item">
                  <a href="#" class="text-decoration-none"
                    ><i class="fa-solid fa-star" style="color: #800000"></i>
                    Quality Assurance</a
                  >
                </li>
                <li class="list-group-item">
                  <a href="#" class="text-decoration-none"
                    ><i class="fa-solid fa-book" style="color: #800000"></i>
                    Library Services</a
                  >
                </li>
                <li class="list-group-item">
                  <a href="#" class="text-decoration-none"
                    ><i
                      class="fa-solid fa-user-graduate"
                      style="color: #800000"
                    ></i>
                    Alumni</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <!--End Top part-->

          <!--Middle part-->
          <div
            class="my-3"
            style="
              position: relative;
              background: url('img/farmer.jpg') center/cover no-repeat;
              border-radius: 8px;
              overflow: hidden;
            "
          >
            <!-- Overlay -->
            <div
              style="
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(128, 0, 0, 0.6); /* Dark Maroon Overlay */
              "
            ></div>

            <div class="p-4" style="position: relative; z-index: 2">
              <h2 style="color: #ffc107; font-weight: bold">
                Filipino Farmers Face Uncertain Future Amid Climate and Market
                Turbulence
              </h2>
              <br />
              <p style="color: #ffffff">
                Filipino farmers have been grappling with a series of
                unprecedented challenges that threaten both their livelihoods
                and national food security. The dual impact of severe
                weather—exacerbated by climate change—and volatile market
                conditions has led to significant crop losses and rising input
                costs...
              </p>
              <p style="color: #f1f1f1">
                Meanwhile, government interventions, such as temporary buffer
                stock releases and revised tariff policies, have provided
                short-term relief. However, many in the agriculture community
                believe that long-term solutions require a complete overhaul of
                existing practices...
              </p>
            </div>
          </div>

          <div
            class="my-3"
            style="
              position: relative;
              background: url('img/homeless.jpg') center/cover no-repeat;
              border-radius: 8px;
              overflow: hidden;
            "
          >
            <!-- Overlay -->
            <div
              style="
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(128, 0, 0, 0.6); /* Dark Maroon Overlay */
              "
            ></div>

            <div class="p-4" style="position: relative; z-index: 2">
              <h2 style="color: #ffc107; font-weight: bold">
                The Growing Crisis of Urban Homelessness in the Philippines
              </h2>
              <br />
              <p style="color: #ffffff">
                The issue of homelessness in the Philippines has reached
                alarming levels, particularly in urban areas like Metro Manila,
                Cebu, and Davao. Rising living costs, unemployment, and
                inadequate housing programs have left thousands of families
                without shelter. Informal settlers often live in makeshift
                dwellings under bridges, along railways, or in overcrowded
                evacuation centers, vulnerable to displacement, diseases, and
                lack of basic services.
              </p>
              <p style="color: #f1f1f1">
                While the government has introduced socialized housing projects
                and cash aid programs, many critics argue that these efforts are
                insufficient in addressing the root causes of homelessness. NGOs
                and private initiatives are stepping in, offering livelihood
                programs, temporary shelters, and advocacy for policy reforms.
                However, long-term solutions, such as affordable housing laws
                and sustainable job creation, remain a challenge.
              </p>
            </div>
          </div>

          <div
            class="my-3"
            style="
              position: relative;
              background: url('img/fisherman.jpg') center/cover no-repeat;
              border-radius: 8px;
              overflow: hidden;
            "
          >
  <!-- Overlay -->
        <div
          style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(128, 0, 0, 0.6); /* Dark Maroon Overlay */
          "
        ></div>

        <div class="p-4" style="position: relative; z-index: 2">
          <h2 style="color: #ffc107; font-weight: bold">
            Rising Costs Threaten Small-Scale Filipino Fishermen
          </h2>
          <br />
          <p style="color: #ffffff">
            Small-scale Filipino fishermen are facing an uphill battle as fuel prices,
            equipment costs, and declining fish populations put immense pressure on their
            livelihoods. Many coastal communities, once thriving on the bounty of the sea, 
            now struggle with unpredictable catch yields and increasing operational expenses...
          </p>
          <p style="color: #f1f1f1">
            While government programs aim to provide financial aid and infrastructure support, 
            fishermen argue that sustainable fishing policies and better access to technology 
            are needed to secure the future of the industry. Without these long-term solutions, 
            many fear that traditional fishing practices may soon become unsustainable...
          </p>
        </div>
      </div>


      <div
  class="my-3"
  style="
    position: relative;
    background: url('img/urbanization.jpeg') center/cover no-repeat;
    border-radius: 8px;
    overflow: hidden;
  "
>
  <!-- Overlay -->
  <div
    style="
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(128, 0, 0, 0.6); /* Dark Maroon Overlay */
    "
  ></div>

  <div class="p-4" style="position: relative; z-index: 2">
    <h2 style="color: #ffc107; font-weight: bold">
      Urbanization Threatens Indigenous Filipino Communities
    </h2>
    <br />
    <p style="color: #ffffff">
      Rapid urban expansion in the Philippines is putting Indigenous communities 
      at risk, as land development projects encroach on ancestral domains. 
      Many Indigenous groups face displacement, losing access to their 
      cultural heritage and traditional ways of life...
    </p>
    <p style="color: #f1f1f1">
      While advocacy groups push for stronger land rights protection, challenges 
      remain in ensuring legal recognition and economic opportunities for affected communities. 
      Without intervention, experts warn that the rich cultural diversity of the 
      Philippines may face irreversible changes...
    </p>
  </div>
</div>



          <!--End Middle part-->

        </div>
      </div>

      <!-- End New Section -->
    </div>
    <!-------------------- Contact FORM -------------------->
    <div class=" h-50">
            <div class="row g-0">
                <!-- Left Side (Image & Text) -->
                <div class="col-md-6 d-flex align-items-center justify-content-center text-center position-relative text-light py-4" 
                  style="background: url('img/contact.jpg') center/cover no-repeat; min-height: 60vh;">
                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75"></div>
                  <div class="position-relative">
                      <h1 class="display-5 fw-bold">Empowering Minds, Shaping Futures</h1>
                      <p class="fs-5">Excellence in Education, Leadership, and Innovation</p>
                      <a href="#" class="btn btn-outline-light btn-sm fw-bold">Learn More</a>
                  </div>
            </div>


            <!-- Right Side (Contact Form with Maroon Background & Dots Overlay) -->
            <div class="col-md-6 d-flex align-items-center justify-content-center text-dark p-4 position-relative" 
                style="background: #800000; min-height: 60vh;">
                
                <!-- Dots Overlay -->
                <div class="position-absolute top-0 start-0 w-100 h-100" 
                    style="background: url('img/dots.png') center/cover no-repeat; filter: invert(1); opacity: 15%;"></div>

                <!-- Form Content -->
                <div class="w-100 position-relative" style="max-width: 400px;">
                    <h2 class="fw-bold text-center fs-4" style="color: #ffc107;">Contact Us</h2>
                    <p class="text-center fs-6" style="color: #ffc107;">We’d love to hear from you. Fill in the details below.</p>
                    <form id="contactForms">
                        <div class="d-flex flex-column mb-2">
                            <span class="text-white"><i class="fa-solid fa-user"></i> Name</span>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your name here" required />
                        </div>
                        <div class="d-flex flex-column mb-2">
                            <span class="text-white"><i class="fa-solid fa-envelope"></i> Email</span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your email here" required />
                        </div>
                        <div class="d-flex flex-column mb-2">
                            <span class="text-white"><i class="fa-solid fa-book"></i> Subject</span>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject here" required />
                        </div>
                        <div class="d-flex flex-column mb-2">
                            <span class="text-white"><i class="fa-solid fa-message"></i> Message</span>
                            <textarea name="message" id="message" class="form-control" placeholder="Your message here" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-light btn-sm fw-bold w-100 sendMessage" >Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <!-------------------- END Contact FORM -------------------->

    <?php include "footer.php"?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/script.js"></script>
    <script src="script/fetch_news.js"></script>
    <script src="script/add_news.js"></script>
    <script src="script/email_sender.js"></script>

    <script>
      $(document).ready(function () {
        function startMarquee() {
          let container = $(".psychology-slider");
          let wrapper = $("<div class='slider-wrapper'></div>").css({
            display: "flex",
            width: "max-content",
          });

          // Wrap all existing elements inside the new wrapper
          container.wrapInner(wrapper);
          let slider = container.find(".slider-wrapper");

          // Duplicate content for a seamless loop
          slider.append(slider.html());

          function animate() {
            let firstItemWidth = slider.children().first().outerWidth(true); // Get first item width
            slider.animate(
              { marginLeft: -firstItemWidth },
              3000, // Adjust speed for smoother scrolling
              "linear",
              function () {
                // Move first item to the end
                slider.append(slider.children().first());
                slider.css("marginLeft", 0);
                animate();
              }
            );
          }
          animate();
        }
        startMarquee();
      });
    </script>
  </body>
</html>
