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
    <h3>Créer Compte</h3>
    <hr>
    <form method="post" name="creerCompte" action="<?php echo base_url().'index.php/Compte/create';?>">
    <div class="row">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="text" name="numero" value="" class="form-control">
                <?php echo form_error('numero');?>
            </div>
            <div class="form-group">
                <label for="clerib">Clerib</label>
                <input type="text" name="clerib" value="" class="form-control">
                <?php echo form_error('clerib');?>
            </div>
            <div class="form-group">
                <label for="solde">Solde</label>
                <input type="number" name="Solde" value="" class="form-control">
                <?php echo form_error('solde');?>
            </div>
            <div class="form-group">
                <label for="typefrais">Type frais</label>
                <input type="text" name="typefrais" value="" class="form-control">
                <?php echo form_error('typefrais');?>
            </div>
            <div class="form-group">
                <label for="typecompte">Type compte</label>
                <input type="text" name="typecompte" value="" class="form-control">
                <?php echo form_error('typecompte');?>
            </div>
            <div class="form-group">
                <label for="dateouverture">Date Ouverture</label>
                <input type="text" name="dateouverture" value="" class="form-control">
                <?php echo form_error('dateouverture');?>
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