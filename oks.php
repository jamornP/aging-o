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
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินระดับความรุนแรงของโรคข้อเข่าเสื่อม (Oxford Knee Score)</h1>

                    </div>
                    <!-- Content Row ###############################################################-->
                    <form name="assessment" action="reportoks.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">1.ลักษณะอาการเจ็บปวดเข่า หรือข้อพับของท่าน</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="one1">
                                                    4 &nbsp; &nbsp;ไม่มีอาการ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one2"
                                                    value="3">
                                                <label class="form-check-label" for="one2">
                                                    3 &nbsp; &nbsp; มีอาการปวดลึกๆที่เข่าเล็กน้อย เฉพาะเวลาขยับตัวหรืออยู่ในบางท่าเท่านั้น
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one3"
                                                    value="2">
                                                <label class="form-check-label" for="one3">
                                                    2 &nbsp; &nbsp;หลังใช้งานนาน อาการปวดเข่ามากขึ้น พักแล้วดีขึ้น เป็นๆหายๆ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one4"
                                                    value="1">
                                                <label class="form-check-label" for="one4">
                                                    1 &nbsp; &nbsp; อาการปวดเข่าเพิ่มมากขึ้น ปวดนานขึ้น
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one" id="one5"
                                                    value="0">
                                                <label class="form-check-label" for="one4">
                                                    0 &nbsp; &nbsp;อยู่เฉยๆก็ปวดมาก ขยับไม่ได้
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">2. ท่านมีปัญหาเรื่องเข่าในการทำกิจวัตรประจำวัน เช่น การยืนอาบน้ำ ใส่เสื้อผ้าหรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="two1">  
                                                    4 &nbsp; &nbsp;ไม่มีปัญหา
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two2"
                                                    value="3">
                                                <label class="form-check-label" for="two2">
                                                    3 &nbsp; &nbsp; มีอาการปวดเข่า/ข้อเข่าฝืดตึงขัดเล็กน้อย แต่น้อยมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two3"
                                                    value="2">
                                                <label class="form-check-label" for="two3">
                                                    2 &nbsp; &nbsp;มีอาการปวดเข่า/ข้อเข่าฝืดตึงเล็กน้อย แต่บ่อยครั้ง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two4"
                                                    value="1">
                                                <label class="form-check-label" for="two4">
                                                    1 &nbsp; &nbsp;เริ่มมีปัญหาทำด้วยความยากลำบาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two" id="two5"
                                                    value="0">
                                                <label class="form-check-label" for="two4">
                                                    0 &nbsp; &nbsp;ไม่สามารถทำได้
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">3. ท่านมีปัญหาเรื่องเข่า เมื่อก้าวขึ้น-ลงรถ หรือรถประจำทางหรือไม่
                                        
                                    </h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="tree1">
                                                    4 &nbsp; &nbsp;ไม่อาการใดๆ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                    value="3">
                                                <label class="form-check-label" for="tree2">
                                                    3 &nbsp; &nbsp; มีอาการปวดเข่า/ข้อเข่าฝืดตึงขัดเล็กน้อย แต่น้อยมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree3"
                                                    value="2">
                                                <label class="form-check-label" for="tree3">
                                                    2 &nbsp; &nbsp;มีอาการปวดเข่า/ข้อเข่าฝืดก้าวขึ้นลงได้ช้ากว่าปกติ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree4"
                                                    value="1">
                                                <label class="form-check-label" for="tree4">
                                                    1 &nbsp; &nbsp;มีอาการปวดเข่ามาก/ข้อเข่าฝืด ก้าวขึ้นลงด้วยความยกาลำบาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tree" id="tree5"
                                                    value="0">
                                                <label class="form-check-label" for="tree4">
                                                    0 &nbsp; &nbsp;ไม่สามารถทำได้
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">4. ท่าเดินได้มากที่สุดนานเท่าไร ก่อนที่จะมีอาการปวดเข่า</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="four1">
                                                    4 &nbsp; &nbsp;เดินได้เกิน 1 ชั่วโมง โดยไม่มีอาการอะไร
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four2"
                                                    value="3">
                                                <label class="form-check-label" for="four2">
                                                    3 &nbsp; &nbsp; เดินได้ 6-60 นาที จึงเริ่มมีอาการปวด
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four3"
                                                    value="2">
                                                <label class="form-check-label" for="four3">
                                                    2 &nbsp; &nbsp;เดินได้เเพียง 5 นาที เริ่มมีอาการปวด
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four4"
                                                    value="1">
                                                <label class="form-check-label" for="four4">
                                                    1 &nbsp; &nbsp;เดินได้แค่รอบบ้านเท่านั้น เริ่มมีอาการปวด
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="four" id="four5"
                                                    value="0">
                                                <label class="form-check-label" for="four4">
                                                    0 &nbsp; &nbsp;ทำไม่ได้หรือเดินไม่ไหว
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">5. หลังทานอาหารเสร็จแล้วลุกจากที่นั่ง เข่าของท่านมีอาการอย่างไร</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="five1">
                                                    4 &nbsp; &nbsp; ไม่มีอาการ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five2"
                                                    value="3">
                                                <label class="form-check-label" for="five2">
                                                    3 &nbsp; &nbsp; มีอาการปวดเข่า/ข้อเข่าฝืดเล็กน้อย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five3"
                                                    value="2">
                                                <label class="form-check-label" for="five3">
                                                    2 &nbsp; &nbsp;มีอาการปวดเข่า ข้อเข่าฝืดปานกลาง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five4"
                                                    value="1">
                                                <label class="form-check-label" for="five4">
                                                    1 &nbsp; &nbsp;มีอาการปวดเข่ามาก/ข้อเข่าฝืด ลุกขึ้นยืนได้ด้วยความยากลำบาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="five" id="five5"
                                                    value="0">
                                                <label class="form-check-label" for="five4">
                                                    0 &nbsp; &nbsp; ปวดมากไม่สามารถลุกขึ้นได้
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">6. ท่านต้องเดินโยกตัว (เดินกระโผลก กระเผลก) เพราะอาการที่เกิดจากเข่าของท่านหรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="six1">
                                                    4 &nbsp; &nbsp;ไม่เคย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six2"
                                                    value="3">
                                                <label class="form-check-label" for="six2">
                                                    3 &nbsp; &nbsp; ในช่วง 2-3 ก้าวแรกที่ออกเดินเท่านั้น
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six3"
                                                    value="2">
                                                <label class="form-check-label" for="six3">
                                                    2 &nbsp; &nbsp;เป็นบางครั้ง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six4"
                                                    value="1">
                                                <label class="form-check-label" for="six4">
                                                    1 &nbsp; &nbsp;เป็นส่วนใหญ่
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="six" id="six5"
                                                    value="0">
                                                <label class="form-check-label" for="six4">
                                                    0 &nbsp; &nbsp; ตลอดเวลา
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">7. ท่านสามารถนั่งคุกเข่าและลุกขึ้นได้หรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="seven" id="seven1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="seven1">
                                                    4 &nbsp; &nbsp; ลุกได้ง่าย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="seven" id="seven2"
                                                    value="3">
                                                <label class="form-check-label" for="seven2">
                                                    3 &nbsp; &nbsp; ลุกได้ ลำบากเล็กน้อย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="seven" id="seven3"
                                                    value="2">
                                                <label class="form-check-label" for="seven3">
                                                    2 &nbsp; &nbsp;ลุกได้แต่ยากขึ้น
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="seven" id="seven4"
                                                    value="1">
                                                <label class="form-check-label" for="seven4">
                                                    1 &nbsp; &nbsp; ลุกได้แต่ยากลำบากมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="seven" id="seven5"
                                                    value="0">
                                                <label class="form-check-label" for="seven4">
                                                    0 &nbsp; &nbsp;ลุกไม่ไหว
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">8. ท่านมีปัญหาปวดเข่า ในขณะที่นอนกลางคืน หรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="eight" id="eight1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="eight1">
                                                    4 &nbsp; &nbsp;ไม่เคย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="eight" id="eight2"
                                                    value="3">
                                                <label class="form-check-label" for="eight2">
                                                    3 &nbsp; &nbsp; ใน 1 เดือนมี 1-2 ครั้ง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="eight" id="eight3"
                                                    value="2">
                                                <label class="form-check-label" for="eight3">
                                                    2 &nbsp; &nbsp;บางคืน 1 สัปดาห์ มี 1-3 ครั้ง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="eight" id="eight4"
                                                    value="1">
                                                <label class="form-check-label" for="eight4">
                                                    1 &nbsp; &nbsp; ส่วนมาก 1 สัปดาห์ มี 4-6 ครั้ง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="eight" id="eight5"
                                                    value="0">
                                                <label class="form-check-label" for="eight4">
                                                    0 &nbsp; &nbsp;ทุกคืน
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">9. ในขณะทำงาน  หรือทำงานบ้านท่านมีอาการปวดเข่า หรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nine" id="nine1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="nine1">
                                                    4 &nbsp; &nbsp; ไม่มี
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nine" id="nine2"
                                                    value="3">
                                                <label class="form-check-label" for="nine2">
                                                    3 &nbsp; &nbsp; น้อยมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nine" id="nine3"
                                                    value="2">
                                                <label class="form-check-label" for="nine3">
                                                    2 &nbsp; &nbsp;บางครั้ง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nine" id="nine4"
                                                    value="1">
                                                <label class="form-check-label" for="nine4">
                                                    1 &nbsp; &nbsp; ส่วนมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nine" id="nine5"
                                                    value="0">
                                                <label class="form-check-label" for="nine4">
                                                    0 &nbsp; &nbsp; ตลอดเวลา
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">10. ท่านเคยมีความรู้สึกว่าเข่าของท่านทรุดลงทันที หรือหมดแรงทันทีจนตัวทรุดลง หรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ten" id="ten1"
                                                    value="4" checked>
                                                <label class="form-check-label" for="ten1">
                                                    4 &nbsp; &nbsp;ไม่เคย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ten" id="ten2"
                                                    value="3">
                                                <label class="form-check-label" for="ten2">
                                                    3 &nbsp; &nbsp; ในช่วงแรกที่ก้าวเดินเท่านั้น
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ten" id="ten3"
                                                    value="2">
                                                <label class="form-check-label" for="ten3">
                                                    2 &nbsp; &nbsp;บางครั้ง
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ten" id="ten4"
                                                    value="1">
                                                <label class="form-check-label" for="ten4">
                                                    1 &nbsp; &nbsp; ส่วนมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ten" id="ten5"
                                                    value="0">
                                                <label class="form-check-label" for="ten4">
                                                    0 &nbsp; &nbsp; ตลอดเวลา
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">11. ท่านสามารถเดินซื้อของใช้ต่างๆได้ด้วยตัวท่านเองหรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one1" id="one11"
                                                    value="4" checked>
                                                <label class="form-check-label" for="one11">
                                                    4 &nbsp;&nbsp; ได้เป็นปกติ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one1" id="one12"
                                                    value="3">
                                                <label class="form-check-label" for="one12">
                                                    3 &nbsp; &nbsp; ไปได้ เริ่มมีอาการปวดเข่า/ตึงเข่าเล็กน้อย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one1" id="one13"
                                                    value="2">
                                                <label class="form-check-label" for="one13">
                                                    2 &nbsp; &nbsp; ไปได้ เริ่มมีอาการปวดเข่า/ตึงเข่ามากขึ้น
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one1" id="one14"
                                                    value="1">
                                                <label class="form-check-label" for="one14">
                                                    1 &nbsp; &nbsp;พอไปได้ แต่ด้วยความยากลำบาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="one1" id="one15"
                                                    value="0">
                                                <label class="form-check-label" for="one14">
                                                    0 &nbsp; &nbsp; ไปไม่ไหว
                                                </label>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <h4 class="alert-heading">12. ท่านสามารถเดินลงบันไดได้ หรือไม่</h4>
                                    <hr>
                                    <h5>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two1" id="two11"
                                                    value="4" checked>
                                                <label class="form-check-label" for="two11">
                                                    4 &nbsp; &nbsp; เดินลงได้ เป็นปกติ                                                    
                                                                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two1" id="two12"
                                                    value="3">
                                                <label class="form-check-label" for="two12">
                                                    3 &nbsp; &nbsp; เดินลงได้ เริ่มมีอาการปวดเข่า/ตึงเข่าเล็กน้อย
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two1" id="two13"
                                                    value="2">
                                                <label class="form-check-label" for="two13">
                                                    2 &nbsp; &nbsp; เดินลงได้ เริ่มมีอาการปวดเข่า/ตึงเข่ามากขึ้น
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two1" id="two14"
                                                    value="1">
                                                <label class="form-check-label" for="two14">
                                                    1 &nbsp; &nbsp;เดินลงได้ด้วยความยากลำบากมาก
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="two1" id="two15"
                                                    value="0">
                                                <label class="form-check-label" for="two14">
                                                    0 &nbsp; &nbsp; เดินลงไม่ได้
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
                    
                    <p class="text-right">ที่มา : กรมอนามัย กระทรวงสาธารณสุข </p>


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