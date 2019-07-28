<?php


function generate_auth_token($auth_token,$timestamp){

    $HASH_PATTERN = '0001110111101110001111010101111011010001001110011000110001000110';
    $SECRET = "iEk21fuwZApXlz93750dmW22pw389dPwOk";
    
    $hash_a = hash("sha256",    ($SECRET . $auth_token));
    $hash_b = hash("sha256",    ($timestamp . $SECRET));
    
    $str = "";
    
    for ($i = 0; $i < strlen($HASH_PATTERN); $i++){
                
                $c = $HASH_PATTERN[$i];
                if($c == "1"){
                    $str .= $hash_b[$i];
                }
                else{
                    $str .= $hash_a[$i];
                }
        }
    return $str;
}
?>
