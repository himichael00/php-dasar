<?php
// koneksi ke db
$dbconn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $dbconn;
    $result = mysqli_query($dbconn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $dbconn;
    // ambil data dari tiap elemen dalam form
    $label = htmlspecialchars($data["label"]);
    $size = htmlspecialchars($data["size"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $price = htmlspecialchars($data["price"]);
    
    // upload gambar
    $picture = upload();

    if ( !$picture ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO tokoban VALUES ('', '$label', '$size', '$tipe', '$price', '$picture')";

    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}

function upload() {
    $nameoffile = $_FILES['picture']['name'];
    $sizeoffile = $_FILES['picture']['size'];
    $error = $_FILES['picture']['error'];
    $tmpname = $_FILES['picture']['tmp_name'];

    // cek apakah tidak ada gambar yg di upload
    if ( $error === 4 ) {
        echo "<script>
                alert('choose picture first');
            </script>";
        return false;
    }

    // cek apakah yang diupload gambar
    $validpictureextension = ['jpg', 'jpeg', 'png'];
    $validpicture = explode('.', $nameoffile);
    $validpicture = strtolower(end($validpicture));
    if (!in_array($validpicture, $validpictureextension)){
        echo "<script>
                alert('file that you have uploaded is not a picture!');
            </script>";
    }

    // cek jika ukurannya terlalu besar
    if ($sizeoffile > 5000000) {
        echo "<script>
                alert('size of file is too big!');
            </script>";
    }

    // lolos pengecekan, gambar akan di upload
    // generate nama file gambar baru
    $newnamefile = uniqid();
    $newnamefile .= '.';
    $newnamefile .= $validpicture;
    move_uploaded_file($tmpname, 'img/' . $newnamefile);

    return $newnamefile;
}

function hapus($id) {
    global $dbconn;
    $query = "DELETE FROM tokoban WHERE id = $id";
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}

function ubah($data) {
    global $dbconn;
    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $label = htmlspecialchars($data["label"]);
    $size = htmlspecialchars($data["size"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $price = htmlspecialchars($data["price"]);
    $oldpicture = htmlspecialchars($data["oldpicture"]);
    
    // cek apakah user pilih gambar baru?

    if ($_FILES['picture']['error'] === 4) {
        $picture = $oldpicture;
    } else {
        $picture = upload();
    }

    // query insert data
    $query = "UPDATE tokoban SET label = '$label', size = '$size', tipe = '$tipe', price = '$price', picture = '$picture' WHERE id = $id";

    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}

function find($keyword){
    $query = "SELECT * FROM tokoban WHERE
        label LIKE '%$keyword%' OR 
        tipe LIKE '%$keyword%' OR 
        price LIKE '%$keyword%'
    ";
    return query($query);
}

?>