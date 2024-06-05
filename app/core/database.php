<?php
$koneksi;

function connectDB()
{
    global $koneksi;

    $koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    return $koneksi;
}

function query($query)
{
    global $koneksi;

    return mysqli_query($koneksi, $query);
}

function fetchAll($object)
{
    return mysqli_fetch_all($object);
}
