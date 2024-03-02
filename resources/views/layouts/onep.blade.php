@extends('layouts.app')


@section('content')

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ONEE - Branche Eau</title>
<style type="text/css">
<!--
.Style1 {color: #FFFFFF}
.Style2 {
	font-size: 9pt;
	font-weight: bold;
}
.Style3 {
	font-size: 12px;
	color: #FFFFFF;
}
.Style5 {font-family: verdana}
.Style15 {font-size: 24pt}
#Layer1 {	position:absolute;
	left:118px;
	top:123px;
	width:149px;
	height:17px;
	z-index:1;
}
.Style18 {color: #D4D0C8}
.Style23 {
	font-size: 10pt;
	color: #FFFFFF;
}
body {
	background-color: #F0F8FF;
}
.Style24 {font-size: 9px}
.style1 {
	font-size: medium;
}
.style2 {
	text-align: right;
}
.style3 {
	color: #0000FF;
	text-decoration: underline;
}
.Style22 {font-size: 26px}
.Style29 {
	font-size: 20px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<table width="780" height="594" align="center" bgcolor="#F0F8FF">
  <tbody class="style2">
  <tr>
    <td height="21" align="center" valign="top"><table id="Tableau_01" width="100%" height="134" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top" bgcolor="#F0F8FF"><table width="99%"  height="19" border="0" align="center" cellspacing="0" bgcolor="#000000">
            <!--DWLayoutTable-->
            <tr>
              <td width="154" height="14" bordercolor="#336699" bgcolor="#336699"><div align="center" class="texte Style1">
				<strong style="font-weight: 400">
				<font size="3">Royaume du Maroc</font></strong></div></td>
              <td width="603" valign="middle" bordercolor="#336699" bgcolor="#336699" class="menu1"><div align="right"><span class="Style2">
				<a href="http://www.onep.ma/"><font color="#FFFFFF" size="-5">Accueil</font></a>&nbsp;&nbsp;<font color="#FFFFFF">&nbsp;</font></span><span class="Style3"><font color="#FFFFFF">|</font></span><span class="Style2"><font color="#FFFFFF">
				</font>&nbsp;<a target="_blank" href="Appel-candidatures/accueil.html"><font size="-5" color="#FFFFFF">Faire Un Prblm</font></a><font color="#FFFFFF" size="-5">&nbsp; 
				</font> </span><span class="Style3"><font color="#FFFFFF">|</font></span>;
			
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="95" valign="middle"><table width="100%" border="0">
            <tr>
              <td height="78"><div align="right">
                  <table width="100%" height="76" border="0" cellpadding="0" cellspacing="0" bgcolor="#336699" id="Tableau_01">
                    <tr>
                      <td bgcolor="#336699">
						<div align="right">
                  <table width="100%" height="76" border="0" cellpadding="0" cellspacing="0" id="Tableau_2">
                    <tr>
                      <td class="style2">
						<p style="text-align: center">
						<a href="http://www.onep.ma/">
						<span class="Style2"><font color="#FFFFFF" size="-5">
						<img border="0" src="onee.jpg" width="794" height="95"></font></span></a></td>
                    </tr>
                  </table>
              </div></td>
                 
                    </tr>
                  </table>
              </div></td>
            </tr>
        </table></td>
      </tr>
      
  <tr>
    <td height="445"  valign="top"><div align="center">
      <table width="100%" height="88%" border="0" align="center">
        <tr valign="top">
          <td width="154" height="319" bgcolor="#336699"><table width="100%" border="0">
            <tr>
              <td valign="middle"><table width="100%" border="0">
                  <tr>
                    <td width="10%"><font color="#EFF8FF" size="2"><img src="puce.gif" width="9" height="5"></font></td>
                    <td width="90%"><a href="presentaion-onep.htm" target="content">
					<font color="#EFF8FF" size="2">Accueil </font> </a></td>
                  </tr>
              </table></td>
            </tr>
            
            <tr>
              <td valign="middle"><table width="100%" border="0">
                  <tr>
                    <td width="10%"><font color="#EFF8FF" size="2"><img src="puce.gif" width="9" height="5"></font></td>
                    <td width="90%">
					<a target="content" href="Cooperation-inter/Cooperation-inter.htm">
					<font color="#EFF8FF" size="2">Faire Un probleme</font></a></td>
                  </tr>
              </table></td>
            </tr>
            
        
           
          
            <tr>
              <td height="114" valign="middle"><div align="center"> 
				&nbsp;</div>
				<div align="center"> 
				<img border="0" src="e-paiement-3.jpg" width="129" height="67"><br>
				<img border="0" src="crc.jpg" width="129" height="67"><br>
				<font size="1">
				<br>
                      </font>
                      <img src="Onep.jpg" width="71" height="71"><span class="texte Style1 Style15"><font size="-2"><br>
                        Complexe Meknes&nbsp; Centre Collaborateur de l'OMS </font></span></div></td>
            </tr>
          </table></td>
         
         
         
         
         
          <td width="487" align="center" bgcolor="#D5EAFF">
            <table width="98%" border="0" align="center">
            <tr>





@yield('cont')


                <tr valign="top">
          <td height="20"   colspan="3" background="back-footer.jpg" bgcolor="#336699"><div align="center"></div></td>
                  </tr>
      </table>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
@endsection
             