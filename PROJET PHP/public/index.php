<?php
    define("WEBROOT","http://localhost:8000")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("/Users/MarietouFALL/Downloads/PROJET PHP/views/partial/nav.html.php");
        if (isset($_GET['page'])){
            if($_GET['page']=='add'){
                require_once ("/Users/MarietouFALL/Downloads/PROJET PHP/views/add_demande_html.php");
            }
            elseif($_GET['page']=='liste'){
                require_once ("/Users/MarietouFALL/Downloads/PROJET PHP/views/liste_demande_html.php");
            }
            elseif($_GET['page']=='detail'){
                require_once ("/Users/MarietouFALL/Downloads/PROJET PHP/views/detail_demande_html.php");
            }
        }
        else{
            require_once ("/Users/MarietouFALL/Downloads/PROJET PHP/views/liste_demande_html.php");
        }
    ?>
</body>
</html>