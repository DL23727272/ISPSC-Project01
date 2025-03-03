<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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

    
    <!------------------- Add News Modal ----------------------->
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
    <!------------------- END Add News Modal ----------------------->

    <!------------------- Edit News Modal -----------------------> 
    <div class="modal fade" id="editNewsModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title">Edit News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editNewsForm" enctype="multipart/form-data">
                        <input type="hidden" id="editNewsId" name="id">

                        <div class="mb-3">
                            <label for="editNewsTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="editNewsTitle" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="editNewsContent" class="form-label">Content</label>
                            <textarea class="form-control" id="editNewsContent" name="content" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="editNewsImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="editNewsImage" name="image">
                            <img id="editImagePreview" src="" alt="Current Image" class="mt-2" width="100">
                        </div>

                        <div class="mb-3">
                            <label for="editNewsDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="editNewsDate" name="date_posted" required>
                        </div>

                        <button type="submit" class="btn btn-warning w-100">Update News</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!------------------- End Edit News Modal ----------------------->  
 

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
                class="nav-link"
                href="index.php"
                ><i class="fa-solid fa-power-off"></i> Logout</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                style="color: yellow"
                aria-current="page"
                href="index.php"
                >News</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accounts.php"> Accounts</a>
            </li>
          </ul>
          <!-- <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>

    <div class="container my-4">
     

      
      <div class="row row-cols-4">

        <!------------------- NEWS SECTION------------------------- -->

        <div class="col-md-8">
            <div class="d-flex align-items-center justify-content-between bg-primary text-white p-2">
              <h2 class="fs-5 fw-bold">Manage News</h2>
              <i class="fa-solid fa-plus px-4" data-bs-toggle="modal" data-bs-target="#addNewsModal"></i>
            </div>
            
            <table class="table table-bordered mt-3">
              <thead class="table-dark">
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="newsTableBody">
                <!-- News entries will be inserted here dynamically -->
              </tbody>
            </table>
          </div>
          

        <!------------------ END NEWS SECTION ------------------>

       
      </div>

    </div>

   
    <?php include "footer.php"?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/script.js"></script>
    <script src="script/admin_fetchNews.js"></script>
    <script src="script/add_news.js"></script>
    <script src="script/admin_editNews.js"></script>
    <script src="script/admin_deleteNews.js"></script>

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

      console.log("Developed by: Dran Leynard P. Gamoso");
        console.log("DL's Portfolio: " + "https://dlportfolio.personatab.com/");

        document.addEventListener("DOMContentLoaded", function () {
            let empID = sessionStorage.getItem("username");
            console.log("Stored Employee ID:", empID);

            // If no employee ID is found, show SweetAlert and redirect
            if (!empID) {
                Swal.fire({
                    icon: "error",
                    title: "No Employee ID Found",
                    text: "Please log in to continue.",
                    confirmButtonColor: "#800000"
                }).then(() => {
                    window.location.href = "index.php"; // Redirect to login page
                });
                return; // Stop further script execution
            }
        });
    </script>
  </body>
</html>
