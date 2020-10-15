<?php
class Clientphysiquerepo extends CI_Model
{

    function create($formArray){
        $this->db->insert('clientphysiques',$formArray); // INSERT INTO clientphysiques (nom, prenom, adresse, telephone, statut, salaire) values (?, ?);
    }    

    function all()
    {
        return $clientphysiques = $this->db->get('clientphysiques')->result_array(); //SELECT*from clientphysiques (dans la base de données)
    }

    function getClientphysique($clientphysiqueId){

        $this->db->where('id',$clientphysiqueId);
        return $clientphysique = $this->db->get('clientphysiques')->row_array(); // SELECT* FROM clientphysiques where clientphysique_id = ?
    }

    function updateClientphysiques($clientphysiqueId,$formArray)
    {
        $this->db->where('id',$clientphysiqueId);
        $this->db->update('clientphysiques',$formArray); // update clientphysiques SET name = ? where clientphysique_id = ?
    }
}

?>