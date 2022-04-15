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
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินการได้รับการสนับสนุนจากครอบครัว (The Family APGAR Questionnaire)</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <hr>
                    <form name="assessment" action="reportapgar.php" method="post" enctype="multipart/form-data">
                        <div class="table-responsive shadow">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="alert-warning">
                                    <tr class="text-center" style="vertical-align: middle;">
                                        <th>คำถาม</th>
                                        <th>บ่อยครั้ง (2)</th>
                                        <th>เกิดขึ้นบ้าง (1)</th>
                                        <th>แทบไม่เกิด (0)</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A. การให้ความช่วยเหลือเมื่อมีปัญหา เช่น การให้คำปรึกษา การช่วยเหลือทางสุขภาพ สิ่งของ/เงิน</td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="2" checked>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one3"
                                                    value="0">
                                            </div>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>ฺP. การพูดคุยและการแก้ปัญหาร่วมกัน เช่น การให้ข้อมูลข่าวสาร การประเมินสถานการณ์สะท้อนคิด</td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two1"
                                                    value="2" checked>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two2"
                                                    value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two3"
                                                    value="0">
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>G. การยอมรับความต้องการในการทำสิ่งใหม่ๆ</td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                    value="2" checked>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                    value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree3"
                                                    value="0">
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>A. การแสดงความรักและเอาใจใส่ เช่น การให้ความรัก ความเห็นอกเห็นใจและความห่วงใย</td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four1"
                                                    value="2" checked>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four2"
                                                    value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four3"
                                                    value="0">
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>R. การใช้เวลาอยู่ร่วมกัน</td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five1"
                                                    value="2" checked>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five2"
                                                    value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five3"
                                                    value="0">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                </tfoot>

                            </table>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                            </div>
                        </div>


                    </form>
                    <hr>
                    <p class="text-right"></p>

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