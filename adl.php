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
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินความสามารถในการปฏิบัติกิจวัตรพื้นฐาน(Barthel ADL
                            Index)</h1>

                    </div>
                    <form name="assessment" action="reportadl.php" method="post" enctype="multipart/form-data">
                        <!-- ข้อที่ 1 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 1. Feeding
                                        (รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า)</h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/feed_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนช่วยป้อนให้</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">

                                            <input class="form-check-input" type="radio" name="feed" id="feed1"
                                                value="0" checked>
                                            <label class="form-check-label" for="feed1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/feed_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">ตักอาหารเองได้ แต่ต้องมีคนช่วย เช่น
                                            ช่วยใช้ช้อนตักเตรียมไว้ให้ หรือตัดเป็นคำเล็กๆไว้ล่วงหน้า</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="feed" id="feed2"
                                                value="1">
                                            <label class="form-check-label" for="feed2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/feed_2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">2 คะแนน</h5>
                                        <p class="card-text">ตักอาหารและช่วยตัวเองได้ปกติ</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="feed" id="feed3"
                                                value="2">
                                            <label class="form-check-label" for="feed3">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ข้อที่ 2 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 2. Grooming (ล้างหน้า หวีผม แปรงฟัน โกนหนวด ในระยะเวลา
                                        24-28
                                        ชั่วโมงที่ผ่านมา)</h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/groom_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">ต้องการความช่วยเหลือ</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="groom" id="groom1"
                                                value="0" checked>
                                            <label class="form-check-label" for="groom1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/groom_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">ทำเองได้ (รวมทั้งที่ทำได้เองถ้าเตรียมอุปกรณ์ไว้ให้)</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="groom" id="groom2"
                                                value="1">
                                            <label class="form-check-label" for="groom2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อที่ 3 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 3. Transfer (ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้)
                                    </h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/tranfer_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">ไม่สามารถนั่งได้ (นั่งแล้วจะล้มเสมอ)
                                            หรือต้องใช้สองคนช่วยกันยกขึ้น</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="transfer" id="transfer1"
                                                value="0" checked>
                                            <label class="form-check-label" for="transfer1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/tranfer_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้ เช่น
                                            ต้องใช้คนที่แข็งแรงหรือมีทักษะ 1 คน หรือใช้คนทั่วไป 2
                                            คนพยุงหรือดันขึ้นมาจึงจะนั่งได้</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="transfer" id="transfer2"
                                                value="1">
                                            <label class="form-check-label" for="transfer2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/tranfer_2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">2 คะแนน</h5>
                                        <p class="card-text">ต้องการความช่วยเหลือบ้าง เช่น บอกให้ทำตาม
                                            หรือช่วยพยุงเล็กน้อย
                                            หรือต้องมีคนดูแลเพื่อความปลอดภัย</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="transfer" id="transfer2"
                                                value="2">
                                            <label class="form-check-label" for="transfer2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/tranfer_3.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">3 คะแนน</h5>
                                        <p class="card-text">ทำได้เอง</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="transfer" id="transfer2"
                                                value="3">
                                            <label class="form-check-label" for="transfer2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อที่ 4 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 4. Toilet use (ใช้ห้องน้ำ)</h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/toilet_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">ช่วยตัวเองไม่ได้</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="toilet" id="toilet1"
                                                value="0" checked>
                                            <label class="form-check-label" for="toilet1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/toilet_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">ทำเองได้บ้าง (อย่างน้อยทำความสะอาดตัวเองได้
                                            หลังจากเสร็จธุระ)
                                            แต่ต้องการความช่วยเหลือในบางสิ่ง</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="toilet" id="toilet2"
                                                value="1">
                                            <label class="form-check-label" for="toilet2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/toilet_2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">2 คะแนน</h5>
                                        <p class="card-text">ช่วยตัวเองได้ดี (ขึ้นนั่งและลงจากโถส้วมเองได้
                                            ทำความสะอาดได้เรียบร้อยหลังจากเสร็จธุระ ถอดใส่เสื้อผ้าได้เรียบร้อย)</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="toilet" id="toilet2"
                                                value="2">
                                            <label class="form-check-label" for="toilet2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อที่ 5 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 5. Mobility (การเคลื่อนไหว)</h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/mobility_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">เคลื่อนที่ไปไหนไม่ได้</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mobility" id="mobility1"
                                                value="0" checked>
                                            <label class="form-check-label" for="mobility1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/mobility_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง
                                            (ไม่ต้องมีคนเข็นให้)
                                            และอาจจะต้องเข้าออกมุมห้องหรือประตูได้</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mobility" id="mobility2"
                                                value="1">
                                            <label class="form-check-label" for="mobility2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/mobility_2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">2 คะแนน</h5>
                                        <p class="card-text">เดินหรือเคลื่อนที่ได้โดยมีคนช่วย เช่น พยุง หรือบอกให้ทำตาม
                                            หรือให้ความสนใจดูแลเพื่อความปลอดภัย</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mobility" id="mobility2"
                                                value="2">
                                            <label class="form-check-label" for="mobility2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/mobility_3.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">3 คะแนน</h5>
                                        <p class="card-text">เดินหรือเคลื่อนที่ได้เอง</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mobility" id="mobility3"
                                                value="3">
                                            <label class="form-check-label" for="mobility3">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อที่ 6 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 6. Dressing (การสวมใส่เสื้อผ้า)</h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/dress_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">ต้องมีคนสวมใส่ให้ ช่วยตัวเองแทบไม่ได้หรือได้น้อย</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dress" id="dress1"
                                                value="0" checked>
                                            <label class="form-check-label" for="dress1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/dress_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">ช่วยตัวเองได้ประมาณร้อยละ 50</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dress" id="dress2"
                                                value="1">
                                            <label class="form-check-label" for="dress2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/dress_2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">2 คะแนน</h5>
                                        <p class="card-text">ช่วยตัวเองได้ดี (รวมทั้งการติดกระดุม รูดซิป
                                            หรือใช้เสื้อผ้าที่ดัดแปลงให้เหมาะสมก็ได้)</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dress" id="dress2"
                                                value="2">
                                            <label class="form-check-label" for="dress2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อที่ 7 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 7. Stairs (การขึ้นลงบันได 1 ชั้น)</h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/stairs_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">ไม่สามารถทำได้</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="stairs" id="stairs1"
                                                value="0" checked>
                                            <label class="form-check-label" for="stairs1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/stairs_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">ต้องการคนช่วย</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="stairs" id="stairs2"
                                                value="1">
                                            <label class="form-check-label" for="stairs2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/stairs_2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">2 คะแนน</h5>
                                        <p class="card-text">ขึ้นลงได้เอง (ถ้าต้องใช้เครื่องช่วยเดิน เช่น Walker
                                            จะต้องเอาขึ้นลงได้ด้วย)</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="stairs" id="stairs2"
                                                value="2">
                                            <label class="form-check-label" for="stairs2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อที่ 8 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 8. Bathing (การอาบน้ำ)</h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/bath_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">ต้องมีคนช่วยหรือทำให้</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bath" id="bath1"
                                                value="0" checked>
                                            <label class="form-check-label" for="bath1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/bath_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">อาบน้ำได้เอง</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bath" id="bath2"
                                                value="1">
                                            <label class="form-check-label" for="bath2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อที่ 9 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 9. Bowels (การกลั้นการถ่ายอุจจาระในระยะ 1
                                        สัปดาห์ที่ผ่านมา)
                                    </h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/bowels_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">กลั้นไม่ได้ หรือต้องการการสวนอุจจาระอยู่เสมอ</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bowels" id="bowels1"
                                                value="0" checked>
                                            <label class="form-check-label" for="bowels1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/bowels_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่า 1 ครั้งต่อสัปดาห์)</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bowels" id="bowels2"
                                                value="1">
                                            <label class="form-check-label" for="bowels2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/bowels_2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">2 คะแนน</h5>
                                        <p class="card-text">กลั้นได้เป็นปกติ</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bowels" id="bowels2"
                                                value="2">
                                            <label class="form-check-label" for="bowels3">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อที่ 10 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"> 10. Bladder (การกลั้นปัสสาวะในระยะ 1 สัปดาห์ที่ผ่านมา)
                                    </h4>
                                    <h5></h5>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/bladder_0.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">0 คะแนน</h5>
                                        <p class="card-text">กลั้นไม่ได้ หรือใส่สายสวนปัสสาวะแต่ไม่สามารถดูแลตัวเองได้
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bladder" id="bladder1"
                                                value="0" checked>
                                            <label class="form-check-label" for="bladder1">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/bladder_1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">1 คะแนน</h5>
                                        <p class="card-text">กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่าวันละ 1 ครั้ง)</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bladder" id="bladder2"
                                                value="1">
                                            <label class="form-check-label" for="bladder2">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="img/assessment/bladder_2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">2 คะแนน</h5>
                                        <p class="card-text">กลั้นได้เป็นปกติ</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bladder" id="bladder3"
                                                value="2">
                                            <label class="form-check-label" for="bladder3">
                                                เลือกเป็นคำตอบ
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <hr>
                        <div class="row">

                            <!-- <div class="col-xl-3 col-md-4 mb-4">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    name="idstudent" placeholder="รหัสนักศึกษา">
                            </div>
                            <div class="col-xl-3 col-md-4 mb-4">
                                <select class="form-select" aria-label="Default select example" name="case_no">
                                    <option value="" selected>เลือกกรณีศึกษา </option>
                                    <option value="1">กรณีศึกษาที่ 1</option>
                                    <option value="2">กรณีศึกษาที่ 2</option>
                                    <option value="3">กรณีศึกษาที่ 3</option>
                                    <option value="4">กรณีศึกษาที่ 4</option>
                                </select>
                            </div> -->

                            <div class="col-xl-3 col-md-4 mb-4">
                                <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                            </div>
                        </div>
                    </form>
                    <!-- Content Row -->
                    <hr>
                    <div class="row">
                        <p class="text-right">ที่มา : สมุดบันทึกสุขภาพผู้สูงอายุ กรมอนามัย กระทรวงสาธารณสุข,2563</p>

                    </div>


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