<?php 

include 'header.php';

if(isset($_GET['page'])) {
    
    $page = $_GET['page'];
    $filename = 'page/' . $page . '.php';
    
    if (file_exists($filename)) {
        include $filename;
    } else {
        include 'page/home.php';
    }
} else {
    include 'page/home.php';
}

 include 'footer.php'; 

?>

