<?php
class Clientmoralrepo extends CI_Model
{

    function create($formArray){
        $this->db->insert('clientmorals',$formArray); // INSERT INTO clientmorals (raisonsocial, adresse, telephone) values (?, ?);
    }    

    function all()
    {
        return $clientmorals = $this->db->get('clientmorals')->result_array(); //SELECT*from clientmorals (dans la base de données)
    }

    function getClientmoral($clientmoralId){

        $this->db->where('id',$clientmoralId);
        return $clientmoral = $this->db->get('clientmorals')->row_array(); // SELECT* FROM clientmorals where clientmoral_id = ?
    }

    function updateClientmoral($clientmoralId,$formArray)
    {
        $this->db->where('id',$clientmoralId);
        $this->db->update('clientmorals',$formArray); // update clientmorals SET raisonsocial = ? where clientmoral_id = ?
    }
}

?>