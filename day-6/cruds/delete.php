<?php 

require 'function.php';

$id = $_GET['id'];

if ( deleteFruids($id) > 0 ) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Gagal menghapus data!');
        </script>
    ";
}

?>