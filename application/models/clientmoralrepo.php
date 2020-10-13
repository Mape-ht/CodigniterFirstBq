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
}

?>