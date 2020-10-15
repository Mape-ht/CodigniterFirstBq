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
            <div class="col-6"><h3>Liste Client Particulier</h3></div>
                <div class="col-6 text-right">
                    <a href="<?php echo base_url().'index.php/Clientphysique/create'; ?>" class="btn btn-primary">Créer</a>
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
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Statut</th>
                        <th>Salaire</th>
                        <th width='70'>Editer</th>
                        <th width='70'>Supprimer</th>
                    </tr>

                        <?php if(!empty($clientphysiques)) { foreach($clientphysiques as $clientphysique){ ?>
                    <tr>
                        <td><?php echo $clientphysique['id']?></td>
                        <td><?php echo $clientphysique['nom']?></td>
                        <td><?php echo $clientphysique['prenom']?></td>
                        <td><?php echo $clientphysique['adresse']?></td>
                        <td><?php echo $clientphysique['telephone']?></td>
                        <td><?php echo $clientphysique['statut']?></td>
                        <td><?php echo $clientphysique['salaire']?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/Clientphysique/edit/'.$clientphysique['id']?>" class="btn btn-primary">Editer</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/Clientphysique/delete/'.$clientphysique['id']?>" class="btn btn-danger">Supprimer</a>
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