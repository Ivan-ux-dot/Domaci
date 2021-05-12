<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><style>
  table{
    border:2px solid black;

  }
  
 
    </style>
</head>
<body>
  <?php
  $broj1=mt_rand(1,10);
  $broj2=mt_rand(1,10);
  $broj3=mt_rand(1,10);
  $koren1=sqrt($broj1);
  $koren2=sqrt($broj2);
  $koren3=sqrt($broj3);
  ?>
  <table>
    <tr>
      <td><?=$broj1?></td>
      <td><?=$koren1?></td>
    </tr>
    <tr>
      <td><?=$broj2?></td>
      <td><?=$koren2?></td>
    </tr>
    <tr>
      <td><?=$broj3?></td>
      <td><?=$koren3?></td>
    </tr>
  </table>

  
</body>
</html>