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
        <div class="row">
            <div class="col-6"><h3>Liste Compte</h3></div>
                <div class="col-6 text-right">
                    <a href="<?php echo base_url().'index.php/Compte/create'; ?>" class="btn btn-primary">Créer</a>
                </div>
            </div>
        </div>        
    </div>
        
        <hr>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Numero</th>
                        <th>Clé Rib</th>
                        <th>Solde</th>
                        <th>Type Frais</th>
                        <th>Type Compte</th>
                        <th>Date Ouverture</th>
                        <th width='70'>Editer</th>
                        <th width='70'>Supprimer</th>
                    </tr>

                        <?php if(!empty($comptes)) { foreach($comptes as $compte){ ?>
                    <tr>
                        <td><?php echo $compte['id']?></td>
                        <td><?php echo $compte['numero']?></td>
                        <td><?php echo $compte['clerib']?></td>
                        <td><?php echo $compte['solde']?></td>
                        <td><?php echo $compte['typefrais']?></td>
                        <td><?php echo $compte['typecompte']?></td>
                        <td><?php echo $compte['dateouverture']?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/Compte/edit/'.$compte['id']?>" class="btn btn-primary">Editer</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/Compte/delete/'.$compte['id']?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                        <?php } } else { ?>
                        <tr>
                            <td colspan="5">Contenu introuvable</td>
                        </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>    
</body>
</html>