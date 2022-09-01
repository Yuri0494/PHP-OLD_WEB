<?php
function getTimeForTimer ($startTimer, $endPromo) {
    $date = (date_timestamp_get(date_create($endPromo)) - date_timestamp_get(date_create($startTimer))) * 1000;
    return $date;
}

function starter ($date) {
    $date = date_timestamp_get(date_create($date)) * 1000;
    return $date;
}


print_r(starter ("29.07.2022 23:59:59"));
?>