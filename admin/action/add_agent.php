<?php
require_once __DIR__.'/../db_.php';

if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $numero_tel = mysqli_real_escape_string($con, $_POST['numero_tel']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($con, $_POST['password_confirm']);
    $logical_delete_default = 0;

    // Check if passwords match
    if ($password !== $password_confirm) {
        echo '<script>alert("Les mots de passe ne correspondent pas."); window.location.href="http://localhost:8080/admin/index.php";</script>';
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into agent table
    $sql = "INSERT INTO agent (nom_agent, prenom_agent, email_agent, tel_agent, password, logical_delete, created_at, updated_at) 
            VALUES ('$name', '$prenom', '$email', '$numero_tel', '$hashed_password', $logical_delete_default, NOW(), NOW())";

    if (mysqli_query($con, $sql)) {

        $agent_id = mysqli_insert_id($con);

        // Create notification content
        $contenu_not = "Un nouveau agent a été créé sous nom: '$name $prenom'";
        $category = "Inscription";

        // Prepare the notification insert query
        $notification_sql = $con->prepare("INSERT INTO notification (id_cour, id_agent, contenu_not, category, created_at, updated_at, close_not) 
                                           VALUES (NULL, ?, ?, ?, NOW(), NOW(), 0)");

        // Check if the statement was prepared successfully
        if ($notification_sql) {
            // Bind the parameters to the placeholders
            $notification_sql->bind_param("iss", $agent_id, $contenu_not, $category);

            // Execute the prepared statement
            if ($notification_sql->execute()) {
                echo '<script>alert("Agent ajouté avec succès! Notification created."); window.location.href="http://localhost:8080/admin/index.php";</script>';
            } else {
                echo '<script>alert("Agent ajouté avec succès, mais la notification n\'a pas pu être créée."); window.location.href="http://localhost:8080/admin/index.php";</script>';
            }

            // Close the statement
            $notification_sql->close();
        } else {
            echo '<script>alert("Failed to prepare the notification statement."); window.location.href="http://localhost:8080/admin/index.php";</script>';
        }
    } else {
        echo '<script>alert("Erreur lors de l\'ajout de l\'agent."); window.location.href="http://localhost:8080/admin/index.php";</script>';
    }

    mysqli_close($con);
} else {
    header("Location: http://localhost:8080/admin/index.php");
    exit();
}

?>