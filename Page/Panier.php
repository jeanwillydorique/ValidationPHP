
<?php
require_once('../Template/header.php');

?>

<form action="deleteCookie" method="POST">
    <table style="width:50%">
        <tr>
            <th>Title</th>
            <th>Artiste</th> 
            <th>Price</th>
            <th>Supprimer</th>
        </tr>
    <?php
            $sum = 0; 
    foreach ($_COOKIE as $key=>$val){
        $valarray = json_decode($val);
        $ligne = "<tr>";
        $ligne .= "<input type='hidden' name='nom' value='" . $valarray[0]. "'>";
        $ligne .=  "<th>" . $valarray[1] .  "</th>";
        $ligne .=  "<th>" . $valarray[2] .  "</th>";
        $ligne .=  "<th>" . $valarray[3] .  "</th>";
        $ligne .=  "<th><input type='submit' value='Supprimer'></th>";
        $ligne .= "</tr>";
        $sum+= intval($valarray[3]); 
        echo $ligne;
    }
        echo "<tr>";
            echo "<th>Total</th>";
            echo "<th>Total</th>"; 
            echo "<th>" .$sum. "€ </th>";
            echo "<th>Supprimer</th>";
        echo "</tr>";
    ?>
    </table>
</form>



<?php
require_once('../Template/footer.php');
?>