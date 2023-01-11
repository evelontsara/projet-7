<?php
// Inclure le fichier header.php
include_once "includes/header.php";
// Inclure le fichier sidebar.php
include_once "includes/sidebar.php";
?>

<?php
// Inclure la variable $db = new Database();
$db = new Database();
// Si la méthode de requête est GET
if (isset($_GET['del_postid'])) {
// Alors
//     Récupérer la valeur de del_postid
    $del_postid = $_GET['del_id'];
//     Si del_postid est vide
    if ($del_postid == 0 ) {
//         Alors
//             Rediriger vers post_list.php
        header('Location: post_list.php');
    
//     Sinon
    } else {
//         Récupérer la valeur de delete_id
            $delete_id = $_GET['del_postid'];
//         Récupérer les données de la table post
            $query = "SELECT * FROM post WHERE category_id ='$category_id' AND title = '$title' AND body = '$body' AND image = '$image' AND author = '$author' AND tags = '$tags' AND date = '$date'" ;
            $result= $db->select($query);
            }
//         Tant que les données sont récupérées
            if ($result) {
//             Récupérer la valeur de imglink
            $imglink = $_GET['imglink'];
//             Supprimer l'image
            
            }
//         Supprimer les données de la table post
            $supr = "DELETE FROM post WHERE category_id ='$category_id' AND title = '$title' AND body = '$body' AND image = '$image' AND author = '$author' AND tags = '$tags' AND date = '$date'";
//         Si les données sont supprimées
            if ($supr) {
//             Alors
//                 Afficher un message de succès
                echo "<span style='color:green;font-size:18px;'>Le message a bien été suprimmer</span>";
//                 Rediriger vers post_list.php
                header('Location: post_list.php');
            } else {
//             Sinon
//                 Afficher un message d'erreur
                    echo "<span style='color:green;font-size:18px;'>Le message n'a pas été suprimmer</span>";
//                 Rediriger vers post_list.php
                    header('Location: post_list.php');
            }
}
?>
