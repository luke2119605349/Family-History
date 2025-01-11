<?php
    session_start();
    header("Location: managetrees.php");
?>


<!--
{"Name" : {
    "id" : 0,
    "gender" : "M/F",
    "birthday" : "00/00/0000",
    "deathday" : "00/00/0000",
    "children_ids" : [],
    "mother_id" : 0,
    "father_id" : 0,
    "spouse_ids" : []
}}
will need to have a table to track marriages: PK(id, id, date)

Person table
    - PK: ID
    - First Name
    - Last Name
    - Middle name(s) (NULL)
    - Maiden name (NULL)
    - Gender
    - Birthday
    - Deathday (NULL)
    - Mother_id (FK) (NULL)
    - Father_id (FK) (NULL)
    - Extra ID (FK) (NULL)

Children table
    - PK: Person_ID (FK)
    - PK: child_id (FK)

Marriage table
    - PK: Person_ID (FK)
    - PK: spouse_ID (FK)
    - Date married
    - Date divorced (NULL)

Extra table
    - PK: person_id (FK)
    - extra info

// Displaying people
    - show children button
        -- right click to give a dropdown for number of generations down
    - show parents button
        -- right click to give a dropdown for number of generations up
    - right click on a person to hide that branch
    - marriages are always shown


-->