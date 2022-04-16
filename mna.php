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
                        <h1 class="h3 mb-0 text-gray-800">การคัดกรองภาวะโภชนาการในผู้สูงอายุ (Mini Nutrition Assessment : MNA)</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <form name="assessment" action="reportmna.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header"><h3></h3></div>
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
                                                    2 &nbsp; &nbsp;การรับประทานอาหารไม่เปลี่ยนแปลง
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                <!-- ######################################################################################################################### -->
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">2. ในช่วง 3 เดือนที่ผ่านมา นำ้หนักลดลงหรือไม่ </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="two1">
                                                    0 &nbsp; &nbsp;นำ้หนักลดลงมากกว่า 3 กิโลกรัม
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two2"
                                                    value="1">
                                                <label class="form-check-label" for="two2">
                                                    1 &nbsp; &nbsp; ไม่ทราบ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two3"
                                                    value="2">
                                                <label class="form-check-label" for="two3">
                                                    2 &nbsp; &nbsp;นำ้หนักลดลงระหว่าง 1-3 กิโลกรัม
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two4"
                                                    value="3">
                                                <label class="form-check-label" for="two4">
                                                    3 &nbsp; &nbsp;นำ้หนักไม่ลดลง
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                 <!-- ######################################################################################################################### -->
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">3. สามารเคลื่อนไหวได้เองหรือไม่ </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="tree1">
                                                    0 &nbsp; &nbsp;นอนบนเตียงหรือต้องอาศัยรถเข็นตลอดเวลา
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                    value="1">
                                                <label class="form-check-label" for="tree2">
                                                    1 &nbsp; &nbsp; ลุกจากเตียงหรือรถเข็นได้บ้าง แต่ไม่สามารถไปข้างนอกได้เอง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree3"
                                                    value="2">
                                                <label class="form-check-label" for="tree3">
                                                    2 &nbsp; &nbsp;เดินและเคลื่อนไหวได้ตามปกติ
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                 <!-- ######################################################################################################################### -->
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">4. ใน 3 เดือนที่ผ่านมา มีความเครียดรุนแรงหรือป่วยเฉียบพลันหรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="four1">
                                                    0 &nbsp; &nbsp;มี
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four2"
                                                    value="2">
                                                <label class="form-check-label" for="four2">
                                                    2 &nbsp; &nbsp; ไม่มี
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </h5>
                                </div>
                                 <!-- ######################################################################################################################### -->
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">5. มีปัญหาทางจิตประสาท (Neuropsychological peoblems) หรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="five1">
                                                    0 &nbsp; &nbsp;ความจำเสื่อมหรือซึมเศร้ารุนแรง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five2"
                                                    value="1">
                                                <label class="form-check-label" for="five2">
                                                    1 &nbsp; &nbsp; ความจำเสื่อมเล็กน้อย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five3"
                                                    value="2">
                                                <label class="form-check-label" for="five3">
                                                    2 &nbsp; &nbsp;ไม่มีปัญหาทางประสาท
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                 <!-- ######################################################################################################################### -->
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">6. ดัชนีมวลกาย (BMI) = นำ้หนักตัว (กก.)/[ส่วนสูง (ม.)<sup>2</sup>]>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six1"
                                                    value="0" checked>
                                                <label class="form-check-label" for="six1">
                                                    0 &nbsp; &nbsp;BMI น้อยกว่า 19 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six2"
                                                    value="1">
                                                <label class="form-check-label" for="six2">
                                                    1 &nbsp; &nbsp; ฺBMI ตั้งแต่ 19 แต่น้อยกว่า 21
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six3"
                                                    value="2">
                                                <label class="form-check-label" for="six3">
                                                    2 &nbsp; &nbsp;ฺBMI ตั้งแต่ 21 แต่น้อยกว่า 23
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six4"
                                                    value="3">
                                                <label class="form-check-label" for="six4">
                                                    3 &nbsp; &nbsp;ฺBMI ตั้งแต่ 23 ขึ้นไป
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                <h4 class="alert-heading">หากไม่สามารถหาค่าดัชนีมวลกายได้ให้เปลี่ยนคำถามข้อ 6 เป็น 7 </h4>
                                 <!-- ######################################################################################################################### -->
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">7. เส้นรอบวงน่อง (Calf circumference;CC) หน่วยเป็นเซนติเมตร</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six1"
                                                    value="0">
                                                <label class="form-check-label" for="six1">
                                                    0 &nbsp; &nbsp; CC น้อยกว่า 31
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six2"
                                                    value="3">
                                                <label class="form-check-label" for="six2">
                                                    3 &nbsp; &nbsp; CC ตั้งแต่ 31 ขึ้นไป
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
                    <br>
                    
                    <hr>
                    <p class="text-right"> ที่มา: Nestle Nutrition Institute. Mini Nutrition Assessment. https://www.mna-elderly.com/mna_forms.html</p>
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