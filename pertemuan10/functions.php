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
    $type = htmlspecialchars($data["type"]);
    $price = htmlspecialchars($data["price"]);
    $picture = htmlspecialchars($data["picture"]);

    // query insert data
    $query = "INSERT INTO tokoban VALUES ('', '$label', '$size', '$type', '$price', '$picture')";

    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}

function hapus($id) {
    global $dbconn;
    $query = "DELETE FROM tokoban WHERE id = $id";
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}
?>