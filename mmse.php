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
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินสมรรถภาพสมองเบื้องต้น ฉบับภาษาไทย (MMSE-Thai 2002)
                        </h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <hr>
                    <form name="assessment" action="reportmmse.php" method="post" enctype="multipart/form-data">
                    <div class="row shadow alert alert-warning">

                        <h4 style="    margin-top: 1rem;"><label
                                class="font-weight-bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                คำชี้แจง </label>
                            แบบสัมภาษณ์ชุดนี้มีวัตถุประสงค์เพื่อประเมินสมรรถภาพสมองของผู้สูงอายุที่มี
                            ภาวะการรู้คิดบกพร่อง (กรณีที่ผู้ทดสอบอ่านไม่ออก เขียนไม่ได้ ไม่ต้องทำข้อ 4,9 และ10)<br><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="exampleRadios1" value="option1" checked
                                    name="case">
                                <label class="form-check-label" for="exampleRadios1">
                                    ผู้ทดสอบอ่านออก เขียนได้
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="exampleRadios2" value="option2"
                                    name="case">
                                <label class="form-check-label" for="exampleRadios2">
                                    ผู้ทดสอบอ่านไม่ออก เขียนไม่ได้ ไม่ต้องทำข้อ 4,9 และ10
                                </label>
                            </div>
                        </h4>
                    </div>
                    
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col">1. Orientation for time ( 5 คะแนน )<br>(ตอบถูกข้อละ 1 คะแนน)</th>
                                    <th scope="col" class="text-center">
                                        บันทึกคำตอบไว้ทุกครั้ง<br>(ทั้งคำตอบที่ถูกและผิด)</th>
                                    <th scope="col" class="text-center">คะแนน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1
                                        วันนี้วันที่เท่าไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="onetext1">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="one1">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2 วันนี้วันอะไร
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="onetext2">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="one2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.3
                                        เดือนนี้เดือนอะไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="onetext3">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="one3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.4 ปีนี้ปีอะไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="onetext4">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="one4">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5 ฤดูนี้ฤดูอะไร
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="onetext5">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="one5">
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <tdead>
                                <tr class="table-success">
                                    <th scope="col">2. Orientation for place ( 5 คะแนน )<br>(ตอบถูกข้อละ 1 คะแนน)</th>
                                    <th scope="col" class="text-center">
                                        ให้เลือกข้อใดข้อหนึ่ง<br> (ระหว่าง 2.1 หรือ 2.2)</th>
                                    <th scope="col" class="text-center">คะแนน</th>

                                </tr>
                            </tdead>
                            <tbody>
                                <tr>
                                    <td colspan="2"><label class="font-weight-bold">2.1 กรณีอยู่ที่บ้าน</label>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="exampleRadios1"
                                                value="option1" checked name="r2">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.1
                                        สถานที่ตรงนี้เรียกว่าอะไร และชื่อว่าอะไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="twotext1">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two1">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.2
                                        ขณะนี้ท่านอยู่ที่ชั้นที่เท่าไรของตัวอาคาร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="twotext2">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.3 ที่อยู่ในอำเภอ
                                        - เขตอะไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="twotext3">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.4
                                        ที่นี่จังหวัดอะไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="twotext4">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two4">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.5 ที่นี่ภาคอะไร
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="twotext5">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two5">
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-Default">
                                    <td colspan="2"><label class="font-weight-bold">2.2 กรณีอยู่ที่สถานพยาบาล</label>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="exampleRadios1"
                                                value="option2" name="r2">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.1
                                        สถานที่ตรงนี้เรียกว่าอะไรและบ้านเลขที่อะไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="two2text1">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two21">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.2
                                        ที่นี่หมู่บ้านหรือละแวก/คุ้ม/ย่าน/ถนนอะไร </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="two2text2">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two22">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.3
                                        ที่นี่อำเภอเขต/อะไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="two2text3">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two23">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.4
                                        ที่นี่จังหวัดอะไร</td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="two2text4">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two24">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.5 ที่นี่ภาคอะไร
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="two2text5">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="two25">
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="3">3. Registraion ( 3 คะแนน )</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">ต่อไปนี้เป็นการทดสอบความจำ ดิฉันจำบอกชื่อของ 3 อย่าง คุณ (ตา ,
                                        ยาย....)
                                        ตั้งใจฟังให้ดีนะ
                                        เพราะจะบอกเพียงครั้งเดียว ไม่มีการบอกซ้ำอีก เมือ ผม (ดิฉัน) พูดจบ ให้
                                        คุณ(ตา,ยาย....)
                                        <label class="font-weight-bold text-dark">พูดทบทวนตามที่ได้ยิน ให้ครบ ทั้ง 3
                                            ชื่อ</label> แล้วพยามจำไว้ให้ดี เดี๋ยวดิฉันจะถามซ้ำ
                                        <br><label class="font-weight-bold text-dark">* การบอกชื่อแต่ละคำให้ห่างกันประมาณหนึ่งวินาที ต้องไม่ช้าหรือเร็วเกินไป
                                        ( ตอบถูก 1 คำได้ 1 คะแนน )</label>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="exampleRadios1"
                                                value="option1" checked name="r3">

                                        </div>
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree1" value="1"
                                                name="tree1">
                                            <label class="form-check-label" for="tree1">ดอกไม้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree2" value="1"
                                                name="tree2">
                                            <label class="form-check-label" for="tree2">แม่น้ำ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree3" value="1"
                                                name="tree3">
                                            <label class="form-check-label" for="tree3">รถไฟ</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="treetext1">
                                    </td>
                                    <td class="text-center">

                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2">ในกรณีที่ทำแบบทดสอบซ้ำภายใน 2 เดือน ให้ใช้คำว่า
                                    </th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="exampleRadios1"
                                                value="option2" name="r3">

                                        </div>
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree21" value="1"
                                                name="tree21">
                                            <label class="form-check-label" for="tree21">ต้นไม้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree22" value="1"
                                                name="tree22">
                                            <label class="form-check-label" for="tree22">ทะเล</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree23" value="1"
                                                name="tree23">
                                            <label class="form-check-label" for="tree23">รถยนต์</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="tree2text1">
                                    </td>
                                    <td class="text-center">

                                    </td>
                                </tr>
                                <tr>
                            </tbody>
                        </table>


                        <!--  4 -->
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col">4. Attention/Calculation ( 5 คะแนน ) (ให้เลือกข้อใดข้อหนึ่ง) </th>
                                    <th scope="col" class="text-center">
                                    </th>
                                    <th scope="col" class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">ข้อนี้เป็นการคิดเลขในใจเพื่อทดสอบสมาธิ คุณ (ตา,ยาย....)
                                        คิดเลขในใจเป็นไหม ?
                                        ถ้าตอบคิดเป็นทำข้อ 4.1 ถ้าตอบคิดไม่เป็นหรือไม่ตอบให้ทำข้อ 4.2
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2">4.1 คิดเลขในใจ บันทึกคำตอบตัวเลขไว้ทุกครั้ง (ทั้งคำตอบที่ถูกและผิด) ทำทั้งหมด 5ครั้ง
ถ้าลบได้ 1,2,หรือ3 แล้วตอบไม่ได้  ก็คิดคะแนนเท่าที่ทำได้  ไม่ต้องย้ายไปทำข้อ 4.2

                                    </th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="exampleRadios1"
                                                value="option1" checked name="r4">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> “ข้อนี้คิดในใจเอา 100 ตั้ง ลบออกที่ละ 7
                                        ไปเรื่อยๆ ได้ผลเท่าไรบอกมา
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="fourtext1">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four1">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="fourtext2">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four2">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="fourtext3">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four3">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="fourtext4">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four4">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="fourtext5">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four5">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2">4.2 “ผม (ดิฉัน) จะสะกดคำว่า มะนาว ให้คุณ (ตา , ยาย....) ฟังแล้วให้คุณ (ตา , ยาย....) สะกดถอยหลังจากพยัญชนะตัวหลังไปตัวแรก 

                                    </th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="exampleRadios1"
                                                value="option2"  name="r4">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> คำว่ามะนาวสะกดว่า มอม้า-สระอะ-นอหนู-สระอา-วอแหวน ไหนคุณ (ตา,ยาย....) สะกอถอยหลังให้ฟังซิ
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="four2text1">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four21">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="four2text2">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four22">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="four2text3">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four23">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="four2text4">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four24">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="four2text5">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="four25">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- 5 -->
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="3">5. Recall ( 3 คะแนน)</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="2">เมื่อสักครู่ที่ให้จำของ 3 อย่างจำได้ไหมมีอะไรบ้าง” ( ตอบถูก 1 คำได้
                                        1 คะแนน )
                                    </th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="exampleRadios1"
                                                value="option1" checked name="r5">

                                        </div>
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five1" value="1"
                                                name="five1">
                                            <label class="form-check-label" for="five1">ดอกไม้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five2" value="1"
                                                name="five2">
                                            <label class="form-check-label" for="five2">แม่น้ำ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five3" value="1"
                                                name="five3">
                                            <label class="form-check-label" for="five3">รถไฟ</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="fivetext1">
                                    </td>
                                    <td class="text-center">

                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2">ในกรณีที่ทำแบบทดสอบซ้ำภายใน 2 เดือน ให้ใช้คำว่า
                                    </th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="exampleRadios1"
                                                value="option2" name="r5">

                                        </div>
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five21" value="1"
                                                name="five21">
                                            <label class="form-check-label" for="five21">ต้นไม้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five22" value="1"
                                                name="five22">
                                            <label class="form-check-label" for="five22">ทะเล</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five23" value="1"
                                                name="five23">
                                            <label class="form-check-label" for="five23">รถยนต์</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="five2text1">
                                    </td>
                                    <td class="text-center">

                                    </td>
                                </tr>
                                <tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="3">6. Naming ( 2 คะแนน)</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.1
                                        ยื่นดินสอให้ผู้ถูกทดสอบดูแล้วถามว่า<br>
                                        <label class="font-weight-bold text-dark">“ของสิ่งนี้เรียกว่าอะไร”</label>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="sixtext1">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="six1">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.2
                                        ชี้นาฬิกาข้อมือให้ผู้ถูกทดสอบดูแล้วถามว่า<br>
                                        <label class="font-weight-bold text-dark">“ของสิ่งนี้เรียกว่าอะไร”</label>

                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="sixtext2">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="six2">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="3">7. Repetition (1 คะแนน) (พูดตามได้ถูกต้องได้ 1 คะแนน)</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตั้งใจฟังผม (ดิฉัน)
                                        เมื่อผม (ดิฉัน) พูดข้อความนี้
                                        แล้วให้คุณ (ตา,ยาย)พูดตาม ผม (ดิฉัน) จะบอกเพียงครั้งเดียว <br>
                                        <label class="font-weight-bold text-dark">“ใครใคร่ขายไก่ไข่”</label>

                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="seventext1">
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="1" name="seven1">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="3">8. Verbal command ( 3 คะแนน)</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">ข้อนี้ฟังคำสั่ง “ฟังดีๆ นะเดี๋ยวผม (ดิฉัน)จะส่งกระดาษให้คุณ
                                        แล้วให้คุณ (ตา , ยาย....)
                                        <label class="font-weight-bold text-dark">รับด้วยมือขวา พับครึ่งกระดาษ
                                            แล้ววางไว้ที่...........”(พื้น,โต๊ะ,เตียง)</label>
                                        ผู้ทดสอบแสดงกระดาษเปล่าขนาดประมาณ เอ-4 ไม่มีรอยผับ ให้ผู้ถูกทดสอบ

                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="eight1" value="1"
                                                name="eight1">
                                            <label class="form-check-label" for="eight1">รับด้วยมือขวา </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="eight2" value="1"
                                                name="eight2">
                                            <label class="form-check-label" for="eight2">พับครึ่ง </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="eight3" value="1"
                                                name="eight3">
                                            <label class="form-check-label" for="eight3">วางไว้ที่”(พื้น,โต๊ะ,เตียง)
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="eighttext1">
                                    </td>
                                    <td class="text-center">

                                    </td>
                                </tr>

                                <tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="3">9. Written command (1 คะแนน)</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">ต่อไปเป็นคำสั่งที่เขียนเป็นตัวหนังสือ ต้องการให้คุณ (ตา , ยาย....)
                                        อ่าน แล้วทำตาม (ตา , ยาย....) จะอ่านออกเสียงหรืออ่านในใจ
                                        ผู้ทดสอบแสดงกระดาษที่เขียนว่า <br> <label
                                            class="font-weight-bold text-dark">“หลับตา”</label>
                                    </td>


                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="nine1" value="1"
                                                name="nine1">
                                            <label class="form-check-label" for="nine1">หลับตา </label>
                                        </div>

                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="ninetext1">
                                    </td>
                                    <td class="text-center">

                                    </td>
                                </tr>

                                <tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="3">10. Writing (1 คะแนน)</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">ข้อนี้จะเป็นคำสั่งให้<label
                                            class="font-weight-bold text-dark">“คุณ (ตา ,
                                            ยาย....)
                                            เขียนข้อความอะไรก็ได้ที่อ่านแล้วรู้เรื่อง
                                            หรือมีความหมายมา 1 ประโยค”</label>
                                    </td>


                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="ten1" value="1"
                                                name="ten1">
                                            <label class="form-check-label" for="ten1">ประโยคมีความหมาย </label>
                                        </div>

                                    </td>
                                    <td class="text-center">
                                        <input class="form-control form-control-sm text-center" type="text"
                                            name="tentext1">
                                    </td>
                                    <td class="text-center">

                                    </td>
                                </tr>

                                <tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="2">11. Visuoconstruction (1 คะแนน)</th>

                                    <th class="text-center">คะแนน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3"> ข้อนี้เป็นคำสั่ง <label class="font-weight-bold text-dark">
                                            “จงวาดภาพให้เหมือนภาพตัวอย่าง”</label>
                                        (ในช่องว่างด้านขวาของภาพตัวอย่าง)
                                    </td>
                                    <!-- <td></td> -->
                                    <!-- <td></td> -->

                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <img src="./img/assessment/MMSE.jpg" alt="..." class="rounded float-left">
                                        </div>
                                        <div id="imgControl" class="col-3">
                                            <img id="imgUpload" class="img-thumbnail">
                                            <input type="file" id="file" name="upload" onchange="readURL(this)"
                                                accept="image/*" required>
                                        </div>
                                    </td>
                                    <td class="text-center">



                                    </td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="one11" value="1"
                                                name="one11">

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                            </tbody>
                        </table>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                        </div>
                    </form>
                    <hr>
                    <p class="text-right">ที่มา : คณะกรรมการจัดทำแบทดสอบสมรรถภาพสมองเบื้องต้น ฉบับภาษาไทย พ.ศ.2542 <br>
                        สถาบันเวชศาสตร์ผู้สูงอายุ กรมการแพทย์ กระทรวงสาธารณสุข </p>


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

    <!-- show pic -->
    <script>
    function readURL(input) {
        if (input.files[0]) {
            let reader = new FileReader();
            document.querySelector('#imgControl').classList.replace("d-none", "d-block");
            reader.onload = function(e) {
                let element = document.querySelector('#imgUpload');
                element.setAttribute("src", e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

</body>

</html>