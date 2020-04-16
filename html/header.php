<head>
    <title>Bike Rental</title>
    <link rel="stylesheet" href="../../css/style.css"/>
</head>


<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['pseudo'])){ //if login in session is not set
    echo("session : " + $_SESSION['pseudo']);
    //header("Location: ../html/connexion/connexion.php");
} else {

}
?>
<ul id="navigation">
    <li><a href="#" title="aller à la section 1">item1</a></li>
    <li><a href="#" title="aller à la section 2">item2</a></li>
    <li><a href="#" title="aller à la section 3">item3</a></li>
    <li><a href="#" title="aller à la section 4">item4</a></li>
    <li><a href="#" title="aller à la section 5">item5</a></li>
</ul>

<body class="conteneur">