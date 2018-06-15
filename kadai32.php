<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.org/TR/html4/loose.dtd">
<html lang="ja">

  <head>
    <meta http-http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>課題3-2</title>
  </head>

    <body>
      <table>
        <tr><th>x</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th></tr>
          <?php
            for ( $i = 1; $i <= 9; $i++ )
            {
              print '<tr>';
              print '<th>' . $i . '</th>';

                for ( $j = 1; $j <= 9; $j++ )
                {
                  print '<td>' . $i*$j . '</td>';
                }
              print '</tr>' . "\n";
            }
          ?>
      </table>
    </body>

    <style>
      table
      {
        border-collapse: collapse;
      }
      th, td
      {
        border: double black;
      }
      th
      {
        text-align: left;
        background: gray;
      }
      td
      {
        text-align: left;
      }
    </style>
  </html>
