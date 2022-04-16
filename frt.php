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
                        <h1 class="h3 mb-0 text-gray-800">การประเมินการได้ยิน (Finger rub test) </h1>

                    </div>

                    <!-- Content Row ###############################################################-->

                    <div class="container">
                        <div class="">
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>วิธีการ </b> ผู้ทดสอบถูนิ้วโป้งกับนิ้วชี้หน้าหูผู้ถูกทดสอบเบาๆ (ห่างจากหู - 1 นิ้ว) ทีละข้างทั้งหูขวาและหูซ้าย</h5>
                                    <img class="card-img-top" src="./img/assessment/frt-n.png" alt="Card image cap">
                                    <br>
                                    <h5><b>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;ปัญหาการได้ยินในผู้สูงอายุ  </b> อาจถือเป็นปัญหาของญาติหรือคนรอบข้างด้วยเหมือนกัน การที่ผู้สูงอายุมีความสามารถในการรับเสียงลดลงหรือพูดง่ายๆ คือ หูอื้อหรือหูตึง เนื่องจากปัญหาการได้ยินในผู้สูงอายุ เป็นภาวะที่ค่อยเป็นค่อยไป ทำให้ผู้สูงอายุมีคุณภาพชีวิตในการสื่อสารกับผู้อื่นน้อยลง โดยไม่รู้ตัวอาจเกิดปัญหาอื่นตามมาได้ เช่น การที่ต้องตะโกนสื่อสารกันเป็นเวลานาน ทำให้เสียงแหบ เจ็บคอ ไอ และระคายเคืองคอเรื้อรัง เป็นต้น</h5>
                                    <h5><b>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;ภาวะหูอื้อหรือหูตึง </b> หมายถึง ภาวะที่ความสามารถในการรับเสียงแย่ลง มีการแบ่งระดับความรุนแรงของการเสียการได้ยิน ดังนี้</h5>
                                    <br>
                                    <br>
                                    <br>
                                    <table class="table">
                                        <tr>
                                            <th>ระดับการได้ยิน</th>
                                            <th>ระดับความพิการ</th>
                                            <th>ความสามารถในการเข้าใจคำพูด</th>
                                        </tr>
                                        <tr>
                                            <td>0-25 dB</td>
                                            <td>ปกติ</td>
                                            <td>ไม่ลำบากในการรับฟังคำพูด</td>
                                        </tr>
                                        <tr>
                                            <td>26-40 dB</td>
                                            <td>หูตึงน้อย</td>
                                            <td>ไม่ได้ยินเสียงกระซิบ</td>
                                        </tr>
                                        <tr>
                                            <td>41-55 dB</td>
                                            <td>หูตึงปานกลาง</td>
                                            <td>ไม่ได้ยินเสียงพูดปกติ</td>
                                        </tr>
                                        <tr>
                                            <td>56-70 dB</td>
                                            <td>หูตึงมาก</td>
                                            <td>ไม่ได้ยินเสียงพูดที่ดังมาก</td>
                                        </tr>
                                        <tr>
                                            <td>71-90 dB</td>
                                            <td>หูตึงรุนแรง</td>
                                            <td>ได้ยินไม่ชัด แม้ต้องตะโกน</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>> 90 dB</td>
                                            <td>หูหนวก</td>
                                            <td>ตะโกน หรือใช้เครื่องช่วยขยายเสียงก็ไม่ได้ยิน</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <hr>
                    <div class="row">
                        <p class="text-right">ที่มา : คู่มือการคัดกรองและประเมินสุขภาพผู้สูงอายุ  กระทรวงสาธารณสุข พ.ศ. 2564</p>

                    </div>
                    <!-- Content Row ###############################################################-->


                </div>
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