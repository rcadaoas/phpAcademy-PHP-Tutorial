<?php

$string = 'I could be any case.';

$string_lower = strtolower($string);
$string_upper = strtoupper($string);
echo $string_upper;
echo $string_lower;

if(isset($_GET['user_name'])&&!empty($_GET['user_name'])){
    $user_name = $_GET['user_name'];
    $user_name_lc = strtolower($user_name);
    
    if($user_name_lc == 'alex'){
    echo 'you are the best'.$user_name;
    }
}

?>

<form action="47-StringFunctionsUpperLowerCaseConversion.php" method="get">
    Name: <input type="text" name="user_name"/><br><br>
    <input type="submit" value="submit"/>
</form>