<?php
    // echo getcwd();
    // chdir("../");
    // echo getcwd();
    // echo '<pre>';
    // print_r(scandir("../basic"));
    // $dir = "..";
    // if(is_dir($dir)){
    //     if($dh = opendir($dir)){
    //         while($file = readdir($dh)){
    //             echo "filename: ".$file."<br/>";
    //         }
    //         closedir($dh);
    //     }
    // }
    $dir = opendir("../");
    while($file = readdir($dir)){
        echo $file."<br/>";
    }
?>