<?php

include('koneksidb.php');
ob_start ();
session_start();

$usernameadmin = $_POST['usernameadmin'];
$passwordadmin = $_POST['passwordadmin'];

$sql="Select * from administrator where usernameadmin='" . $usernameadmin . "' and passwordadmin='". $passwordadmin ."'";
$result = mysql_query($sql, $conn);
$num=mysql_num_rows($result);

if ($num == 1) {
    header('location:admin_beranda.php');
} else {
  echo "<h1 align=\"center\">Maaf, Username dan password yang anda masukkan salah!</h1>";
}

?>
<form action="admin.php">
  <table width="100%" border="0">
    <tr>
      <td align="center" valign="middle"><input type="submit" name="kembali" id="kembali" value="Kembali ke halaman awal"></td>
    </tr>
  </table>
</form>