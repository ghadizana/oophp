<?php

class Variadic {
    public static function foo(int $numbers) {
        var_dump(func_get_args());
    }

    public static function add(int ...$scores) {
        return array_sum($scores);
    }
}

Variadic::foo(7, 'ini', 'tetap', 'masuk');
echo PHP_EOL;
echo Variadic::add(9, 5, 6, 2);

?>