<?php
require 'function.php';
//varible untuk menampung id yang duiambil dari database
$id = $_GET["id"];

if(hapusData($id) > 0){
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href='index.php'
        </script>";
}else{
    echo "<script>
            alert('data gagal dihapus');
            document.location.href='index.php'
        </script>";
}

?>