<?php
    // GET 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="./loadpeople.js"></script>
    </head>
    <body>
        <form></form>
        

        <!-- Add person button -->
        <div id="addpersonui" class="modal modalHidden">
            <form id="addperson" method="post" action="./viewperson.php">
                <p><label for="firstname">First Name:<input class="modalInput" type="text" name="firstname"></label></p>
                <p><label for="middlename">Middle Name (Optional):<input class="modalInput" type="text" name="middlename"></label></p>
                <p><label for="lastname">Last Name:<input class="modalInput" type="text" name="lastname"></label></p>
                <div><label for="gender">Gender:</label>
                <input type="radio" name="gender" value="1"> Male
                <input type="radio" name="gender" value="0"> Female
                </div>
                <p><label for="maidenname">Maiden Name (Optional):<input class="modalInput" type="text" name="maidenname"></label></p>
                <p><label for="birthday">Birthday:<input class="modalInput" type="date" name="birthday"></label></p>
                <p><label for="deathday">Date of death (Optional):<input class="modalInput" type="date" name="deathday"></label></p>
                <p><label for="mom">Mother SELECT:<input class="modalInput" type="text" name="mom"></label></p>
                <p><label for="dad">Father SELECT:<input class="modalInput" type="text" name="dad"></label></p>
                <p><label for="extra">Extra info TEXTBLOB:<input class="modalInput" type="text" name="extra"></label></p>
                <p class="modalButtons">
                    <input class="modalButton" type="submit" id="submitnewperson" value="Submit">
                </p>
            </form>
        </div>
    </body>
</html>