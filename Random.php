
<?php
function getRandomFromArray($ar) {
mt_srand( (double)microtime() * 1000000 );
$num = array_rand($ar);
return $ar[$num];
}

function getImagesFromDir($path) {
$images = array();
if ( $img_dir = @opendir($path) ) {
while ( false !== ($img_file = readdir($img_dir)) ) {
if ( preg_match("/(\.gif|\.jpg|\.png|\.gif)$/", $img_file) ) {
$images[] = $img_file;
}
}
closedir($img_dir);
}
return $images;
}

$root = '';
$path = 'folder/img/';
$imgList = getImagesFromDir($root . $path);
$img = getRandomFromArray($imgList);
?>
<?php
$pipi = array(
  // path folder img
"data" => "https://example.com/folder/img/".$img,
"author" => "Nguyen Quoc Vinh [Vinkay]",
);
$json = json_encode($pipi);
print($json);
?>
