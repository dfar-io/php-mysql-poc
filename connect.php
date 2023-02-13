<?php
    $request_method = $_SERVER['REQUEST_METHOD'];
    $is_submit = isset($_POST['submit']);
    if ($request_method != 'POST' || !$is_submit) {
        echo 'Needs to be both a POST and a submit action.';
        echo "Request method: $request_method";
        echo "Is submit: $is_submit";
        return;
    }

    // Should be environment variables, just not for the POC
    $user = 'mariadb';
    $pass = 'mariadb';

    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=mariadb', $user, $pass);

        $name = $_POST['name'];
        
        $sql = "INSERT INTO registrations (name) VALUES (?)";
        $pdo->prepare($sql)->execute([$name]);
        $pdo = null;

        echo 'Success!';
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>