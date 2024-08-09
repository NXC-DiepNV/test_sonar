<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

include_once './main.php';

$password = '123456';

$text = '';

$text =+ '12';

$text2 = '';

$text2 =+ '12';


function doOneMoreThing() {
    return '1234';
}

function doOneMoreThings($id) {
    if ($id == 1) {
        return 1;
    } elseif ($id == 2) {
        return 2;
    } elseif ($id == 3) {
        return 3;
    } elseif ($id == 4) {
        return 4;
    } elseif ($id == 5) {
        return 5;
    } elseif ($id == 6) {
        return 6;
    } elseif ($id == 7) {
        return 7;
    } else {
        return  '';
    }
}

if ($b == 0) {  // Noncompliant
    doOneMoreThing();
  } else {
    doOneMoreThing();
  }
  
  $b = $a > 12 ? 4 : 4;  // Noncompliant
  
  switch ($i) {  // Noncompliant
    case 1:
      doSomething();
      break;
    case 2:
      doSomething();
      break;
    case 3:
      doSomething();
      break;
    default:
      doSomething();
  }

  for ($i = 0; $i < $length; $i--) 


?>
<body>
    <h1>DiepNV test 1</h1>
</body>


</html>