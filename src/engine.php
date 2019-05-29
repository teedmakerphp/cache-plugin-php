<?php

$engine = new TMPHP\Cache\Engine\Engine();

/**
 * Prints a hello world
 * g: global
 */
$engine->register('/\@helloWorld/', '<?php echo "Hello World!"; ?>');

/**
 * Print a hello name
 * g: global
 * U: find more than one
 */
$engine->register("/\@sayMyName\((\"|\')(?P<a>(.*))(\"|\')\)/U", '<?php echo "Hello {a}!"; ?>');

/**
 * Provides a foreach function
 * U: find more than one
 * g: global
 * s: includes new line on dot
 */
$engine->register("/\@foreach\((?P<a>(.*))\)(?P<b>(.*))\@endforeach/Us",
'<?php foreach ({a}) { ?>
  {b}
<?php } ?>');

return $engine;
