<?php 
$kodasErr = $vardasErr = $pavardeErr = $svorisErr = $pastabosErr = "";
$kodas = $vardas = $pavarde = $svoris = $pastabos = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["$kodas"])){
        $kodasErr = "Reikia uzpylditi !!!";
        
    }
    
    else{
        $kodas = test_input($_POST["$kodas"]);
    }
    if(empty($_POST["$vardas"])){
        $vardasErr = "Reikia uzpylditi !!!";
        // check if name only contains letters and whitespace
        
    }
    else{
        $vardas = test_input($_POST["$vardas"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$vardas)) {
        $vardasErr = "Only letters and white space allowed";
        }
    }

    if(empty($_POST["$pavarde"])){
        $pavardeErr = "Reikia uzpylditi !!!";
    }
    else{
        $pavarde = test_input($_POST["$pavarde"]);
    }
    if(empty($_POST["$svoris"])){
        $svorisErr = "Reikia uzpylditi !!!";
        if (!preg_match("/^[a-zA-Z-' ]*$/",$pavarde)) {
        $pavardeErr = "Only letters and white space allowed";
        }
    }
    else{
        $svoris = test_input($_POST["$svoris"]);
    }
    if(empty($_POST["$pastabos"])){
        $pastabosErr = "";
    }
    else{
        $pastabos = test_input($_POST["$pastabos"]);
    }
}
?>