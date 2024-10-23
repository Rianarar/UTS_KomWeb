<?php
    include 'conn.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $eml=$_POST["eml"];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO input (name, eml, msg)
                VALUES ('$name', '$eml', '$msg')";

        if ($koneksi->query($sql) === TRUE) {
            $last_id = $koneksi->insert_id;
            header("Location: question.php?id=$last_id");
            exit();
        } else {
            echo "<script>alert('Gagal menyimpan data: " . $koneksi->error . "');</script>";
        }
    }

    $koneksi->close();
?>
