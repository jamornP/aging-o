<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Comprehensive Geriatric Assessment</title>
    <link rel="icon" href="./img/favicon.ico" type="">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <style>
    @import url("https://fonts.googleapis.com/css?family=Kanit");

    body {
        font-family: "Kanit";
    }
    </style>
</head>

<body id="page-top">
    <?php 
        if(isset($_POST['submit'])){
            // if($_POST['idstudent']!=""){
            //     if($_POST['case_no']!=""){
                    // $name=$_POST['idstudent'];
                    $a1=$_POST['feed'];
                    $a2=$_POST['groom'];
                    $a3=$_POST['transfer'];
                    $a4=$_POST['toilet'];
                    $a5=$_POST['mobility'];
                    $a6=$_POST['dress'];
                    $a7=$_POST['stairs'];
                    $a8=$_POST['bath'];
                    $a9=$_POST['bowels'];
                    $a10=$_POST['bladder'];
                    // $case=$_POST['case_no'];
                    $sum = $a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10;
            //     }else{
            //         $ms='<div class="alert alert-danger" role="alert">
            //         กรุณาเลือกข้อมูลการศึกษา <a href="javascript:history.back(1)" class="alert-link"> ย้อนกลับ</a>
            //       </div>';
            //       echo $ms;
            //     }
            // }else{
            //     $ms='<div class="alert alert-danger" role="alert">
            //     รหัสนักศึกษาไม่ถูกต้อง...
            //     <a href="javascript:history.back(1)" class="alert-link"> ย้อนกลับ</a>
            //     </div>';
            //   echo $ms;
            // }
            
            // echo "คะแนนประเมินที่ได้ : ".$sum." คะแนน";
        }
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
            require('menuleft.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                require('naverbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินความสามารถในการปฏิบัติกิจวัตรพื้นฐาน(Barthel ADL
                            Index)</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <div class="card text-center border-warning" style="max-width: 18rem;">
                                <div class="card-header alert-warning">
                                    ผลคะแนนการประเมิน
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title"><?php echo $sum;?></h1>

                                </div>
                                <div class="card-footer text-muted alert-warning">

                                </div>
                            </div>
                        </div>
                        <div class="col"></div>

                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-dark" role="alert">
                                    <h4 class="alert-heading"> ผลการประเมิน
                                    </h4>
                                    <hr>
                                    <h5>
                                        <label>- ผู้สูงอายุกลุ่มที่ 1 (กลุ่มติดสังคม) พึ่งตนเองได้ ช่วยเหลือผู้อื่น
                                            ชุมชน และสังคมได้ (12 คะแนนขึ้นไป)</label><br>
                                        <label>- ผู้สูงอายุกลุ่มที่ 2 (กลุ่มติดบ้าน) ดูแลตัวเองได้บ้าง
                                            ช่วยเหลือตนเองได้บ้าง (5-11 คะแนน)</label><br>
                                        <label>- ผู้สูงอายุกลุ่มที่ 3 (กลุ่มติดเตียง) พึ่งตนเองไม่ได้
                                            ช่วยเหลือตนเองไม่ได้ พิการหรือทุพพลภาพ (0-4 คะแนน)</label><br>

                                    </h5>
                                    <hr>
                                    <label class="text-link text-danger">หมายเหตุ : </label> <label>
                                        ควรประเมินอย่างน้อยปีละ 1 ครั้ง
                                        ขึ้นอยู่กับสภาพการเปลี่ยนแปลงของผู้สูงอายุ</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <!-- <div class="col-6">
                                        <h6 class="m-0 font-weight-bold text-primary"><?php //echo "กรณีศึกษาที่ ".$case; ?></h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="m-0 font-weight-bold text-primary text-right"><?php //echo "โดย ".$name; ?></h6>
                                    </div> -->
                                </div>


                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ADL</th>
                                                <th>คะแนน</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1. Feeding (รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า)
                                                </td>
                                                <td><?php echo $a1; ?></td>
                                            </tr>
                                            <tr>
                                                <td>2. Grooming (ล้างหน้า หวีผม แปรงฟัน โกนหนวด ในระยะเวลา
                                                    24-28
                                                    ชั่วโมงที่ผ่านมา)</td>
                                                <td><?php echo $a2; ?></td>
                                            </tr>
                                            <tr>
                                                <td>3. Transfer (ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้)</td>
                                                <td><?php echo $a3; ?></td>
                                            </tr>
                                            <tr>
                                                <td>4. Toilet use (ใช้ห้องน้ำ)</td>
                                                <td><?php echo $a4; ?></td>
                                            </tr>
                                            <tr>
                                                <td>5. Mobility (การเคลื่อนไหว)</td>
                                                <td><?php echo $a5; ?></td>
                                            </tr>
                                            <tr>
                                                <td>6. Dressing (การสวมใส่เสื้อผ้า)</td>
                                                <td><?php echo $a6; ?></td>
                                            </tr>
                                            <tr>
                                                <td>7. Stairs (การขึ้นลงบันได 1 ชั้น)</td>
                                                <td><?php echo $a7; ?></td>
                                            </tr>
                                            <tr>
                                                <td>8. Bathing (การอาบน้ำ)</td>
                                                <td><?php echo $a8; ?></td>
                                            </tr>
                                            <tr>
                                                <td>9. Bowels (การกลั้นการถ่ายอุจจาระในระยะ 1
                                                    สัปดาห์ที่ผ่านมา)</td>
                                                <td><?php echo $a9; ?></td>
                                            </tr>
                                            <tr>
                                                <td>10. Bladder (การกลั้นปัสสาวะในระยะ 1 สัปดาห์ที่ผ่านมา)</td>
                                                <td><?php echo $a10; ?></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>รวมคะแนน</th>
                                                <th><?php echo $sum; ?></th>
                                            </tr>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->



                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php 
                require('footer.php');
            ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>