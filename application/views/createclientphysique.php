<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banque du peuple</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
    <a href="<?php echo base_url().'index.php/Clientmoral/create'?>" class="navbar-brand">Client Entreprise</a>
        <a href="<?php echo base_url().'index.php/Clientphysique/create'?>" class="navbar-brand">Client Particulier</a>
        <a href="<?php echo base_url().'index.php/Compte/create'?>" class="navbar-brand">Compte</a>
    </div>
</div>   
<div class="container" style="padding-top:10px;">
    <h3>Créer Client Particulier</h3>
    <hr>
    <form method="post" name="creerClientphysique" action="<?php echo base_url().'index.php/Clientphysique/create';?>">
    <div class="row">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="" class="form-control">
                <?php echo form_error('nom');?>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" value="" class="form-control">
                <?php echo form_error('prenom');?>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" value="" class="form-control">
                <?php echo form_error('adresse');?>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" value="" class="form-control">
                <?php echo form_error('telephone');?>
            </div>
            <div class="form-group">
                <label for="statut">Statut</label>
                <input type="text" name="statut" value="" class="form-control">
                <?php echo form_error('statut');?>
            </div>
            <div class="form-group">
                <label for="salaire">Salaire</label>
                <input type="text" name="salaire" value="" class="form-control">
                <?php echo form_error('salaire');?>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Créer</button>
                <a href="" class="btn-secondary btn">Supprimer</a>
        </div>
    </div>
   </div>
   </form>
</body>
</html>