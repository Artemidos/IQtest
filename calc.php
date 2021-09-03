<?php
$summn = 0;
$summn1 = $_REQUEST["summn1"];
$summadd = $_REQUEST["summadd"];
$daysn = 30;
$daysy = 365 * $_REQUEST["years"];
$percent = 10;
$isAdd = $_REQUEST["radio"];

if (isset($summn1)) {
    if ($isAdd) {
        $summn = ($summn1 + $summadd) * $daysn * ($percent / $daysy);
        $result =
            [
                'summn' => round($summn, 2)
            ];

    } else {
        $summn = $summn1 * $daysn * ($percent / $daysy);
        $result =
            [
                'summn' => round($summn, 2)
            ];
    }

    echo json_encode($result);
}
