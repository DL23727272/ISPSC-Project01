<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background: url('img/bg.jpg') center/cover no-repeat;">
    
    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(128, 0, 0, 0.7);"></div>

    <div class="container position-relative p-4 bg-white rounded shadow" style="max-width: 400px; z-index: 2;">
        <div class="text-center mb-3">
            <img src="img/ispsc.png" width="80" height="80" class="mb-2"/>
            <h2 style="color: #800000; font-weight: bold;">Admin Login</h2>
        </div>
        
        <form action="admin_login.php" method="POST">
            <div class="mb-3">
                <input type="email" class="form-control" name="userEmail" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="userPassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn w-100 text-white" style="background: #800000; font-weight: bold;">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

ey
bali ni admin lang makapagadd ti user nga maka login jy admin bebs?
wen babes tas ma edit nanto jay userType na dijay database

sige bebs bali sukatak ti nav links jy admin'n bebs
cge babes

