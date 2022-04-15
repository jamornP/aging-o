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
            
                    $one=$_POST['one'];
                    $two=$_POST['two'];
                    $tree=$_POST['tree'];
                    $four=$_POST['four'];
                    $five=$_POST['five'];
                    $six=$_POST['six'];
                    $seven=$_POST['seven'];
                    $eight=$_POST['eight'];
                    $nine=$_POST['nine'];
                    $ten=$_POST['ten'];
                    $one1=$_POST['one1'];
                    $two1=$_POST['two1'];
                    $tree1=$_POST['tree1'];
                    $four1=$_POST['four1'];
                    $five1=$_POST['five1'];
                    $six1=$_POST['six1'];
                    $seven1=$_POST['seven1'];
                    $eight1=$_POST['eight1'];
                    $nine1=$_POST['nine1'];
                    $ten2=$_POST['ten2'];
                    $one2=$_POST['one2'];
                    $two2=$_POST['two2'];
                    $tree2=$_POST['tree2'];
                    $four2=$_POST['four2'];
                    $five2=$_POST['five2'];
                    $six2=$_POST['six2'];
                    $seven2=$_POST['seven2'];
                    $eight2=$_POST['eight2'];
                    $nine2=$_POST['nine2'];
                    $ten3=$_POST['ten3'];
                   

                    $scor=$one+$two+$tree+$four+$five+$six+$seven+$eight+$nine+$ten+$one1+$two1+$tree1+$four1+$five1+$six1+$seven1+$eight1+$nine1+$ten2+$one2+$two2+$tree2+$four2+$five2+$six2+$seven2+$eight2+$nine2+$ten3;
                    
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
                        <h1 class="h3 mb-0 text-gray-800">แบบวัดภาวะซึมเศร้าในผู้สูงอายุไทย (Thai Geriatric Depression
                            Scale: TGDS)</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <div class="container">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <div class="card text-center border-success" style="max-width: 18rem;">
                                    <div class="card-header alert-success">
                                        ผลคะแนนการประเมิน
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title"><?php echo $scor;?></h1>

                                    </div>
                                    <div class="card-footer text-muted alert-success">

                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>

                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="alert alert-dark" role="alert">
                                    <h4 class="alert-heading"> การแปลผล
                                    </h4>
                                    <hr>

                                    <table class="table">
                                        <tbody class="text-dark">
                                            <tr>
                                                <th scope="row">0-12 คะแนน</th>
                                                <td><label class="alert-link">ผู้สูงอายุปกติ</label></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">13-18 คะแนน</th>
                                                <td>มีความรู้สึกเศร้า <label class="alert-link">เล็กน้อย</label>  (mild  depression)</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">19-24 คะแนน</th>
                                                <td>มีความรู้สึกเศร้า <label class="alert-link">ปานกลาง</label> (moderate  depression)  </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">25-30 คะแนน</th>
                                                <td>มีความรู้สึกเศร้า <label class="alert-link">รุนแรง</label> (severe  depression)</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="table-responsive shadow">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="alert-success">
                                    <tr class="text-center">
                                        <th>ในช่วงเวลา 1 สัปดาห์ที่ผ่านมา</th>
                                        <th>คะแนน</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1. คุณพอใจกับชีวิตความเป็นอยู่ตอนนี้</td>
                                        <td class="text-center"><?php echo $one;?></td>
                                    </tr>
                                    <tr>
                                        <td>2. คุณไม่อยากทำในสิ่งที่เคยสนใจหรือเคยทำเป็นประจำ</td>
                                        <td class="text-center"><?php echo $two;?></td>
                                    </tr>
                                    <tr>
                                        <td>3. คุณรู้สึกชีวิตของคุณช่วงนี้ว่างเปล่าไม่รู้จะทำอะไร</td>
                                        <td class="text-center"><?php echo $tree;?></td>
                                    </tr>
                                    <tr>
                                        <td>4. คุณรู้สึกเบื่อหน่ายบ่อย ๆ</td>
                                        <td class="text-center"><?php echo $four;?></td>
                                    </tr>
                                    <tr>
                                        <td>5. คุณหวังว่าจะมีสิ่งที่ดี เกิดขึ้นในวันหน้า</td>
                                        <td class="text-center"><?php echo $five;?></td>
                                    </tr>
                                    <tr>
                                        <td>6. คุณมีเรื่องกังวลอยู่ตลอดเวลา และเลิกคิดไม่ได้</td>
                                        <td class="text-center"><?php echo $six;?></td>
                                    </tr>
                                    <tr>
                                        <td>7. ส่วนใหญ่แล้วคุณรู้สึกอารมณ์ดี</td>
                                        <td class="text-center"><?php echo $seven;?></td>
                                    </tr>
                                    <tr>
                                        <td>8. คุณรู้สึกกลัวว่าจะมีเรื่องไม่ดีเกิดขึ้นกับคุณ</td>
                                        <td class="text-center"><?php echo $eight;?></td>
                                    </tr>
                                    <tr>
                                        <td>9. ส่วนใหญ่คุณรู้สึกมีความสุข</td>
                                        <td class="text-center"><?php echo $nine;?></td>
                                    </tr>
                                    <tr>
                                        <td>10. บ่อยครั้งที่คุณรู้สึกไม่มีที่พึ่ง</td>
                                        <td class="text-center"><?php echo $ten;?></td>
                                    </tr>
                                    <tr>
                                        <td>11. คุณรู้สึกกระวนกระวาย กระสับกระส่ายบ่อย ๆ</td>
                                        <td class="text-center"><?php echo $one1;?></td>
                                    </tr>
                                    <tr>
                                        <td>12. คุณชอบอยู่กับบ้านมากกว่าที่จะออกนอกบ้าน</td>
                                        <td class="text-center"><?php echo $two1;?></td>
                                    </tr>
                                    <tr>
                                        <td>13. บ่อยครั้งที่คุณรู้สึกวิตกกังวลเกี่ยวกับชีวิตข้างหน้า</td>
                                        <td class="text-center"><?php echo $tree1;?></td>
                                    </tr>
                                    <tr>
                                        <td>14. คุณคิดว่าความจำของคุณไม่ดีเท่าคนอื่น</td>
                                        <td class="text-center"><?php echo $four1;?></td>
                                    </tr>
                                    <tr>
                                        <td>15. การที่มีชีวิตอยู่ถึงปัจจุบันนี้ เป็นเรื่องน่ายินดีหรือไม่</td>
                                        <td class="text-center"><?php echo $five1;?></td>
                                    </tr>
                                    <tr>
                                        <td>16. คุณรู้สึกหมดกำลังใจ หรือเศร้าใจบ่อย ๆ</td>
                                        <td class="text-center"><?php echo $six1;?></td>
                                    </tr>
                                    <tr>
                                        <td>17. คุณรู้สึกว่าชีวิตคุณค่อนข้างไม่มีคุณค่า</td>
                                        <td class="text-center"><?php echo $seven1;?></td>
                                    </tr>
                                    <tr>
                                        <td>18. คุณรู้สึกกังวลมากกับชีวิตที่ผ่านมา</td>
                                        <td class="text-center"><?php echo $eight1;?></td>
                                    </tr>
                                    <tr>
                                        <td>19. คุณรู้สึกว่าชีวิตนี้ยังมีเรื่องน่าสนุกอีกมาก</td>
                                        <td class="text-center"><?php echo $nine1;?></td>
                                    </tr>
                                    <tr>
                                        <td>20. คุณรู้สึกลำบากที่จะเริ่มต้นทำอะไรใหม่ ๆ</td>
                                        <td class="text-center"><?php echo $ten2;?></td>
                                    </tr>
                                    <tr>
                                        <td>21. คุณรู้สึกกระตือรือร้น</td>
                                        <td class="text-center"><?php echo $one2;?></td>
                                    </tr>
                                    <tr>
                                        <td>22. คุณรู้สึกสิ้นหวัง</td>
                                        <td class="text-center"><?php echo $two2;?></td>
                                    </tr>
                                    <tr>
                                        <td>23. คุณคิดว่าคนอื่นดีกว่าคุณ</td>
                                        <td class="text-center"><?php echo $tree2;?></td>
                                    </tr>
                                    <tr>
                                        <td>24. คุณอารมณ์เสียง่ายกับเรื่องเล็ก ๆ น้อยๆ อยู่เสมอ</td>
                                        <td class="text-center"><?php echo $four2;?></td>
                                    </tr>
                                    <tr>
                                        <td>25. คุณรู้สึกอยากร้องไห้บ่อยๆ </td>
                                        <td class="text-center"><?php echo $five2;?></td>
                                    </tr>
                                    <tr>
                                        <td>26. คุณมีความตั้งใจในการทำสิ่งหนึ่งสิ่งใดได้ไม่นาน</td>
                                        <td class="text-center"><?php echo $six2;?></td>
                                    </tr>
                                    <tr>
                                        <td>27. คุณรู้สึกสดชื่นในเวลาตื่นนอนตอนเช้า</td>
                                        <td class="text-center"><?php echo $seven2;?></td>
                                    </tr>
                                    <tr>
                                        <td>28. คุณไม่อยากพบปะพูดคุยกับคนอื่น</td>
                                        <td class="text-center"><?php echo $eight2;?></td>
                                    </tr>
                                    <tr>
                                        <td>29. คุณตัดสินใจอะไรได้เร็ว</td>
                                        <td class="text-center"><?php echo $nine2;?></td>
                                    </tr>
                                    <tr>
                                        <td>30. คุณมีจิตใจ สบาย แจ่มใสเหมือนก่อน</td>
                                        <td class="text-center"><?php echo $ten3;?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="alert-secondary text-center">
                                        <td>รวมคะแนน</td>
                                        <td class="text-center"><?php echo $scor;?></td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                        <br>
                    </div>




                    <hr>
                    

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