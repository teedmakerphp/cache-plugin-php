# A PHP Plugin for TMPHP Cache

This plugin enable caching for `PHP` files in [teedmakerphp/cache](https://github.com/teedmakerphp/cache).

#### ATTENTION!

````
This package run just a plugin for `teedmakerphp/cache`, for use it you need to install `teedmakerphp/cache`!
````

> More informations soon!

For now you can do things like...

````php
@sayMyName('Lorem')

// results after cache

<?php echo "Hello Lorem"; ?>
````

or yet...

````php
@foreach($values as $index => $value)
  <h1>Lorem ipsum</h1>
@endforeach

// results after cache

<?php foreach ($values as $index => $value) { ?>
  <h1>Lorem ipsum</h1>
<?php } ?>
````
