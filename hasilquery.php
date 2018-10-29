<html>
<title>Query Boolean</title>
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
<body style="background-color: white">
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
<br>
<h2>Hasil Query Boolean</h2>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
    <th> Stemming Nazief Adriani</th>
    
</tr>
<?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$servername = "localhost";
$username = "id7134782_admin";
$password = "admin";
$dbname = "id7134782_stbi";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$conn=mysqli_connect('localhost','id7134782_admin','admin','id7134782_stbi');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST['katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem,tokenstem2 FROM `dokumen` where token like '%$hasil%'";
//$sql = "SELECT distinct nama_file,token,tokenstem FROM dokumen WHERE match (token,tokenstem) against ('$hasil' IN BOOLEAN MODE);";


 // echo $sql;die();
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "    
        <tr>
        <td>".$row['nama_file']."</td>
        <td>".$row['token']."</td>
        <td>".$row['tokenstem']."</td>
        <td>".$row['tokenstem2']."</td>
        
        </tr> 
        ";
		//echo "Nama file: " . $row["nama_file"]. " - Token: " . $row["token"]. "- Stemming Porter " . $row["tokenstem"]. "- Stemming Nazief Adriani " . $row["tokenstem2"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

///

?>
</center>


<center><a href="index.php"><input type="button" value="<< Kembali"/></a>
<br>
<br>
</body></center>
</html>
