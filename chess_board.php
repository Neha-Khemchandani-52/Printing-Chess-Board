<!--
*Description : Printing Chess Board using PHP and HTML
*Date Added : 2nd October,2019
*Added By : Neha Khemchandani
-->
<!DOCTYPE html>
<html>
<head>
    <title>Chess Board 8X8 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">

    <?php
    for ($row = 1; $row <= 8; $row++)
	  {
          echo "<tr>";
          for ($col = 1; $col <= 8; $col++) {
              $total = $row + $col;
              if ($total % 2 == 0) {
                  echo "<td height=30px width=30px bgcolor=#FFFFFF></td>"; // printing white boxes
              } else {
                  echo "<td height=30px width=30px bgcolor=#000000></td>"; // printing black boxes
              }
          }
          echo "</tr>";
      }
          ?>
</table>
</body>
</html>
