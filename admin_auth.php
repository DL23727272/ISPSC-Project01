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


    <div class="container p-4 bg-white rounded shadow my-5" style="max-width: 400px;">
        <div class="d-flex gap-2 align-items-center mb-3">
            <img src="img/ispsc.png" width="50" height="50"/>
            <h2 style="color: #800000">Login</h2>
        </div>
        <form  method="POST">

        <div class="d-flex gap-2">
            <div class="mb-3">
                <input type="text" class="form-control" name="userFirstName" placeholder="First Name" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="userLastName" placeholder="Last Name" required>
            </div>
        </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="userEmail" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="userPassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn w-100 text-white" style="background: #800000">Login</button>
        </form>
    </div>

    <?php include 'footer.php'?>

</body>
</html>