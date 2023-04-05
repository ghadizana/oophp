<?php

/* Switch case Hari saat ini */

$day = date("D");

switch ($day) {
    case "Mon":
        echo "Today is monday";
        break;
    case "Tue":
        echo "Today is tuesday";
        break;
    case "Wed":
        echo "Today is wednesday";
        break;
    case "Thu":
        echo "Today is thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    default:
        echo "Happy Holiday!";
        break;
}

?>