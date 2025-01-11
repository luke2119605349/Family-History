<?php
    session_start();
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=family", "root");
    
    // Add a tree with a root person
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Create the tree
        $createtree = "insert into clumps values(NULL, :t, NULL)";
        $ct = $pdo->prepare($createtree);
        $ct->bindValue(":t", $_POST["treename"]);
        $ct->execute();
        $tree_id = $pdo->lastInsertId();

        echo implode(".", $_POST);

        // Add the person
        $person = "insert into person values(DEFAULT, :g, :b, :d, :f, :l, :m, :a, NULL, NULL, NULL, :t)";
        $p = $pdo->prepare($person);
        $p->bindValue(":g", $_POST["gender"]);
        $p->bindValue(":b", $_POST["birthday"]);
        $p->bindValue(":d", $_POST["deathday"]);
        $p->bindValue(":f", $_POST["firstname"]);
        $p->bindValue(":l", $_POST["lastname"]);
        $p->bindValue(":m", $_POST["middlename"]);
        $p->bindValue(":a", $_POST["maidenname"]);
        $p->bindValue(":t", $tree_id);
        $p->execute();

        // Associate
        $id = $pdo->lastInsertId();
        $associate = $pdo->prepare("update clumps set root_id=:r where id=:t and title=:n");
        $associate->bindValue(":r", $id);
        $associate->bindValue(":t", $tree_id);
        $associate->bindValue(":n", $_POST["treename"]);
        $associate->execute();
    }
    
    // Redirect back to displaying all trees
    header("Location: ./managetrees.php");
?>