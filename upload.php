<html>
<title>Form Upload</title>
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
<body align="center">
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
<br>
<h2>Upload Files</h2>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
<br>
Deskripsi File : <br>
<br>
<textarea name="deskripsi" rows="8" cols="40"></textarea>
<br>
<br>
<a href="index.php"><input type="button" value="<< Kembali"/></a>
<input type=submit value=Upload>
</form>
</body></center>
</html>
