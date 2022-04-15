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
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินความสามารถเชิงปฏิบัติดัชนีจุฬาเอดีแอล (Chula ADL
                            Index)</h1>

                    </div>
                    <!-- Content Row ###############################################################-->
                    <form name="assessment" action="reportchula.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading">1. walking outdoor (เดินหรือเคลื่อนที่นอกบ้าน)
                                    </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    0 &nbsp; &nbsp;เดินไม่ได้
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="1">
                                                <label class="form-check-label" for="one2">
                                                    1 &nbsp; &nbsp; ใช้รถเข็นและช่วยตัวเอง หรือต้องการคนประคอง 2 คน
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one3"
                                                    value="2">
                                                <label class="form-check-label" for="one3">
                                                    2 &nbsp; &nbsp;ต้องการคนพยุง หรือไปด้วยตลอด
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one4"
                                                    value="3">
                                                <label class="form-check-label" for="one4">
                                                    3 &nbsp; &nbsp;เดินได้เอง (รวมทั้งที่ใช้เครื่องช่วยเดิน เช่น walker)
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading"> 2. Cooking (ทำหรือเตรียมอาหาร/หุงข้าว)
                                    </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="two1">
                                                    0 &nbsp; &nbsp;ทำไม่ได้
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two2"
                                                    value="1">
                                                <label class="form-check-label" for="two2">
                                                    1 &nbsp; &nbsp; ต้องการคนช่วยในการทำ
                                                    หรือจัดเตรียมบางอย่างไว้ล่วงหน้า จึงจะทำได้
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two3"
                                                    value="2">
                                                <label class="form-check-label" for="two3">
                                                    2 &nbsp; &nbsp;ทำได้เอง
                                                </label>
                                            </div>
                                        </div>

                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading"> 3. Heavy house work (ทำความสะอาดถูบ้าน/ซักรีดเสื้อผ้า)
                                    </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="tree1">
                                                    0 &nbsp; &nbsp;ทำไม่ได้/ต้องมีคนช่วย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                    value="1">
                                                <label class="form-check-label" for="tree2">
                                                    1 &nbsp; &nbsp; ทำได้เอง
                                                </label>
                                            </div>
                                        </div>

                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading"> 4. Money exchange (ทอนเงิน/แลกเงิน)
                                    </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="four1">
                                                    0 &nbsp; &nbsp;ทำไม่ได้/ต้องมีคนช่วย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four2"
                                                    value="1">
                                                <label class="form-check-label" for="four2">
                                                    1 &nbsp; &nbsp; ทำได้เอง
                                                </label>
                                            </div>
                                        </div>

                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading"> 5. Public transport (เช่น บริการใช้รถเมล์ รถสองแถว)
                                    </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="five1">
                                                    0 &nbsp; &nbsp;ไม่สามารถทำได้
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five2"
                                                    value="1">
                                                <label class="form-check-label" for="five2">
                                                    1 &nbsp; &nbsp; ทำได้แต่ต้องมีคนช่วยดูแลไปด้วย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five3"
                                                    value="2">
                                                <label class="form-check-label" for="five3">
                                                    2 &nbsp; &nbsp; ไปมาได้เอง
                                                </label>
                                            </div>
                                        </div>

                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                                <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                            </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-dark" role="alert">
                                <h4 class="alert-heading"> หมายเหตุ
                                </h4>
                                <hr>
                                <p>
                                    <label>1. เป็นการวัดว่าผู้ป่วยทำอะไรบ้าง (ทำอยู่ได้จริง) ไม่ใช่เป็นการทดสอบหรือถามว่าสามารถทำได้หรือไม่</label><br>
                                    <label>2. โดยทั่วไปเป็นการสอบถามถึงกิจปฏิบัติในระยะ 1-2 สัปดาห์</label><br>
                                    <label>3. จุดประสงค์เป็นการวัดระดับ independence ดังนั้น ถ้าหากมีคนช่วยดูแลหรือเฝ้าระวังเวลาปฏิบัติกิจให้ถือว่าไม่ได้คะแนนเต็ม</label><br>
                                    <label>4. ถ้าหมดสติให้คะแนน 0</label><br>

</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="text-right">ที่มา : เครื่องมือพัฒนาโดย สุทธิชัย จิตะพันธ์กุล และคณะ, 2541</p>


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