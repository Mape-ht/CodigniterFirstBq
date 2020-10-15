<?php
class Compterepo extends CI_Model
{

    function create($formArray){
        $this->db->insert('comptes',$formArray); // INSERT INTO comptes (numero, clerib, solde, typefrais, typecompte, dateouverture) values (?, ?);
    }    

    function all()
    {
        return $comptes = $this->db->get('comptes')->result_array(); //SELECT*from comptes (dans la base de données)
    }

    function getCompte($compteId){

        $this->db->where('id',$compteId);
        return $compte = $this->db->get('comptes')->row_array(); // SELECT* FROM comptes where compte_id = ?
    }

    function updateComptes($compteId,$formArray)
    {
        $this->db->where('id',$compteId);
        $this->db->update('comptes',$formArray); // update comptes SET numero = ? where compte_id = ?
    }
}

?>