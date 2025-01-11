<?php
    session_start();
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=family", "root");
    
    // Display trees
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $root = $pdo->prepare("select * from clumps");
        $root->execute();
        $trees = array();
        foreach ($root as $r) {
            $tree = array();
            array_push($tree, $r["id"]);
            array_push($tree, $r["title"]);
            array_push($tree, $r["root_id"]);
            array_push($trees, $tree);
        }
        echo json_encode($trees);
    }
?>