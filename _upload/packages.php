<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'TFC2 PACK',
    'title' => 'TFC2 PACK',
    'version' => '1.0',
    'priority' => 3,
    'location' => 'tfc2-pack.json',
);

$packages[] = array(
    'name' => 'SdubzCraft 5 The Final chapter ( A End Of A Tekkit Series )',
    'title' => 'SdubzCraft 5 The Final chapter ( A End Of A Tekkit Series )',
    'version' => '1.2',
    'priority' => 2,
    'location' => 'sdubzcraft-5-the-final-chapter-a-end-of-a-tekkit-series-.json',
);

$packages[] = array(
    'name' => 'eecraft',
    'title' => 'eeCraft A Journey In The Sky',
    'version' => '1.07',
    'priority' => 1,
    'location' => 'eecraft.json',
);

$packages[] = array(
    'name' => 'Modernismo',
    'title' => 'Modernismo',
    'version' => '1.0',
    'priority' => 0,
    'location' => 'modernismo.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
