<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload Folder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cssupload.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>

    <?php
    // koneksi ke database
    mysql_connect("localhost", "root", "");
    mysql_select_db("coba");

    $count = 0;
    require_once 'lib/excel_reader.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($_FILES['files']['name'] as $i => $name) {

        // mengosogkan tabel
        $query = "TRUNCATE TABLE ".str_replace(".xls", "", $name).";";
        mysql_query($query);

    if (strlen($_FILES['files']['name'][$i]) > 1) {
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $name)) {

            $count++; // menghitung jumlah file yang diupload

            // tambahkan baris berikut untuk mencegah error is not readable
            chmod($_FILES['files']['name'][$i], 0777);

            $data = new Spreadsheet_Excel_Reader($_FILES['files']['name'][$i], false);

            //    menghitung jumlah baris file xls
            $baris = $data->rowcount($sheet_index = 0);

            //    jika kosongkan data dicentang jalankan kode berikut
            $drop = isset($_POST["drop"]) ? $_POST["drop"] : 0;
            if ($drop == 1) {
                //  kosongkan tabel
                $truncate = "TRUNCATE TABLE ".$_FILES['files']['name'][$i].";";
                            mysql_query($truncate);
                            };

            //    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
            for ($i = 2; $i <= $baris; $i++) {
                //       membaca data (kolom ke-1 sd terakhir)
                $nomer = $data->val($i, 1);
                $nama = $data->val($i, 2);
                $alamat = $data->val($i, 3);

                //      setelah data dibaca, masukkan ke tabel sql
                $query = "INSERT into ".str_replace(".xls", "", $name)." values('$nomer','$nama','$alamat')";
                $hasil = mysql_query($query);
                    }

            if (!$hasil) {
                //          jika import gagal
                die(mysql_error());
                        } 
            else {
                //          jika impor berhasil
                echo "Data berhasil diimpor.";
                alert("Data is now available on DB!");
                        }
            }
        }
    }
}

?>
</script>
</head>
<body background="back3.jpg">
<br>
<div class="container">
<div class="col-md-12 col-sm-12">
<div class="kotak">
<h3>Uploader Directory Exel to Database</h3>
<br>
<h5>Upload your folder to your master folder</h5>
<h5>and store it on your personal database</h5>
<br>
<form method="post" enctype="multipart/form-data">
<input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="">
<br>
<a href="upload.php" class="btn btn-primary btn-xs" type="submit" value="Upload">Upload</a>
</form>
</div>
</div>
</div>
<br>

<div class="container">
<div class="col-md-12 col-sm-12">
<div class="kotak2">
<h3>Menu Database</h3>
<br>
<h5>Take a look new value of database</h5>
<br>
<table class="table table-condensed">
     <thead>
         <th >Keterangan </th>
         <th >Link</th>
     </thead>
     </tbody>
     <tr>
     <td>File 1</td>
     <td><a href="http://localhost/upload_directory/file1.php">Klik disini</a></td>
     </tr>
     <tr>
     <td>File 2</td>
     <td><a href="http://localhost/upload_directory/file2.php">Klik disini</a></td>
     </tr>
     <tr>
     <td>File 3</td>
     <td><a href="http://localhost/upload_directory/file3.php">Klik disini</a></td>
     </tr>
     <tr>
     <td>File 4</td>
     <td><a href="http://localhost/upload_directory/file4.php">Klik disini</a></td>
     </tr>
     <tr>
     <td>File 5</td>
     <td><a href="http://localhost/upload_directory/file5.php">Klik disini</a></td>
     </tr>
     </tbody>
     </table>
</div>
</div>
</div>
</body>
</html>