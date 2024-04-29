<?php
$step = isset($_GET['step']) ? $_GET['step'] : '1';
include 'inc/lib/phpqrcode/qrlib.php';
//echo($step);
if ($step === '2') {
    if($_REQUEST['doIT']){
        $type = $_POST['type'];
        if($type=='Personal'){
            $name= 'name';
            $amount= 'amount';
            $serial = 32423423;
            $filename = 'temp/qrcodes/'.$serial.'.png';
            $size = 10;
            $margin = 1;
            $color = array('red'   => 0,'green' => 0,'blue'  => 0,);
            QRcode::png($serial, $filename, QR_ECLEVEL_L, $size, $margin, false, $color);
            echo '<h3>Please save this QR code </h3>';
            echo "<center><img src='".$filename."'></center>";
        } else {
            $num = $_POST['number'];
            $type = $_POST['type'];
            header('Location: request.php?step=2&num='.$num.'&type='.$type);
        }
    } else{
        header('Location: request.php');
    }
} elseif ($step === '3') {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $name => $value) {
        // Process each input
        echo "Input Name: " . $name . "<br>";
        echo "Input Value: " . $value . "<br><br>";
    }
}
}
?>