<?php

$path = "../";
  
  function foldersize($path)
{
    $size = 0;
    if ($handle = @opendir($path)) {
        while (($file = readdir($handle)) !== false) {
            if (is_file($path . "/" . $file)) {
                $size += filesize($path . "/" . $file);
            }
            if (is_dir($path . "/" . $file)) {
                if ($file != "." && $file != "..") {
                    $size += foldersize($path . "/" . $file);
                }
            }
        }
    }
    return $size;
}

$mbsize = foldersize($path) / 1000000 | 0;
$disksize = $mbsize . ' ' . ' MB';
 
echo $disksize;
  
?>


