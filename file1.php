<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show me Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cssupload.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="back3.jpg">
<br>
<div class="container">
<div class="kotak">
<h3>File 1</h3>
<br>
<h4>Data daerah Jawa Tengah</h4>
<br> 
<center>
  <table class="table table-condensed">
     <thead>
         <th >No</th>
         <th >Nama</th>
         <th >Alamat</th>
         
     </thead>
     </tbody>

  <?php
    mysql_connect("localhost","root","");
    mysql_select_db('coba');
    $qry="SELECT * FROM jawa_tengah";
    $hsl=mysql_query($qry);
    while ($data = mysql_fetch_array($hsl)) 
    {

    echo "
    <tr>
    <td>".$data['nomer']."</td>
    <td>".$data['nama']."</td>
    <td>".$data['alamat']."</td>
    </tr>
    ";
    }
   ?>
   </tbody>
  
   </table>
 </center>   
   <br>
  <a href="upload.php" class="btn btn-primary btn-xs" role="button">Back to Menu</a> 
   </div>
  </div>
  <br>