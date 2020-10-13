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
            <a href="#" class="navbar-brand">Client Entreprise</a>
            <a href="#" class="navbar-brand">Client Particulier</a>
            <a href="#" class="navbar-brand">Compte</a>
        </div>
    </div>   
    <div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col-6"><h3>Liste Client Entreprise</h3></div>
                <div class="col-6 text-right">
                    <a href="<?php echo base_url().'index.php/Clientmoral/create'; ?>" class="btn btn-primary">Créer</a>
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
                        <th>Raison Social</th>
                        <th>Adresse</th>
                        <th width='70'>Téléphone</th>
                        <th width='70'>Editer</th>
                        <th>Supprimer</th>
                    </tr>

                        <?php if(!empty($clientmorals)) { foreach($clientmorals as $clientmoral){ ?>
                    <tr>
                        <td><?php echo $clientmoral['id']?></td>
                        <td><?php echo $clientmoral['raisonsocial']?></td>
                        <td><?php echo $clientmoral['adresse']?></td>
                        <td><?php echo $clientmoral['telephone']?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/Clientmoral/edit/'.$clientmoral['id']?>" class="btn btn-primary">Editer</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/Clientmoral/delete/'.$clientmoral['id']?>" class="btn btn-danger">Supprimer</a>
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