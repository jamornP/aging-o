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
                        <h1 class="h3 mb-0 text-gray-800">การประเมินปัญหาการนอน</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <form name="assessment" action="reportsleep.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">1. ท่านมีปัญหาการนอนหลับหรือไม่
                                    </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    &nbsp; &nbsp; ไม่มี
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="1">
                                                <label class="form-check-label" for="one2">
                                                    &nbsp; &nbsp; มีปัญหา
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-9">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1"
                                                        name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label"
                                                        for="customRadioInline1">นอนไม่หลับ</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2"
                                                        name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label"
                                                        for="customRadioInline2">นอนมากไป</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline3"
                                                        name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label"
                                                        for="customRadioInline3">นอนกรน</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline4"
                                                        name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label"
                                                        for="customRadioInline4">นอนละเมอ</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-9">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline5"
                                                        name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline5">อื่นๆ
                                                        ระบุ</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-9">
                                                <div class="form-group row">
                                                    <label for="one1_2" class="col-sm col-form-label">&nbsp;
                                                        &nbsp;&nbsp; ระยะเวลาที่มีปัญหาการนอนหลับ</label>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" id="one1_2" size="10">
                                                    </div>
                                                    <label for="one1_2" class="col-sm-1 col-form-label"> ปี</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" id="one1_2" size="10">
                                                    </div>
                                                    <label for="one1_2" class="col-sm-1 col-form-label"> เดือน</label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-9">
                                                <div class="form-group row">
                                                    <label for="one1_3" class="col-sm col-form-label">&nbsp;
                                                        &nbsp;&nbsp; โดยเฉลี่ยท่านหลับได้คืนละ</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="one1_3" size="10">
                                                    </div>
                                                    <label for="one1_3" class="col-sm-1 col-form-label"> ชั่วโมง</label>

                                                </div>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">2. ท่านมีอาการง่วง อ่อนเพลีย ตอนกลางวันหรือไม่
                                    </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="two1">
                                                    &nbsp; &nbsp; ไม่มี
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two2"
                                                    value="1">
                                                <label class="form-check-label" for="two2">
                                                    &nbsp; &nbsp; มีปัญหา
                                                </label>
                                            </div>
                                        </div>

                                    </h5>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                            </div>
                        </div>
                    </form>



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