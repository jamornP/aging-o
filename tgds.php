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
                        <h1 class="h3 mb-0 text-gray-800">แบบวัดภาวะซึมเศร้าในผู้สูงอายุไทย (Thai Geriatric Depression
                            Scale: TGDS)</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <hr>
                    <form name="assessment" action="reporttgds.php" method="post" enctype="multipart/form-data">
                        <div class="container">
                            <div class="table-responsive shadow">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="alert-success">
                                        <tr class="text-center">
                                            <th>ในช่วงเวลา 1 สัปดาห์ที่ผ่านมา</th>
                                            <th>ใช่</th>
                                            <th>ไม่ใช่</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1. คุณพอใจกับชีวิตความเป็นอยู่ตอนนี้</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one" id="one1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one" id="one2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2. คุณไม่อยากทำในสิ่งที่เคยสนใจหรือเคยทำเป็นประจำ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two" id="two1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center"> 
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two" id="two2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3. คุณรู้สึกชีวิตของคุณช่วงนี้ว่างเปล่าไม่รู้จะทำอะไร</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4. คุณรู้สึกเบื่อหน่ายบ่อย ๆ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four" id="four1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four" id="four2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5. คุณหวังว่าจะมีสิ่งที่ดี เกิดขึ้นในวันหน้า</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five" id="five1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five" id="five2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6. คุณมีเรื่องกังวลอยู่ตลอดเวลา และเลิกคิดไม่ได้</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six" id="six1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six" id="six2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7. ส่วนใหญ่แล้วคุณรู้สึกอารมณ์ดี</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven"
                                                        id="seven1" value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven"
                                                        id="seven2" value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8. คุณรู้สึกกลัวว่าจะมีเรื่องไม่ดีเกิดขึ้นกับคุณ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight"
                                                        id="eight1" value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight"
                                                        id="eight2" value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9. ส่วนใหญ่คุณรู้สึกมีความสุข</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine" id="nine1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine" id="nine2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10. บ่อยครั้งที่คุณรู้สึกไม่มีที่พึ่ง</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten" id="ten1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten" id="ten2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11. คุณรู้สึกกระวนกระวาย กระสับกระส่ายบ่อย ๆ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one1" id="one1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one1" id="one2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12. คุณชอบอยู่กับบ้านมากกว่าที่จะออกนอกบ้าน</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two1" id="two1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two1" id="two2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13. บ่อยครั้งที่คุณรู้สึกวิตกกังวลเกี่ยวกับชีวิตข้างหน้า</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree1" id="tree1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree1" id="tree2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14. คุณคิดว่าความจำของคุณไม่ดีเท่าคนอื่น</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four1" id="four1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four1" id="four2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15. การที่มีชีวิตอยู่ถึงปัจจุบันนี้ เป็นเรื่องน่ายินดีหรือไม่</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five1" id="five1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five1" id="five2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16. คุณรู้สึกหมดกำลังใจ หรือเศร้าใจบ่อย ๆ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six1" id="six1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six1" id="six2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17. คุณรู้สึกว่าชีวิตคุณค่อนข้างไม่มีคุณค่า</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven1"
                                                        id="seven1" value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven1"
                                                        id="seven2" value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18. คุณรู้สึกกังวลมากกับชีวิตที่ผ่านมา</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight1"
                                                        id="eight1" value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight1"
                                                        id="eight2" value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>19. คุณรู้สึกว่าชีวิตนี้ยังมีเรื่องน่าสนุกอีกมาก</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine1" id="nine1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine1" id="nine2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>20. คุณรู้สึกลำบากที่จะเริ่มต้นทำอะไรใหม่ ๆ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten2" id="ten1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten2" id="ten2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21. คุณรู้สึกกระตือรือร้น</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one2" id="one1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one2" id="one2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22. คุณรู้สึกสิ้นหวัง</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two2" id="two1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two2" id="two2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23. คุณคิดว่าคนอื่นดีกว่าคุณ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree2" id="tree1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree2" id="tree2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24. คุณอารมณ์เสียง่ายกับเรื่องเล็ก ๆ น้อยๆ อยู่เสมอ</td>
                                            <td class="text-center"> 
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four2" id="four1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four2" id="four2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>25. คุณรู้สึกอยากร้องไห้บ่อยๆ </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five2" id="five1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five2" id="five2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>26. คุณมีความตั้งใจในการทำสิ่งหนึ่งสิ่งใดได้ไม่นาน</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six2" id="six1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six2" id="six2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27. คุณรู้สึกสดชื่นในเวลาตื่นนอนตอนเช้า</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven2"
                                                        id="seven1" value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven2"
                                                        id="seven2" value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28. คุณไม่อยากพบปะพูดคุยกับคนอื่น</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight2"
                                                        id="eight1" value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight2"
                                                        id="eight2" value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>29. คุณตัดสินใจอะไรได้เร็ว</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine2" id="nine1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine2" id="nine2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>30. คุณมีจิตใจ สบาย แจ่มใสเหมือนก่อน</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten3" id="ten1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten3" id="ten2"
                                                        value="1" checked>
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
                                    <button class="btn btn-primary btn-block" type="submit"
                                        name="submit">Submit</button>

                                </div>
                            </div>
                        </div>

                    </form>
                    <hr>
                    <p class="text-right">ที่มา : กลุ่มฟื้นฟูสมรรถภาพสมอง, 2537</p>

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