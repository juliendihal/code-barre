<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
$elementA = [['_','_','_','X','X','_','x'],['_','_','X','X','_','_','X'],['_','_','X','_','_','X','X'],['_','X','X','X','X','_','X'],['_','X','_','_','_','X','X'],['_','X','X','_','_','_','X'],['_','X','_','X','X','X','X'],['_','X','X','X','_','X','X'],['_','X','X','_','X','X','X'],['_','_','_','X','_','X','X']];
$elementC = [['X','X','X','_','_','X','_'], ['X','X','_','_','X','X','_'],['X','X','_','X','X','_','_'],['X','_','_','_','_','X','_'],['X','_','X','X','X','_','_'],['X','_','_','X','X','X','_'],['X','_','X','_','_','_','_'],['X','_','_','_','X','_','_'],['X','_','_','X','_','_','_'],['X','X','X','_','X','_','_']];
$normal = ['X','_','X'];
$central = ['_','X','_','X','_'];
$input = [6,5,8,3,3,2,5,4];
$code = "";


$code .= implode($normal) ;


for($i = 0; $i < count($input)/2;$i++){
    $code.= implode($elementA[$input[$i]]);

}

$code.= implode($central);


for($i = count($input)/2;$i<count($input);$i++) {
    $code.=implode($elementC[$input[$i]]) ;
}

$code .= implode($normal);

$code_en_array = str_split($code);
foreach($code_en_array as $input) {
    if($input === 'X'){
        echo "<div style='height: 80px; width: 2px;display: inline-block; background-color: black'></div>";
    } else{
        echo "<div style='height: 80px; width: 2px;display: inline-block; background-color: white;'></div>";
    }
}

?>

</body>
</html>


