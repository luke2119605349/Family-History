<?php
    session_start();
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=family", "root");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="objects.css">
        <script src="managetrees.js"></script>
    </head>
    <body>
        <table>
            <thead><tr><th colspan="3">Trees</th></tr></thead>
            <tbody id="treetablebody"></tbody>
        </table>
        <!-- Make modal -->
        <form id="addtree" class="additem" method="post" action="./addtree.php">
            <p><label for="treename">Tree Name:<input class="modalInput" type="text" name="treename"></label></p>
            <p><label for="firstname">First Name:<input class="modalInput" type="text" name="firstname"></label></p>
            <p><label for="middlename">Middle Name (Optional):<input class="modalInput" type="text" name="middlename"></label></p>
            <p><label for="lastname">Last Name:<input class="modalInput" type="text" name="lastname"></label></p>
            <div>
                <label for="gender">Gender:</label>
                <input type="radio" name="gender" value="1"> Male
                <input type="radio" name="gender" value="0"> Female
            </div>
            <p><label for="maidenname">Maiden Name (Optional):<input class="modalInput" type="text" name="maidenname"></label></p>
            <p><label for="birthday">Birthday:<input class="modalInput" type="date" name="birthday"></label></p>
            <p><label for="deathday">Date of death (Optional):<input class="modalInput" type="date" name="deathday"></label></p>
            <p><label for="extra">Extra info TEXTBLOB:<input class="modalInput" type="text" name="extra"></label></p>
            <input class="modalButton" type="submit" id="submitnewtree" value="Submit">
            <input class="modalButton" type="button" id="cancelnewtree" value="Cancel">
        </form>
    </body>
</html>