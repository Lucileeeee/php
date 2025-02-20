<?php 
$message='';
$listUsers = []; 
?>
<section>
    <h1>Inscription pour Api</h1>
    <form action="" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo">
        <input type="text" name="email" placeholder="L'Email'">
        <input type="password" name="mdp" placeholder="Le Mot de Passe">
        <input type="submit" name="submitSignUp">
    </form>
    <p><?php echo $message ?></p>
</section>
<section>
    <h1>Liste d'Utilisateurs</h1>
    <ul>
   <!--      <?php echo $listUsers ?> -->
    </ul>
</section>
<script>
        fetch('http://localhost/routeInscrire.php',{method : "POST"})
            .then(response => response.json())
            .then(data => console.log(data))
    </script>