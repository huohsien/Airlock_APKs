
<!DOCTYPE html>
<html>
<body>
<?php
$dir          = "./Outcoder/"; //path

$files = array(); //main array

if(is_dir($dir)){
    if($dh = opendir($dir)){
        while(($file = readdir($dh)) != false){
            if($file == "." or $file == ".." or $file == ".DS_Store"){
                //...
            } else { //add file into the array
                $files[filemtime($dir.$file)] = $file;
            }
        }
    }
    closedir($dh);

     //sort
     ksort($files);

     foreach($files as $file) {
         echo "<a href= \"./Outcoder/".$file."\"><p>".$file."</p></a>";
     }

}
?>

</body>
</html>