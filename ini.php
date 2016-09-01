<?php

/** App Initializer **/

/** Load Configuration File **/
require_once(__DIR__.DIRECTORY_SEPARATOR.'etc'.DIRECTORY_SEPARATOR.'config.php');

/** Load Dependencies **/
$ds = new DirectoryIterator(__DIR__.DIRECTORY_SEPARATOR.'dep');
foreach ($ds as $dp) {
  $df = $dp->getFilename();
  if (substr($df, 0, 1) != '.') {
    require_once(__DIR__.DIRECTORY_SEPARATOR.$fn.DIRECTORY_SEPARATOR.'ini.php');
  }
}

/** Load Abstract Classes **/
require_once(__DIR__.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'.abc.php');

/** Load Library **/
$di = new DirectoryIterator(__DIR__.DIRECTORY_SEPARATOR.'lib');
foreach ($di as $it) {
  $fn = $it->getFilename();
  if (substr($fn, 0, 1) != '.') {
    require_once(__DIR__.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.$fn);
  }
}
