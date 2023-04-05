<?php

trait reminder {
    public function rmd1() {
        echo "Don't forget to pray!";
    }
}

trait reminder2 {
    public function rmd2() {
        echo "Keep your money for weekdays :)";
    }
}

class Notes {
    use reminder;
}

class Notes2 {
    use reminder, reminder2;
}

$rem = new Notes();
$rem->rmd1();
echo "\n";

$rem2 = new Notes2();
$rem2->rmd2();