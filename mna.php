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
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินภาวะโภชนาการ Mini Nutrition Assessment (MNA)</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <form name="assessment" action="reportmmse.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header"><h3>การคัดกรองภาวะโภชนะการในผู้สูงอายุ</h3></div>
                                <div class="row">

                                </div>
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">1. ในช่วง 3 เดือนที่ผ่านมา รับประทานอาหารได้น้อยลงเนื่องจากความอยากอาหารลดลง มีปัญหาการย่อย การเคี้ยว หรือปัญหาการกลืนหรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    0 &nbsp; &nbsp;รับประทานอาหารน้อยลงอย่างมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="1">
                                                <label class="form-check-label" for="one2">
                                                    1 &nbsp; &nbsp; รับประทานอาหารน้อยลงปานกลาง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one3"
                                                    value="2">
                                                <label class="form-check-label" for="one3">
                                                    2 &nbsp; &nbsp;รับประทานอาหารไม่เปลี่ยนแปลง
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">2. </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    0 &nbsp; &nbsp;รับประทานอาหารน้อยลงอย่างมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="1">
                                                <label class="form-check-label" for="one2">
                                                    1 &nbsp; &nbsp; รับประทานอาหารน้อยลงปานกลาง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one3"
                                                    value="2">
                                                <label class="form-check-label" for="one3">
                                                    2 &nbsp; &nbsp;รับประทานอาหารไม่เปลี่ยนแปลง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one4"
                                                    value="3">
                                                <label class="form-check-label" for="one4">
                                                    3 &nbsp; &nbsp;รับประทานอาหารไม่เปลี่ยนแปลง
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">3. </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    0 &nbsp; &nbsp;รับประทานอาหารน้อยลงอย่างมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="1">
                                                <label class="form-check-label" for="one2">
                                                    1 &nbsp; &nbsp; รับประทานอาหารน้อยลงปานกลาง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one3"
                                                    value="2">
                                                <label class="form-check-label" for="one3">
                                                    2 &nbsp; &nbsp;รับประทานอาหารไม่เปลี่ยนแปลง
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">4. </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    0 &nbsp; &nbsp;รับประทานอาหารน้อยลงอย่างมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="2">
                                                <label class="form-check-label" for="one2">
                                                    2 &nbsp; &nbsp; รับประทานอาหารน้อยลงปานกลาง
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </h5>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">5. </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    0 &nbsp; &nbsp;รับประทานอาหารน้อยลงอย่างมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="1">
                                                <label class="form-check-label" for="one2">
                                                    1 &nbsp; &nbsp; รับประทานอาหารน้อยลงปานกลาง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one3"
                                                    value="2">
                                                <label class="form-check-label" for="one3">
                                                    2 &nbsp; &nbsp;รับประทานอาหารไม่เปลี่ยนแปลง
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">6. </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    0 &nbsp; &nbsp;รับประทานอาหารน้อยลงอย่างมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="1">
                                                <label class="form-check-label" for="one2">
                                                    1 &nbsp; &nbsp; รับประทานอาหารน้อยลงปานกลาง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one3"
                                                    value="2">
                                                <label class="form-check-label" for="one3">
                                                    2 &nbsp; &nbsp;รับประทานอาหารไม่เปลี่ยนแปลง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one4"
                                                    value="3">
                                                <label class="form-check-label" for="one4">
                                                    3 &nbsp; &nbsp;รับประทานอาหารไม่เปลี่ยนแปลง
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">7. </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="one1">
                                                    0 &nbsp; &nbsp;รับประทานอาหารน้อยลงอย่างมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="3">
                                                <label class="form-check-label" for="one2">
                                                    3 &nbsp; &nbsp; รับประทานอาหารน้อยลงปานกลาง
                                                </label>
                                            </div>
                                        </div>
                                       
                                    </h5>
                                </div>

                            </div>
                        </div>
                        
                        
                    </form>
                    <br>
                    
                    <hr>
                    <p class="text-right"> </p>
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