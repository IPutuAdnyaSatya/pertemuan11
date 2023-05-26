<?php
    $dta[0]["NIM"] = "2201010421";
    $dta[0]["NAMA"] = "I Putu Adnya Satya";
    $dta[0]["JKEL"] = "L";

    $dta[1]["NIM"] = "2201010123";
    $dta[1]["NAMA"] = "Ide Ayu Sriyawati";
    $dta[1]["JKEL"] = "p";

    $dta[2]["NIM"] = "2201010542";
    $dta[2]["NAMA"] = "I Putu Komeng Saputra";
    $dta[2]["JKEL"] = "L";

    $dta[3]["NIM"] = "2201010666";
    $dta[3]["NAMA"] = "Ide Ayu Syakira";
    $dta[3]["JKEL"] = "p";

    $dta[4]["NIM"] = "2201010222";
    $dta[4]["NAMA"] = "Ide Bagus Kople";
    $dta[4]["JKEL"] = "L";

    $dta[5]["NIM"] = "2201010555";
    $dta[5]["NAMA"] = "Ni Kadek puspa";
    $dta[5]["JKEL"] = "p";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);