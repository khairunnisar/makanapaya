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
	width: 1180px;
	height: 130px;
	margin-top: 10px;
	margin-left: 5px;
	margin-right: 5px;
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
	background-image: url(header.jpg);
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
    <table width="1202" border="0" cellpadding="10" cellspacing="10">
      <tr bgcolor="#F0F0F0">
        <td width="1162" height="44">
          <p align="right">
            <input name="username" type="text" required id="username" autocomplete="on" value="Username">
            <input name="password" type="password" required id="password" value="Password">
            <input type="submit" name="Sign In" id="Sign In" value="Sign in">          
            <input type="button" name="Sign Up" id="Sign Up" value="Sign Up">
          </p>        </td>
      </tr>
    </table>
</div>
  <div id="navigasi">
    <table width="1202" border="0" cellpadding="10" cellspacing="10">
      <tr>
        <td width="102" bgcolor="#FFFF99"><div align="center"><strong><a href="index.php">Beranda</a></strong></div></td>
        <td width="138" bgcolor="#FFFF99"><div align="center"><strong><a href="#">Tentang Kami</a></strong></div></td>
        <td width="199" bgcolor="#FFFF99"><div align="center"><strong><a href="#">Daftar Tempat Makan</a></strong></div></td>
        <td width="172" bgcolor="#FFFFCC"><div align="center"><strong><a href="#">Kontak</a></strong></div></td>
        <td width="431"><strong><a href="#">
          <label for="search5"><em> Search:</em></label>
          <input name="search2" type="search" id="search5">
          <input type="submit" name="submit2" id="submit2" value="Submit">
        </a></strong></td>
      </tr>
    </table>
  </div>
<table width="960" border="0" cellpadding="10" cellspacing="10">
<tr></tr>
  <div id="conten">
    <table width="1201" height="354" border="0" cellpadding="10" cellspacing="10">
    <tr>
      <td height="41" colspan="2" bgcolor="#FFFFCC"><strong>Cari Berdasarkan Kategori :</strong></td>
      <td width="838" rowspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td width="96" height="42"><strong>
        <label for="harga">Harga :    </label>
      </strong></td>
      <td width="167" height="42"><select name="harga" id="harga" title="Harga">
        <option>Rp.10.000 - Rp.20.000</option>
        <option>Rp.21.000 - Rp.30.000</option>
      </select></td>
    </tr>
    <tr>
      <td height="42"><strong>
        <label for="lokasi">Lokasi:</label>
      </strong></td>
      <td height="42"><select name="lokasi" id="lokasi2" title="lokasi">
        <option>Lokasi</option>
      </select></td>
    </tr>
    <tr>
      <td height="41"><strong>
        <label for="lokasi">Jenis Makanan:</label>
      </strong></td>
      <td height="41"><select name="jenismakanan" id="jenismakanan" title="jenis makanan">
        <option>Jenis Makanan</option>
      </select></td>
    </tr>
    <tr>
      <td height="10"><strong>
        <label for="lokasi">Jenis Tempat Makan:</label>
      </strong></td>
      <td height="10"><select name="jenistempatmakan" id="jenistempatmakan" title="jenistempatmakan">
        <option>Jenis Tempat Makan</option>
      </select></td>
    </tr>
    <tr>
      <td height="10"><strong>
        <label for="lokasi">Rating:</label>
      </strong></td>
      <td height="10"><select name="rating" id="lokasi" title="rating">
        <option>Rating</option>
      </select></td>
    </tr>
  </table>
</div>
<div id="sidebar"></div>
</div>
 
<div id="footer">  
<table width="1204" height="388" border="0" cellpadding="10" cellspacing="20">
    <tr>
      <td width="339" height="41" bgcolor="#FFFFCC"><form id="form1" name="form1" method="post">
        <strong>Tempat Makan Populer Bulan Ini
        </strong>
      </form></td>
      <td colspan="2" bgcolor="#FFFFFF"><form id="form2" name="form2" method="post">
        <div align="center"><strong>Tempat Makan Baru </strong></div>
      </form></td>
    </tr>
    <tr>
      <td height="234">&nbsp;</td>
      <td width="360">&nbsp;</td>
      <td width="360">&nbsp;</td>
    </tr>
  </table>
</div></div>


</body>
</html>