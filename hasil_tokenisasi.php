<title>Dokumen</title>
<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'id7134782_admin';      
  $password = 'admin';      
  $database = 'id7134782_stbi';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;
?>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
	top: 0;
	left: 0;
	width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #FF8B00;
}
</style>
<center>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="query.php">Query</a></li>
  <li><a href="awalquery.php">Query 2</a></li>
  <li><a href="upload.php">Upload</a></li>
  <li><a href="hasil_tokenisasi.php">Dokumen</a></li>
  <li><a href="hitungvektor.php">Hitung Vektor</a></li>
  <li><a href="hitungbobot.php">Hitung Bobot</a></li>
  <li><a href="download.php">Download</a></li>
</ul>
<a href="upload.php"><input type="button" value="Upload"/></a> <a href="index.php"><input type="button" value="<< Kembali"/></a>
<a href="empty.php"><input type="button" value="KOSONGKAN"/></a> 
<h2>HASIL TOKENISASI DAN STEMMING</h2>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
    <th> Stemming Nazief Adriani</th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From dokumen" ;  //menampikan SEMUA

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['dokid'];
 echo "    
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        <td>".$data['tokenstem2']."</td>
        
        </tr> 
        ";
        
}

?>

</table>
