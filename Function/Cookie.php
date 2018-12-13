

<?php 


function createCookie() {
    // variables

    $allProd = array($_POST["prod1"],$_POST["prod2"],$_POST["prod3"],$_POST["prod4"],$_POST["prod5"],$_POST["prod6"],$_POST["prod7"]);
    $check = $_POST["check"];

    foreach ($check as $key => $value) {

        foreach ($allProd as $key => $prod) {

            if ($value === $prod[0]) {
                    // Données Post
                    $id = $prod[0];
                    $titre = $prod[1];
                    $artiste = $prod[2];
                    $price = $prod[3];
    
                    // nom du cookie
                    $name = $prod[0];
    
                // création du tabeau et encodage
                $array = array($id,$titre,$artiste,$price);
                $value = json_encode($array);
            
                //création du cookie
                setcookie($name, $value, time()+3600);  
            }
        }
    }

    header("Location: ./Panier.php "); 

}


function createUser(){

    // variables
    $username = $_POST["username"];
    $password = $_POST["password"];
    $mail = $_POST["mail"];

    //Validation Mail 

    if (preg_match('/@/i', $mail)) {
        setcookie($username, $password, time()+3600); 
        header("Location: ./Product.php "); 
    } else {
        header("Location: ./Noregister.php "); 
    }
}



function deleteCookie() {

    foreach ($_COOKIE as $key=>$val){
        $valarray = json_decode($val); 
        $name = $_POST["nom"];
        if (is_array($valarray) && $valarray[0] === $name){

            $array = array($valarray[1],$valarray[2],$valarray[3]);
            $value = json_encode($array);

            setcookie($valarray[0],$value,time() - 3600); 
        } 
    }
    header("Location: ./Panier.php "); 

}



?>