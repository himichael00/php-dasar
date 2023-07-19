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
    $picture = htmlspecialchars($data["picture"]);

    // query insert data
    $query = "INSERT INTO tokoban VALUES ('', '$label', '$size', '$tipe', '$price', '$picture')";

    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
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
    $picture = htmlspecialchars($data["picture"]);

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