<?php
header('Content-Type: text/cache-manifest');
$filesToCache = array(
    './index.html',
    'https://unpkg.com/vue/dist/vue.js'
);
?>
CACHE MANIFEST

CACHE:
<?php
$hashes = '';
foreach($filesToCache as $file) {
    echo $file."\n";
    $hashes.=md5_file($file);
};
?>

NETWORK:
*

# Hash Version: <?=md5($hashes)?>
