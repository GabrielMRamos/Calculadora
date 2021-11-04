<!DOCTYPE HTML5>
<html lang = "pt-br">
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
</head>
<body>
    <form action="Calculadora.php" method="post" >   
        <input readonly name="texto" type="text" style="width:215;height:40">
        <br>
        <input type="submit" name="num" value="1" onclick="onclick()" style="width:50;height:40" />     
        <input type="submit" name="num" value="2" onclick="onclick()" style="width:50;height:40" />     
        <input type="submit" name="num" value="3" onclick="onclick()" style="width:50;height:40" />
        <input type="submit" name="operacao" value="+" onclick="onclick()" style="width:50;height:40" />
        <br>     
        <input type="submit" name="num" value="4" onclick="onclick()" style="width:50;height:40" />
        <input type="submit" name="num" value="5" onclick="onclick()" style="width:50;height:40" />     
        <input type="submit" name="num" value="6" onclick="onclick()" style="width:50;height:40" />
        <input type="submit" name="operacao" value="-" onclick="onclick()" style="width:50;height:40" /> 
        <br>     
        <input type="submit" name="num" value="7" onclick="onclick()" style="width:50;height:40" />     
        <input type="submit" name="num" value="8" onclick="onclick()" style="width:50;height:40" />
        <input type="submit" name="num" value="9" onclick="onclick()" style="width:50;height:40" />
        <input type="submit" name="operacao" value="*" onclick="onclick()" style="width:50;height:40" /> 
        <br>
        <input type="submit" name="num" value="0" onclick="onclick()" style="width:50;height:40" />
        <input type="submit" name="clear" value="C" onclick="limpar()" style="width:50;height:40" />
        <input type="submit" name="result" value="=" onclick="onclick()" style="width:50;height:40" />    
        <input type="submit" name="operacao" value="/" onclick="calcular()" style="width:50;height:40" />     
    </form> 
    <?php
        $num = isset($_POST['num'])?$_POST['num']:null;
        $num2 = isset($_POST['num2'])?$_POST['num2']:null;
        $num3 = isset($_POST['num3'])?$_POST['num3']:null;
        $op = isset($_POST['operacao'])?$_POST['operacao']:null;
        $result = isset($_POST['texto'])?$_POST['texto']:null;

        function onclick(){

                if ($num2 == null) {
                    $num2 = $num;
                    $result = $num2;
                }
                else if (empty($num3)){ 
                    $num3 = $num;
                    $result = $num3;
                }    
                else 
                    calcular();

             if (isset($op))
                $result = '';
        
        }

        function calcular(){ 
            if(!empty($op)) {

                if($op == '+')
                    $c = $num2 + $num3;

                else if($op == '-')
                    $c = $num2 - $num3;

                else if($op == '*')
                    $c = $num2 * $num3;

                else
                    $c = $num2 / $num3;

                $result = &$c;
            }
        }

        function limpar(){
            $num = '';
            $num2 = '';
            $num3 = '';
            $op = '';
            $result = '';
        }
    ?>       
</body>
</html>