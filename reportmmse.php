<?php

?>
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
                if(isset($_FILES['upload'])){
                    $name_file =  $_FILES['upload']['name'];
                    $tmp_name =  $_FILES['upload']['tmp_name'];
                    $folderPath ="pic/";
                    $fileNewName =time();
                    $sourceProperties = getimagesize($tmp_name);
                    $ext = pathinfo($name_file, PATHINFO_EXTENSION);
                    $imageType = $sourceProperties[2];
                    //print_r($_FILES['upload']);
                    //  move_uploaded_file($tmp_name,$locate_img.$name_file);
                     switch ($imageType) {

                        case IMAGETYPE_PNG:
                            $imageResourceId = imagecreatefrompng($tmp_name); 
                            $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                            imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                            break;
            
                        case IMAGETYPE_GIF:
                            $imageResourceId = imagecreatefromgif($tmp_name); 
                            $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                            imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                            break;
            
                        case IMAGETYPE_JPEG:
                            $imageResourceId = imagecreatefromjpeg($tmp_name); 
                            $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                            imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                            break;
            
                        default:
                            echo "Invalid Image type.";
                            exit;
                            break;
                    }
                }
            // 1
            if(isset($_POST['one1'])){
                $one1=$_POST['one1'];
            }else{
                $one1=0;
            }
            if(isset($_POST['one2'])){
                $one2=$_POST['one2'];
            }else{
                $one2=0;
            }
            if(isset($_POST['one3'])){
                $one3=$_POST['one3'];
            }else{
                $one3=0;
            }
            if(isset($_POST['one4'])){
                $one4=$_POST['one4'];
            }else{
                $one4=0;
            }
            if(isset($_POST['one5'])){
                $one5=$_POST['one5'];
            }else{
                $one5=0;
            } 
            $onetext1=$_POST['onetext1'];
            $onetext2=$_POST['onetext2'];
            $onetext3=$_POST['onetext3'];
            $onetext4=$_POST['onetext4'];
            $onetext5=$_POST['onetext5'];
            $one=$one1+$one2+$one3+$one4+$one5;
            // 2
            if(isset($_POST['r2'])) {
                if($_POST['r2']=="option1"){
                    $op2=1;
                    if(isset($_POST['two1'])){
                        $two1=$_POST['two1'];
                    }else{
                        $two1=0;
                    }
                    if(isset($_POST['two2'])){
                        $two2=$_POST['two2'];
                    }else{
                        $two2=0;
                    }
                    if(isset($_POST['two3'])){
                        $two3=$_POST['two3'];
                    }else{
                        $two3=0;
                    }
                    if(isset($_POST['two4'])){
                        $two4=$_POST['two4'];
                    }else{
                        $two4=0;
                    }
                    if(isset($_POST['two5'])){
                        $two5=$_POST['two5'];
                    }else{
                        $two5=0;
                    }
                }else{
                    $op2=2;
                    if(isset($_POST['two21'])){
                        $two1=$_POST['two21'];
                    }else{
                        $two1=0;
                    }
                    if(isset($_POST['two22'])){
                        $two2=$_POST['two22'];
                    }else{
                        $two2=0;
                    }
                    if(isset($_POST['two23'])){
                        $two3=$_POST['two23'];
                    }else{
                        $two3=0;
                    }
                    if(isset($_POST['two24'])){
                        $two4=$_POST['two24'];
                    }else{
                        $two4=0;
                    }
                    if(isset($_POST['two25'])){
                        $two5=$_POST['two25'];
                    }else{
                        $two5=0;
                    }
                }
            }
            $twotext1=$_POST['twotext1'];
            $twotext2=$_POST['twotext2'];
            $twotext3=$_POST['twotext3'];
            $twotext4=$_POST['twotext4'];
            $twotext5=$_POST['twotext5'];
            $two2text1=$_POST['two2text1'];
            $two2text2=$_POST['two2text2'];
            $two2text3=$_POST['two2text3'];
            $two2text4=$_POST['two2text4'];
            $two2text5=$_POST['two2text5'];
            $two=$two1+$two2+$two3+$two4+$two5;
            // 3
            if(isset($_POST['r3'])) {
                if($_POST['r3']=="option1"){
                    $op3=1;
                    if(isset($_POST['tree1'])){
                        $tree1=$_POST['tree1'];
                    }else{
                        $tree1=0;
                    }
                    if(isset($_POST['tree2'])){
                        $tree2=$_POST['tree2'];
                    }else{
                        $tree2=0;
                    }
                    if(isset($_POST['tree3'])){
                        $tree3=$_POST['tree3'];
                    }else{
                        $tree3=0;
                    }
                }else{
                    $op3=2;
                    if(isset($_POST['tree21'])){
                        $tree1=$_POST['tree21'];
                    }else{
                        $tree1=0;
                    }
                    if(isset($_POST['tree22'])){
                        $tree2=$_POST['tree22'];
                    }else{
                        $tree2=0;
                    }
                    if(isset($_POST['tree23'])){
                        $tree3=$_POST['tree23'];
                    }else{
                        $tree3=0;
                    }
                }
            }
            $treetext1=$_POST['treetext1'];
            $tree2text1=$_POST['tree2text1'];
            $tree=$tree1+$tree2+$tree3;
            // 4
            if($_POST['case']=="option1"){
                if(isset($_POST['r4'])) {
                    if($_POST['r4']=="option1"){
                        $op4=1;
                        if(isset($_POST['four1'])){
                            $four1=$_POST['four1'];
                        }else{
                            $four1=0;
                        }
                        if(isset($_POST['four2'])){
                            $four2=$_POST['four2'];
                        }else{
                            $four2=0;
                        }
                        if(isset($_POST['four3'])){
                            $four3=$_POST['four3'];
                        }else{
                            $four3=0;
                        }
                        if(isset($_POST['four4'])){
                            $four4=$_POST['four4'];
                        }else{
                            $four4=0;
                        }
                        if(isset($_POST['four5'])){
                            $four5=$_POST['four5'];
                        }else{
                            $four5=0;
                        }
                    }else{
                        $op4=2;
                        if(isset($_POST['four21'])){
                            $four1=$_POST['four21'];
                        }else{
                            $four1=0;
                        }
                        if(isset($_POST['four22'])){
                            $four2=$_POST['four22'];
                        }else{
                            $four2=0;
                        }
                        if(isset($_POST['four23'])){
                            $four3=$_POST['four23'];
                        }else{
                            $four3=0;
                        }
                        if(isset($_POST['four24'])){
                            $four4=$_POST['four24'];
                        }else{
                            $four4=0;
                        }
                        if(isset($_POST['four25'])){
                            $four5=$_POST['four25'];
                        }else{
                            $four5=0;
                        }
                    }
                }
            $fourtext1=$_POST['fourtext1'];
            $fourtext2=$_POST['fourtext2'];
            $fourtext3=$_POST['fourtext3'];
            $fourtext4=$_POST['fourtext4'];
            $fourtext5=$_POST['fourtext5'];
            $four2text1=$_POST['four2text1'];
            $four2text2=$_POST['four2text2'];
            $four2text3=$_POST['four2text3'];
            $four2text4=$_POST['four2text4'];
            $four2text5=$_POST['four2text5'];
            $four=$four1+$four2+$four3+$four4+$four5;
            }else{
                $four=0;
            }
            // 5
            if(isset($_POST['r5'])) {
                if($_POST['r5']=="option1"){
                    $op5=1;
                    if(isset($_POST['five1'])){
                        $five1=$_POST['five1'];
                    }else{
                        $five1=0;
                    }
                    if(isset($_POST['five2'])){
                        $five2=$_POST['five2'];
                    }else{
                        $five2=0;
                    }
                    if(isset($_POST['five3'])){
                        $five3=$_POST['five3'];
                    }else{
                        $five3=0;
                    }
                }else{
                    $op5=2;
                    if(isset($_POST['five21'])){
                        $five1=$_POST['five21'];
                    }else{
                        $five1=0;
                    }
                    if(isset($_POST['five22'])){
                        $five2=$_POST['five22'];
                    }else{
                        $five2=0;
                    }
                    if(isset($_POST['five23'])){
                        $five3=$_POST['five23'];
                    }else{
                        $five3=0;
                    }
                }
            }
            $five=$five1+$five2+$five3;
            $fivetext1=$_POST['fivetext1'];
            $five2text1=$_POST['five2text1'];
            // 6
            if(isset($_POST['six1'])){
                $six1=$_POST['six1'];
            }else{
                $six1=0;
            }
            if(isset($_POST['six2'])){
                $six2=$_POST['six2'];
            }else{
                $six2=0;
            } 
            $sixtext1=$_POST['sixtext1'];
            $sixtext2=$_POST['sixtext2'];
            $six=$six1+$six2;
            // 7
            if(isset($_POST['seven1'])){
                $seven1=$_POST['seven1'];
            }else{
                $seven1=0;
            }
            $seventext1=$_POST['seventext1'];
            $seven=$seven1;
            // 8
            if(isset($_POST['eight1'])){
                $eight1=$_POST['eight1'];
            }else{
                $eight1=0;
            }
            if(isset($_POST['eight2'])){
                $eight2=$_POST['eight2'];
            }else{
                $eight2=0;
            }
            if(isset($_POST['eight3'])){
                $eight3=$_POST['eight3'];
            }else{
                $eight3=0;
            }     
            $eighttext1=$_POST['eighttext1'];
            $eight=$eight1+$eight2+$eight3;
            // 9
            if(isset($_POST['case']) AND ($_POST['case']=="option1")){
            if(isset($_POST['nine1'])){
                $nine1=$_POST['nine1'];
            }else{
                $nine1=0;
            }
            
            $nine=$nine1;
        }else{
            $nine=0;
        }
        $ninetext1=$_POST['ninetext1'];
        // 10
        if(isset($_POST['case']) AND ($_POST['case']=="option1")){
            if(isset($_POST['ten1'])){
                $ten1=$_POST['ten1'];
            }else{
                $ten1=0;
            }
            $ten=$ten1;
        }else{
            $ten=0;
        }
        $tentext1=$_POST['tentext1'];
        // 11
        if(isset($_POST['one11'])){
            $one11=$_POST['one11'];
        }else{
            $one11=0;
        }
        $one11=$one11;
                   
        $aswer=$one+$two+$tree+$four+$five+$six+$seven+$eight+$nine+$ten+$one11;
                    
        }
        function imageResize($imageResourceId,$width,$height) {
            $targetWidth = $width < 300 ? $width : 300 ;
            $targetHeight = ($height/$width)* $targetWidth;
            $targetLayer = imagecreatetruecolor($targetWidth,$targetHeight);
            imagecopyresampled($targetLayer, $imageResourceId, 0, 0, 0, 0, $targetWidth, $targetHeight, $width, $height);
            return $targetLayer;
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
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินสมรรถภาพสมองเบื้องต้น ฉบับภาษาไทย (MMSE-Thai 2002) </h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col"></div> -->
                            <div class="col">
                                <div class="card text-center border-success">
                                    <div class="card-header alert-success">
                                        ผลคะแนนการประเมิน
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title"><?php echo $aswer;?></h1>

                                    </div>
                                    <div class="card-footer text-muted alert-success">

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col"></div> -->

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-dark" role="alert">
                                    <h4 class="alert-heading"> การแปลผล
                                    </h4>
                                    <hr>
                                    <img src="./img/assessment/MMSE2.jpg" alt="..." class="rounded mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                                    <td class="text-center text-info"><?php echo $onetext1;?></td>
                                    <td class="text-center text-dark"><?php echo $one1;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2 วันนี้วันอะไร
                                    </td>
                                    <td class="text-center text-info"><?php echo $onetext2;?></td>
                                    <td class="text-center text-dark"><?php echo $one2;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.3
                                        เดือนนี้เดือนอะไร</td>
                                    <td class="text-center text-info"><?php echo $onetext3;?></td>
                                    <td class="text-center text-dark"><?php echo $one3;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.4 ปีนี้ปีอะไร</td>
                                    <td class="text-center text-info"><?php echo $onetext4;?></td>
                                    <td class="text-center text-dark"><?php echo $one4;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5 ฤดูนี้ฤดูอะไร
                                    </td>
                                    <td class="text-center text-info"><?php echo $onetext5;?></td>
                                    <td class="text-center text-dark"><?php echo $one5;?></td>
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
                                <?php if($op2==1){ ?>


                                <tr>
                                    <td colspan="3"><label class="font-weight-bold">2.1 กรณีอยู่ที่สถานพยาบาล</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.1
                                        สถานที่ตรงนี้เรียกว่าอะไร และชื่อว่าอะไร</td>
                                    <td class="text-center text-info"><?php echo $twotext1;?></td>
                                    <td class="text-center text-dark"><?php echo $two1;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.2
                                        ขณะนี้ท่านอยู่ที่ชั้นที่เท่าไรของตัวอาคาร</td>
                                    <td class="text-center text-info"><?php echo $twotext2;?></td>
                                    <td class="text-center text-dark"><?php echo $two2;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.3 ที่อยู่ในอำเภอ
                                        - เขตอะไร</td>
                                    <td class="text-center text-info"><?php echo $twotext3;?></td>
                                    <td class="text-center text-dark"><?php echo $two3;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.4
                                        ที่นี่จังหวัดอะไร</td>
                                    <td class="text-center text-info"><?php echo $twotext4;?></td>
                                    <td class="text-center text-dark"><?php echo $two4;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.5 ที่นี่ภาคอะไร
                                    </td>
                                    <td class="text-center text-info"><?php echo $twotext5;?></td>
                                    <td class="text-center text-dark"><?php echo $two5;?></td>
                                </tr>
                                <?php }?>
                                <?php if($op2==2){ ?>
                                <tr class="table-Default">
                                    <td colspan="3"><label class="font-weight-bold">2.2 กรณีอยู่ที่สถานพยาบาล</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.1
                                        สถานที่ตรงนี้เรียกว่าอะไรและบ้านเลขที่อะไร</td>
                                    <td class="text-center text-info"><?php echo $two2text1;?></td>
                                    <td class="text-center text-dark"><?php echo $two1;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.2
                                        ที่นี่หมู่บ้านหรือละแวก/คุ้ม/ย่าน/ถนนอะไร </td>
                                    <td class="text-center text-info"><?php echo $two2text2;?></td>
                                    <td class="text-center text-dark"><?php echo $two2;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.3
                                        ที่นี่อำเภอเขต/อะไร</td>
                                    <td class="text-center text-info"><?php echo $two2text3;?></td>
                                    <td class="text-center text-dark"><?php echo $two3;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.4
                                        ที่นี่จังหวัดอะไร</td>
                                    <td class="text-center text-info"><?php echo $two2text4;?></td>
                                    <td class="text-center text-dark"><?php echo $two4;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.5 ที่นี่ภาคอะไร
                                    </td>
                                    <td class="text-center text-info"><?php echo $two2text5;?></td>
                                    <td class="text-center text-dark"><?php echo $two5;?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="2">3. Registraion ( 3 คะแนน )</th>
                                    
                                    <th scope="col" class="text-center">คะแนน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="1">ต่อไปนี้เป็นการทดสอบความจำ ดิฉันจำบอกชื่อของ 3 อย่าง คุณ (ตา ,
                                        ยาย....)<br>
                                        ตั้งใจฟังให้ดีนะ
                                        เพราะจะบอกเพียงครั้งเดียว ไม่มีการบอกซ้ำอีก เมือ ผม (ดิฉัน) พูดจบ ให้
                                        คุณ(ตา,ยาย....)
                                        <label class="font-weight-bold text-dark">พูดทบทวนตามที่ได้ยิน ให้ครบ ทั้ง 3
                                            ชื่อ</label> แล้วพยามจำไว้ให้ดี เดี๋ยวดิฉันจะถามซ้ำ
                                        <br>* การบอกชื่อแต่ละคำให้ห่างกันประมาณหนึ่งวินาที ต้องไม่ช้าหรือเร็วเกินไป
                                        ( ตอบถูก 1 คำได้ 1 คะแนน )
                                    </td>


                                </tr>
                                <?php if($op3==1){ ?>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree1" value="1"
                                                name="tree1" <?php if($tree1=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="tree1">ดอกไม้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree2" value="1"
                                                name="tree2" <?php if($tree2=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="tree2">แม่น้ำ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree3" value="1"
                                                name="tree3" <?php if($tree3=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="tree3">รถไฟ</label>
                                        </div>
                                    </td>
                                    <td class="text-center text-info"><?php echo $treetext1;?></td>
                                    <td class="text-center text-dark"><?php echo $tree;?></td>

                                </tr>
                                <?php }?>
                                <?php if($op3==2){ ?>
                                <tr>
                                    <th colspan="3">ในกรณีที่ทำแบบทดสอบซ้ำภายใน 2 เดือน ให้ใช้คำว่า
                                    </th>


                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree21" value="1"
                                                name="tree21" <?php if($tree1=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="tree21">ต้นไม้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree22" value="1"
                                                name="tree22" <?php if($tree2=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="tree22">ทะเล</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tree23" value="1"
                                                name="tree23" <?php if($tree3=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="tree23">รถยนต์</label>
                                        </div>
                                    </td>
                                    <td class="text-center text-info"><?php echo $tree2text1;?></td>
                                    <td class="text-center text-dark"><?php echo $tree;?></td>
                                </tr>
                                
                                <?php }?>
                            </tbody>
                        </table>

<?php if($_POST['case']=="option1"){ ?>
                        <!--  4 -->
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col">4. Attention/Calculation ( 5 คะแนน ) (ให้เลือกข้อใดข้อหนึ่ง) </th>
                                    <th scope="col" class="text-center">
                                    </th>
                                    <th scope="col" class="text-center">คะแนน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">ข้อนี้เป็นการคิดเลขในใจเพื่อทดสอบสมาธิ คุณ (ตา,ยาย....)
                                        คิดเลขในใจเป็นไหม ?
                                        ถ้าตอบคิดเป็นทำข้อ 4.1 ถ้าตอบคิดไม่เป็นหรือไม่ตอบให้ทำข้อ 4.2
                                    </td>
                                </tr>

                                <?php if($op4==1){ ?>
                                <tr>
                                    <th colspan="2">4.1 คิดเลขในใจ บันทึกคำตอบตัวเลขไว้ทุกครั้ง (ทั้งคำตอบที่ถูกและผิด)
                                        ทำทั้งหมด 5ครั้ง
                                        ถ้าลบได้ 1,2,หรือ3 แล้วตอบไม่ได้ ก็คิดคะแนนเท่าที่ทำได้ ไม่ต้องย้ายไปทำข้อ 4.2

                                    </th>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td> “ข้อนี้คิดในใจเอา 100 ตั้ง ลบออกที่ละ 7
                                        ไปเรื่อยๆ ได้ผลเท่าไรบอกมา
                                    </td>
                                    <td class="text-center text-info"><?php echo $fourtext1;?></td>
                                    <td class="text-center text-dark"><?php echo $four1;?></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center text-info"><?php echo $fourtext2;?></td>
                                    <td class="text-center text-dark"><?php echo $four2;?></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center text-info"><?php echo $fourtext3;?></td>
                                    <td class="text-center text-dark"><?php echo $four3;?></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center text-info"><?php echo $fourtext4;?></td>
                                    <td class="text-center text-dark"><?php echo $four4;?></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center text-info"><?php echo $fourtext5;?></td>
                                    <td class="text-center text-dark"><?php echo $four5;?></td>
                                </tr>
                                <?php }?>
                                <?php if($op4==2){ ?>
                                <tr>
                                    <th colspan="2">4.2 “ผม (ดิฉัน) จะสะกดคำว่า มะนาว ให้คุณ (ตา , ยาย....)
                                        ฟังแล้วให้คุณ (ตา , ยาย....) สะกดถอยหลังจากพยัญชนะตัวหลังไปตัวแรก

                                    </th>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td> คำว่ามะนาวสะกดว่า มอม้า-สระอะ-นอหนู-สระอา-วอแหวน ไหนคุณ (ตา,ยาย....)
                                        สะกอถอยหลังให้ฟังซิ
                                    </td>
                                    <td class="text-center text-info"><?php echo $four2text1;?></td>
                                    <td class="text-center text-dark"><?php echo $four1;?></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center text-info"><?php echo $four2text2;?></td>
                                    <td class="text-center text-dark"><?php echo $four2;?></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center text-info"><?php echo $four2text3;?></td>
                                    <td class="text-center text-dark"><?php echo $four3;?></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center text-info"><?php echo $four2text4;?></td>
                                    <td class="text-center text-dark"><?php echo $four4;?></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center text-info"><?php echo $four2text5;?></td>
                                    <td class="text-center text-dark"><?php echo $four5;?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <?php } ?>
                        <!-- 5 -->
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="2">5. Recall ( 3 คะแนน)</th>
                                    <th scope="col" class="text-center">คะแนน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">เมื่อสักครู่ที่ให้จำของ 3 อย่างจำได้ไหมมีอะไรบ้าง” ( ตอบถูก 1 คำได้
                                        1 คะแนน )
                                    </td>


                                </tr>
                                <?php if($op5==1){ ?>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five1" value="1"
                                                name="five1" <?php if($five1=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="five1">ดอกไม้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five2" value="1"
                                                name="five2" <?php if($five2=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="five2">แม่น้ำ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five3" value="1"
                                                name="five3" <?php if($five3=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="five3">รถไฟ</label>
                                        </div>
                                    </td>
                                    <td class="text-center text-info"><?php echo $fivetext1;?></td>
                                    <td class="text-center text-dark"><?php echo $five;?></td>

                                </tr>
                                <?php }?>
                                <?php if($op5==2){ ?>
                                <tr>
                                    <th colspan="3">ในกรณีที่ทำแบบทดสอบซ้ำภายใน 2 เดือน ให้ใช้คำว่า
                                    </th>


                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five21" value="1"
                                                name="five21" <?php if($five1=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="five21">ต้นไม้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five22" value="1"
                                                name="five22" <?php if($five2=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="five22">ทะเล</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="five23" value="1"
                                                name="five23" <?php if($five3=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="five23">รถยนต์</label>
                                        </div>
                                    </td>
                                    <td class="text-center text-info"><?php echo $five2text1;?></td>
                                    <td class="text-center text-dark"><?php echo $five;?></td>

                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="2">6. Naming ( 2 คะแนน)</th>
                                    <th scope="col" class="text-center">คะแนน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.1
                                        ยื่นดินสอให้ผู้ถูกทดสอบดูแล้วถามว่า<br>
                                        <label class="font-weight-bold text-dark">“ของสิ่งนี้เรียกว่าอะไร”</label>
                                    </td>
                                    <td class="text-center text-info"><?php echo $sixtext1;?></td>
                                    <td class="text-center text-dark"><?php echo $six1;?></td>
                                </tr>
                                <tr>
                                    <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.2
                                        ชี้นาฬิกาข้อมือให้ผู้ถูกทดสอบดูแล้วถามว่า<br>
                                        <label class="font-weight-bold text-dark">“ของสิ่งนี้เรียกว่าอะไร”</label>
                                    </td>
                                    <td class="text-center text-info"><?php echo $sixtext2;?></td>
                                    <td class="text-center text-dark"><?php echo $six2;?></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="2">7. Repetition (1 คะแนน) (พูดตามได้ถูกต้องได้ 1 คะแนน)</th>
                                    <th scope="col" class="text-center">คะแนน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตั้งใจฟังผม (ดิฉัน)
                                        เมื่อผม (ดิฉัน) พูดข้อความนี้
                                        แล้วให้คุณ (ตา,ยาย)พูดตาม ผม (ดิฉัน) จะบอกเพียงครั้งเดียว <br>
                                        <label class="font-weight-bold text-dark">“ใครใคร่ขายไก่ไข”</label>

                                    </td>
                                    <td class="text-center text-info"><?php echo $seventext1;?></td>
                                    <td class="text-center text-dark"><?php echo $seven1;?></td>
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
                                                name="eight1" <?php if($eight1=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="eight1">รับด้วยมือขวา </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="eight2" value="1"
                                                name="eight2" <?php if($eight2=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="eight2">พับครึ่ง </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="eight3" value="1"
                                                name="eight3" <?php if($eight3=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="eight3">วางไว้ที่”(พื้น,โต๊ะ,เตียง)
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-center text-info"><?php echo $eighttext1;?></td>
                                    <td class="text-center text-dark"><?php echo $eight;?></td>

                                </tr>

                                <tr>
                            </tbody>
                        </table>
                        <!-- 9 -->
                        <?php if($_POST['case']=="option1"){ ?>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="2">9. Written command (1 คะแนน)</th>
                                    <th scope="col" class="text-center">คะแนน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">ต่อไปเป็นคำสั่งที่เขียนเป็นตัวหนังสือ ต้องการให้คุณ (ตา , ยาย....)
                                        อ่าน แล้วทำตาม (ตา , ยาย....) จะอ่านออกเสียงหรืออ่านในใจ
                                        ผู้ทดสอบแสดงกระดาษที่เขียนว่า <br> <label
                                            class="font-weight-bold text-dark">“หลับตาได้”</label>
                                    </td>


                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="nine1" value="1"
                                                name="nine1" <?php if($nine1=="1"){echo "checked";} ?> disabled>
                                            <label class="form-check-label" for="nine1">หลับตา </label>
                                        </div>

                                    </td>
                                    <td class="text-center text-info"><?php echo $ninetext1;?></td>
                                    <td class="text-center text-dark"><?php echo $nine;?></td>

                                </tr>

                                <tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th colspan="2">10. Writing (1 คะแนน)</th>
                                    <th scope="col" class="text-center">คะแนน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">ข้อนี้จะเป็นคำสั่งให้<label class="font-weight-bold text-dark">“คุณ
                                            (ตา , ยาย....)
                                            เขียนข้อความอะไรก็ได้ที่อ่านแล้วรู้เรื่อง
                                            หรือมีความหมายมา 1 ประโยค”</label>
                                    </td>


                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="ten1" value="1"
                                                name="ten1" <?php if($ten1=="1"){echo "checked";} ?> disabled> 
                                            <label class="form-check-label" for="ten1">ประโยคมีความหมาย </label>
                                        </div>

                                    </td>
                                    <td class="text-center text-info"><?php echo $tentext1;?></td>
                                    <td class="text-center text-dark"><?php echo $ten;?></td>

                                </tr>

                                <tr>
                            </tbody>
                        </table>
                        <?php } ?>
                        <!-- 11 -->
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

                                    </td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <img src="./pic/<?php echo $fileNewName. "_thump.". $ext;?>" alt="..."
                                                class="img-thumbnail">
                                        </div>


                                    </td>

                                    <td class="text-center text-dark"><?php echo $one11;?></td>
                                </tr>

                                <tr>
                            </tbody>
                        </table>
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