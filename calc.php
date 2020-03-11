<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <?php
    
    $pri = $_POST["primeiro"];
    $seg = $_POST["segundo"];
    $operacao = $_POST["operacao"];
    $res=0;

    if ($operacao==1) {
        $res=$pri+$seg;
        echo "$pri + $seg = $res";
    }else if($operacao==2){
        $res=$pri-$seg;
        echo "$pri - $seg = $res";
    }else if($operacao==3){
        $res=$pri*$seg;
        echo "$pri * $seg = $res";
    }else if($operacao==4){
        $res=$pri/$seg;
        echo "$pri / $seg = $res";
    }
    ?>
</body>
</html>