<?php
    $database = new PDO('sqlite:camera-lenses.db');
    $cbrand = $_GET['cbrand'];
    $clen = $_GET['clen'];
    $focal_leng = $_GET['focal_leng'];
    $lens_type = $_GET['lens_type'];
    $subject = $_GET['subject'];

    $result = $database->query("SELECT * FROM camera-lenses WHERE cbrand='{$cbrand}' OR (lens_type='{$lens_type}' OR (subject_1='{$subject}' OR subject_2='{$subject}')) ");
    $data = $result->fetchALL(PDO::FETCH_ASSOC);

?>
