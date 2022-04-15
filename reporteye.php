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
            if(isset($_POST['one1'])){
                $one1=$_POST['one1'];
            }else{
                $one1="";
            }
            if(isset($_POST['one2'])){
                $one2=$_POST['one2'];
            }else{
                $one2="";
            }
            if(isset($_POST['two1'])){
                $two1=$_POST['two1'];
            }else{
                $two1="";
            }
            if(isset($_POST['two2'])){
                $two2=$_POST['two2'];
            }else{
                $two2="";
            }
            if(isset($_POST['tree1'])){
                $tree1=$_POST['tree1'];
            }else{
                $tree1="";
            }
            if(isset($_POST['tree2'])){
                $tree2=$_POST['tree2'];
            }else{
                $tree2="";
            }
            if(isset($_POST['four1'])){
                $four1=$_POST['four1'];
            }else{
                $four1="";
            }
            if(isset($_POST['four2'])){
                $four2=$_POST['four2'];
            }else{
                $four2="";
            }
            if(isset($_POST['five1'])){
                $five1=$_POST['five1'];
            }else{
                $five1="";
            }
            if(isset($_POST['five2'])){
                $five2=$_POST['five2'];
            }else{
                $five2="";
            }




            if($_POST['one']==1){
                $one="ใช่";
                
            }else{
                $one="";
                
            }
            if($_POST['two']==1){
                $two="ใช่";
               ;
            }else{
                $two="";
                
            }
            if($_POST['tree']==1){
                $tree="ใช่";
                
            }else{
                $tree="";
                
            }  
            if($_POST['four']==1){
                $four="ใช่";
               
            }else{
                $four="";
               
            }
            if($_POST['five']==1){
                $five="ใช่";
              ;
            }else{
                $five="";
              
            }    
                    
                    
                   
                    
                    
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
                        <h1 class="h3 mb-0 text-gray-800">ผลการคัดกรองสุขภาวะทางตา</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <hr>
                    
                        <div class="table-responsive shadow">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="alert-success">
                                    <tr class="text-center">
                                        <th>คำถาม</th>
                                        <th>คำตอบ</th>

                                        <th>ระบุตา</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1. นับนิ้วในระยะ 3 เมตรได้ถูกต้องน้อยกว่า 3 ใน 4 ครั้ง</td>
                                        <td class="text-center">
                                            <?php echo $one;?>
                                        </td>

                                        <td class="text-center">
                                            <?php echo $one1;
                                            if(($one2!="") AND ($one1!="")){
                                                echo " , ";
                                            }
                                            echo $one2;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2. อ่านหนังสือพิมพ์หน้าหนึ่งในระยะ 1 ฟุต ไม่ได้</td>
                                        <td class="text-center">
                                            <?php echo $two;?>
                                        </td>

                                        <td class="text-center">
                                            <?php echo $two1;
                                            if(($two2!="") AND ($two1!="")){
                                                echo " , ";
                                            }
                                            echo $two2;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3. ปิดตาดูทีละข้างพบว่าตามัว คล้ายมีหมอกบัง<br>
                                            <img src="./img/assessment/eye_1.jpg" class="rounded float-left" alt="...">
                                            <img src="./img/assessment/eye_2.jpg" class="rounded float-left" alt="...">
                                        </td>
                                        <td class="text-center">
                                            <?php echo $tree;?>
                                        </td>

                                        <td class="text-center">
                                            <?php echo $tree1;
                                            if(($tree2!="") AND ($tree1!="")){
                                                echo " , ";
                                            }
                                            echo $tree2;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4. ปิดตาดูทีละข้างพบว่า มองเห็นชัดแต่ตรงกลาง ไม่เห็นรอบข้าง หรือ
                                            มักเดินชนประตู สิ่งของบ่อยๆ<br>
                                            <img src="./img/assessment/eye_3.jpg" class="rounded float-left" alt="...">
                                            <img src="./img/assessment/eye_4.jpg" class="rounded float-left" alt="...">
                                        </td>
                                        <td class="text-center">
                                            <?php echo $four;?>
                                        </td>

                                        <td class="text-center">
                                            <?php echo $four1;
                                            if(($four2!="") AND ($four1!="")){
                                                echo " , ";
                                            }
                                            echo $four2;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5. ปิดตาดูทีละข้างพบว่ามองเห็นเป็นจุดดำกลางภาพ หรือ เห็นภาพบิดเบี้ยว<br>
                                            <img src="./img/assessment/eye_5.jpg" class="rounded float-left" alt="...">
                                            <img src="./img/assessment/eye_6.jpg" class="rounded float-left" alt="...">
                                        </td>
                                        <td class="text-center">
                                            <?php echo $five;?>
                                        </td>

                                        <td class="text-center">
                                            <?php echo $five1;
                                            if(($five2!="") AND ($five1!="")){
                                                echo " , ";
                                            }
                                            echo $five2;
                                            ?>
                                        </td>
                                    </tr>


                                </tbody>
                                <tfoot>

                                </tfoot>

                            </table>
                        </div>
                        


                    
                    <hr>
                    <div class="container">
                    <img src="./img/assessment/eye_7.jpg" class="img-fluid" alt="Responsive image">
                    <img src="./img/assessment/eye_8.jpg" class="img-fluid" alt="Responsive image">
                    <img src="./img/assessment/eye_9.jpg" class="img-fluid" alt="Responsive image">
                    <img src="./img/assessment/eye_10.jpg" class="img-fluid" alt="Responsive image">
                    <img src="./img/assessment/eye_11.jpg" class="img-fluid" alt="Responsive image">
                    <img src="./img/assessment/eye_12.jpg" class="img-fluid" alt="Responsive image">
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
                    <a class="btn btn-success" href="login.html">Logout</a>
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