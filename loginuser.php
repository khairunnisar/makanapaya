<?php
session_start();
include('koneksidb.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql="Select * from users where username='" . $username . "' and password='". $password ."'";
$result = mysql_query($sql, $conn);
$num=mysql_num_rows($result);

if ($num == 1) {
    header('location:user_utama.php');
} else {
  echo "<h1 align=\"center\">Maaf, username dan password belum terdaftar</h1>";
}

?>
<form action="index.php">
  <table width="100%" border="0">
    <tr>
      <td align="center" valign="middle"><input type="submit" name="kembali" id="kembali" value="Kembali ke halaman awal"></td>
    </tr>
  </table>
</form>