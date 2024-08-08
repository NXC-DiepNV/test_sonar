<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
// Lỗi SQL Injection
$userInput = $_GET['user'];
$query = "SELECT * FROM users WHERE username = '$userInput'";
$result = mysqli_query($conn, $query);

// Lỗi sử dụng biến chưa được khởi tạo
echo $uninitializedVariable;

// Lỗi không kiểm tra kết quả của hàm fopen
$file = fopen("test.txt", "r");

// Lỗi XSS
$userInput = $_GET['userInput'];
echo "<div>$userInput</div>";

// Lỗi hardcoded credentials
$dbPassword = 'hardcodedPassword';

$this = 1;

$text = '';

$text =+ '12';


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

  for ($i = 0; $i < $length; $i--) { // Noncompliant
    //...
  }


?>
<body>
    <h1>DiepNV test 1 <?php echo $password; ?></h1>
</body>


</html>