<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>makanapaya.com</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

</head>
body {
	color: #3333FF;
	margin-top: 0px;
	padding-top: px;
	width: 100px;
	height: 960px;
}
#header {
	width: 1320px;
	height: 140px;
	margin-top: 10px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 10px;
	padding-top: 5px;
	padding-right: 5px;
	padding-bottom: 5px;
	padding-left: 5px;
	color: #FFCC99;
	font-size: large;
	text-align: center;
	font-weight: 1000;
	text-shadow: 0px 0px;
	font-style: normal;
	font-family: aclonica;
	background-image: url(image/header.jpg);
	border-color: #FFFF66;
	background-repeat: repeat-x;
}
body {
	background-image: url();
	background-color: #000;
}
body,td,th {
	color: #F69;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
}
#header {
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
}
h2 {
	font-size: 18px;
	color: #FFF;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aclonica:n4:default.js" type="text/javascript"></script>
</head>
<body bgcolor="#FFFF99"> 
<div id="header">
<a href="index.php"></a>
<h1><strong><u>Makan Apa Ya?</u></strong></h1>
<h2><strong id="header"><em>Portal Informasi Pencarian Tempat Makan di Surabaya</em></strong></h2>
</div> 
<div id="register">
    <table width="100%" height="34" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#F0F0F0">
        <td align="right" valign="middle">
<form action="actionlogin.php" method="post" name="input">
          <input name="username" type="text" required id="username" autocomplete="on" value="Username">
          <input name="password" type="password" required id="password" value="Password">
          <input type="submit" name="signin_button" id="signin_button" value="Sign in">
</form></td>
        <td width="66" align="right" valign="middle">
        <form action="signup.php">
        <input name="signup_button" type="submit" id="signup_button" formaction="signup.php" value="Sign Up">
      </form>
      </td>
      </tr>
    </table>
</div>
  <div id="navigasi">
    <table width="1320" border="0" cellpadding="0" cellspacing="5">
      <tr>
        <td width="158" height="25" bgcolor="#FFFF99"><div align="center"><strong><a href="index.php">Beranda</a></strong></div></td>
        <td width="272" bgcolor="#FFFF99"><div align="center"><strong><a href="tentang.php">Tentang Kami</a></strong></div></td>
        <td width="297" bgcolor="#FFFF99"><div align="center"><strong><a href="daftartempatmakan.php">Daftar Tempat Makan</a></strong></div></td>
        <td width="225" bgcolor="#FFFFCC"><div align="center"><strong><a href="kontak.php">Kontak</a></strong></div></td>
        <td width="324"><strong>
          <label for="search5"><em>Search:</em></label>
          <a href="#">
          <input name="search2" type="search" id="search5">
        <input type="submit" name="submit2" id="submit2" value="Submit">
        </a></strong></td>
      </tr>
    </table>
  </div>
<table width="960" border="0" cellpadding="10" cellspacing="10">
<tr></tr>
  <table width="100%" height="533" border="1" cellpadding="5" cellspacing="10">
    <tr>
      <td width="30%" height="31" bgcolor="#FFFFCC"><strong>  Cari Berdasarkan Kategori :</strong></td>
      <td width="70%" bgcolor="#FFFFCC"><strong>Daftar Tempat Makan [Jenis Makanan: ]</strong></td>
    </tr>
    <tr>
      <td height="395" valign="top"><div id="conten">
        <table width="100%" height="296" border="1" cellpadding="5" cellspacing="7">
          <tr>
            <td width="136" height="10" align="left" valign="middle" nowrap="nowrap"><strong>
              <label for="harga">Harga  </label>
            </strong></td>
            <td width="156" height="10" align="left" valign="middle">: 
              <select name="harga" id="harga" title="Harga">
              <option>Rp.10.000 - Rp.20.000</option>
              <option>Rp.21.000 - Rp.30.000</option>
              <option>Rp. 31.000 - Rp.40.000</option>
              <option>Rp.41.000 - Rp. 51.000</option>
            </select></td>
          </tr>
          <tr>
            <td height="22" align="left" valign="middle"><strong>
              <label for="lokasi">Lokasi</label>
            </strong></td>
            <td height="22" align="left" valign="middle">: 
              <select name="lokasi" id="lokasi2" title="lokasi">
              <option>Lokasi</option>
            </select></td>
          </tr>
          <tr>
            <td height="22" align="left" valign="middle"><strong>
              <label for="lokasi">Jenis Makanan</label>
            </strong></td>
            <td height="22" align="left" valign="middle">: 
              <select name="jenismakanan" id="jenismakanan" title="jenis makanan">
              <option>Jenis Makanan</option>
            </select></td>
          </tr>
          <tr>
            <td height="10" align="left" valign="middle"><strong>
              <label for="lokasi">Jenis Tempat Makan</label>
            </strong></td>
            <td height="10" align="left" valign="middle">: 
              <select name="jenistempatmakan" id="jenistempatmakan" title="jenistempatmakan">
              <option>Jenis Tempat Makan</option>
            </select></td>
          </tr>
          <tr>
            <td height="32" align="left" valign="middle"><strong>
              <label for="lokasi">Rating</label>
            </strong></td>
            <td height="32" align="left" valign="middle">: 
              <select name="rating" id="lokasi" title="rating">
              <option>Rating</option>
            </select></td>
          </tr>
        </table>
      </div></td>
      <td valign="top"><p>&nbsp;</p>
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
<div id="sidebar"></div></div>


</body>
</html>