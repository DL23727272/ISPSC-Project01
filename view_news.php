<html>
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
    <link href="styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/logo.ico" />
    </head>
    <?php 
    include 'backend/myConnection.php';
    $id = $_GET['id'];
    $row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM news WHERE id = '$id'"));
    ?>
<body style="  background: #1c1c1c; color: #ffc107;">

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


    
<div class="container">
    <div class="my-5">
  
      <div class="mb-3">
        
          <a href="index.php" style="color: #ffc107;"> <p class="fst-italic fst-4"><i class="fa-solid fa-arrow-left fst-4"></i> Go back</p></a> 
      <div class="d-lg-flex justify-content-lg-between">
          <div>
              <h1 style="font-weight: bold;" class="fs-3">  <?php echo $row['title']; ?></h1>
          </div>
          <div class="d-flex gap-4">
            <i class="fa-brands fa-facebook fs-3"></i>
            <i class="fa-brands fa-instagram fs-3"></i>
            <i class="fa-solid fa-cloud-arrow-down fs-3"></i>
          </div>
      </div>
          <p class="border-bottom border-white pb-2"><strong><i class="fa-solid fa-calendar"></i> Date Posted:</strong> <?php echo $row['date_posted']; ?></p>
      </div>


      <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="<?php echo $row['title']; ?>" style="width: 50%; height: 50%; object-fit: cover;">

      <div class="my-3">
      <p><?php echo $row['content']; ?></p>
      </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script/script.js"></script>
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
