<?php
require_once('../Template/header.php');
?>

<form action="createCookie" method="POST">
    <table style="width:50%">
        <tr>
            <th>Cover</th>
            <th>Title</th>
            <th>Artiste</th> 
            <th>Price</th>
            <th>Buy</th>
        </tr>
        <tr>
                <input type="hidden" name="prod1[]" value="1">
                <input type="hidden" name="prod1[]" value="L'album de Sa Vie - 100 Titres">
                <input type="hidden" name="prod1[]" value="Hallyday Johnny">
                <input type="hidden" name="prod1[]" value="19€">
                <th><img src="../img/JohnnyAlbum.jpg"></th>
                <td>L'album de Sa Vie - 100 Titres</td>
                <td>Hallyday Johnny</td> 
                <td>19.99€</td>
                <td><input type="checkbox" value="1" name="check[]"></td>
        </tr>
        <tr>
                <input type="hidden" name="prod2[]" value="2">
                <input type="hidden" name="prod2[]" value="Amigo">
                <input type="hidden" name="prod2[]" value="Kendji Girac">
                <input type="hidden" name="prod2[]" value="14€">
                <th><img src="../img/Amigo.jpg"></th>
                <td>Amigo</td>
                <td>Kendji Girac</td> 
                <td>14,99</td>
                <td><input type="checkbox" value="2" name="check[]"></td>
        </tr>
        <tr>
                <input type="hidden" name="prod3[]" value="3">
                <input type="hidden" name="prod3[]" value="Best of 40 Chansons">
                <input type="hidden" name="prod3[]" value="Charles Aznavour">
                <input type="hidden" name="prod3[]" value="9€">
                <th><img src="../img/BestOf_Aznavour.jpg"></th>
                <td>Best of 40 Chansons</td>
                <td>Charles Aznavour</td> 
                <td>9,99 €</td>
                <td><input type="checkbox" value="3" name="check[]"></td>
        </tr>
        <tr>
                <input type="hidden" name="prod4[]" value="4">
                <input type="hidden" name="prod4[]" value="Louane">
                <input type="hidden" name="prod4[]" value="Louane">
                <input type="hidden" name="prod4[]" value="9€">
                <th><img src="../img/Louane.jpg"></th>
                <td>Louane</td>
                <td>Louane</td> 
                <td>9,99 €</td>
                <td><input type="checkbox" value="4" name="check[]"></td>
        </tr>
        <tr>
                <input type="hidden" name="prod5[]" value="5">
                <input type="hidden" name="prod5[]" value="Nouvelle page">
                <input type="hidden" name="prod5[]" value="Jenifer">
                <input type="hidden" name="prod5[]" value="14€">
                <th><img src="../img/NouvellePage.jpg"></th>
                <td>Nouvelle page</td>
                <td>Jenifer</td> 
                <td>14,99 €</td>
                <td><input type="checkbox" value="5" name="check[]"></td>
        </tr>
        <tr>
                <input type="hidden" name="prod6[]" value="6">
                <input type="hidden" name="prod6[]" value="Pascal Obispo">
                <input type="hidden" name="prod6[]" value="Pascal Obispo">
                <input type="hidden" name="prod6[]" value="14€">
                <th><img src="../img/Obispo"></th>
                <td>Pascal Obispo</td> 
                <td>Pascal Obispo</td>
                <td>14,99 €</td>
                <td><input type="checkbox" value="6" name="check[]"></td>
        </tr>
        <tr>
                <input type="hidden" name="prod7[]" value="7">
                <input type="hidden" name="prod7[]" value="Vianney">
                <input type="hidden" name="prod7[]" value="Vianney">
                <input type="hidden" name="prod7[]" value="9€">
                <th><img src="../img/Vianney"></th>
                <td>Vianney</td>
                <td>Vianney</td> 
                <td>9,99€</td>
                <td><input type="checkbox" value="7" name="check[]"></td>
        </tr>
    </table>
<td><input type="submit" value="Buy"></td>
</form>


<?php
require_once('../Template/footer.php');
?>