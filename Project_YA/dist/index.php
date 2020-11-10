<?php

session_start();

if (isset($_SESSION['admin_login'])) {
    header("location: admin/admin_home.php");
}

if (isset($_SESSION['employee_login'])) {
    header("location: employee/employee_home.php");
}

if (isset($_SESSION['user_login'])) {
    header("location: user/user_home.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<br><br><br>

<body class="bg-dark">



    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <center>
                        <h1 class="mt-0">
                            <p style="color:LightGray;"> Login Page</p>
                        </h1>
                    </center>
                    <hr>

                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success">
                            <h3>
                                <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>

                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger">
                            <h3>
                                <?php
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>

                    <form action="login_db.php" method="post" class="form-horizontal my-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center my-0" style="font-size:18px;">
                                            ระบบจัดการข้อมูลผู้ป่วย โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านหนองชุมแสง
                                        </h3>
                                    </div>
                                    <!-- <div class="card-header">
                                        <h3 class="text-center font-weight-light my-2">ลงชื่อเข้าสู่ระบบ</h3>
                                    </div> -->
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <center> <label class="small mb-1" for="email" style="font-size:22px;"> Username </center> </label>
                                                <input class="form-control py-4" type="text" name="txt_username" placeholder="Enter username" required placeholder />
                                            </div>
                                            <div class="form-group">
                                                <center> <label class="small mb-1" for="password" style="font-size:22px;"> Password </center></label>
                                                <input class="form-control py-4" type="password" name="txt_password" placeholder="Enter password" required placeholder />
                                            </div>

                                            <div class="form-group">
                                                <label for="type" class="col-sm-3 control-label">Select Type</label>
                                                <div class="col-sm-12">
                                                    <select name="txt_role" class="form-control">
                                                        <option value="" selected="selected">- Select Role -</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="employee">Employee</option>
                                                        <option value="user">User</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <center>
                                                <div class="form-group">
                                                    <div class="col-sm-6 mt-3 ">
                                                        <input type="submit" name="btn_login" class="btn btn-primary" style="width: 100%;" value="Login">
                                                    </div>
                                                </div>
                                            </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </main>
        </div>
    </div>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Contact &copy; 095-176 9966 & 096-964 4321</div>
                <div>
                    <a href="https://www.facebook.com/pnwww.97/" target="_blank">Facebook: MisterGuitar </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>