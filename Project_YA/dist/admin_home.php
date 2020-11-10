<?php
session_start();

if (!isset($_SESSION['admin_login'])) {
    header("location: ../index.php");
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

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">YA Project </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a href="logout.php" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admin_home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            สร้างรายการ
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    ระบบผู้ใช้งาน
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">

                                        <a class="nav-link" href="registe">เพิ่มข้อมูลผู้ใช้งานใหม่</a>
                                        <a class="nav-link" href="registe">แก้ไขข้อมูลผู้ใช้งาน</a>
                                        <a class="nav-link" href="registe">ลบข้อมูลผู้ใช้งาน</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth2" aria-expanded="false" aria-controls="pagesCollapseAuth2">
                                ระบบยา
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">

                                        <a class="nav-link" href="registe">เพิ่มประเภทยา</a>
                                        <a class="nav-link" href="registe">เพิ่มการรับยา</a>
                                        <a class="nav-link" href="registe">แก้ไขข้อมูลยา</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages1">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth1" aria-expanded="false" aria-controls="pagesCollapseAuth1">
                                รายการ
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages1">
                                <nav class="sb-sidenav-menu-nested nav">

                                    <a class="nav-link" href="register.html">ข้อมูลการจ่ายยา</a>
                                    <a class="nav-link" href="register.html">ข้อมูลการเบิกยา</a>

                                </nav>
                            </div>
                        </nav>

                        <!-- <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a> -->
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
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

                    <h1 class="mt-4">Dashboard  <?php if (isset($_SESSION['admin_login'])) { ?>
                    <?php echo $_SESSION['admin_login'];
                                } ?></h1>



                   

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="index.html">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active"><a href="index.html">ข้อมูลผู้ป่วย</a></li>
                        <li class="breadcrumb-item active"><a href="index.html">ประวัติการรักษา</a></li>
                        <li class="breadcrumb-item active"><a href="index.html">ภาวะการเจ็บป่วย</a></li>

                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body"> จำนวนประเภทยาที่มี </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">จำนวนยาที่ใกล้หมดสต็อก</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">จำนวนยาที่หมดสต็อก</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">จำนวนยาที่งดเบิก</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i> ตารางข้อมูลผู้ป่วย
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รหัสผู้ป่วย</th>
                                            <th>ชื่อ-สกุล</th>
                                            <th>วัน/เดือน/ปีเกิด</th>
                                            <th>อายุ</th>
                                            <th>กรุ๊ปเลือด</th>
                                            <th>ที่อยู่</th>
                                            <th>โรคประจำตัว</th>
                                            <th>แพ้ยา</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>p001</td>
                                            <td>นายหนึ่ง หนึ่งหนึ่ง</td>
                                            <td>1/มกราคม/2501</td>
                                            <td>62</td>
                                            <td>O</td>
                                            <td>บางละมุง</td>
                                            <td>โรคขี้เหงา</td>
                                            <td>แพ้ยาน้ำ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>