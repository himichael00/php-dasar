<?php
require 'functions.php';

// ambil data id
$id = $_GET["id"];

if ( hapus($id) > 0) {
    echo "<script>
                alert('data succesfully delete');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "<script>
                alert('data delete failed');
                document.location.href = 'index.php';
            </script>
        ";
}
?>