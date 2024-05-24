
<?php

function factorialm($num) {

    $facto=1;

  
        for ($i=1; $i <= $num ; $i++) {
            $facto *= $i;
        }
        
        return $facto;

    }


function tablas($num2) {
    
    $resu = '';

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num2 * $i;
        $resu .= "<p>$num2 X $i = $resultado</p>";
    }
    return $resu;
}

function cincodeoro($cantjugadas){

    $res1=factorialm(48);
    $res2=factorialm(5);
    $res3=factorialm(43);


    $resprob=$res1/($res2*$res3);
    
  

    $restotal=rtrim(number_format(100*($cantjugadas/$resprob),6),0);
    
    return $restotal;

}

/* 48 factorial / 5 factorial x 43 factorial*/

/*(48 - 5) factorial  */


?>