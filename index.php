<html>

<head>
  <title>Mathematica Web</title>
  <link rel="shortcut icon" href="mathematica.gif" />
  <link rel="stylesheet" type="text/css" href="mathematica.css" media="screen" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="mathematica.js"></script>
  <script src="caret.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>  

<div id="row" style="display:none">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
  <tr> 
    <td width="15"><span class="prompt">&gt;&gt;</span></td>
    <td width="90%"><input class="current" id="ID" type="text" value="X"/></td>
    <td></td>
  </tr>
</table>
</div>
           

<div class="header">
<table  width="100%"  border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td>
      <table width="100%">
        <tr>
          <td width="20"><img src="mathematica.gif"></td>
          <td width="100%">Mathematica</td>
          <td width="628"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>

<br>

<table id="rows" width="100%"><tr><td></td></tr></table>

<div id="footer" class="footer">
<table height="100%">
  <tr>
    <td valign="middle">
      <nobr>
        <button id="clear" class="button" role="button">Clear</button>
        <button id="help" class="button" role="button">Help</button>
      </nobr>
    </td>
    <td width="100%"></td>
    <td valign="middle">
      <button id="top" class="button" role="button">Top</button>
    </td>
  </tr>
</table>
</div>

</body>

</html>