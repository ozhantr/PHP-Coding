<?php
/**
 * Closures, Anonymous functions.
 */

// For Strict Type Hinting
declare(strict_types=1);

$closure = function (string $text) {
    return sprintf('Hello %s' . PHP_EOL, $text);
};

echo $closure('World!');
// Outputs --> "Hello World!"

function enclose(string $text)
{
    return function ($command) use ($text) {
        return sprintf('%s %s' . PHP_EOL, $text, $command);
    };
}

// Enclose "Hello" string in closure
$hi = enclose('Hello');

// Invoke closure with command
echo $hi('World!');
// Outputs --> "Hello World!"

$square = array_map(function ($v) {
    return $v * $v;
}, [10, 20, 30, 40]);

print_r($square);
// Outputs --> [100, 400, 900, 1600]
