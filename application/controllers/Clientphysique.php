<?php
class Clientphysique extends CI_Controller
{

    public function list()
    {
        $this->load->model('clientphysiquerepo');
        $clientphysiques = $this->clientphysiquerepo->all();

        $data = array();
        $data['clientphysiques'] = $clientphysiques;
        $this->load->view('listclientphysique', $data);
    }

    public function create()
    {
        //echo "ca marche!";
        $this->load->model('clientphysiquerepo');
        $this->form_validation->set_rules('nom','Nom','required');
        $this->form_validation->set_rules('prenom','Prenom','required');
        $this->form_validation->set_rules('adresse','Adresse','required');
        $this->form_validation->set_rules('telephone','Telephone','required');
        $this->form_validation->set_rules('statut','Statut','required');
        $this->form_validation->set_rules('salaire','Salaire','required');

        if ($this->form_validation->run()==false){

            $this->load->view('createclientphysique');
        } else{

            //save clientphysique to database
            $formArray = array();
            $formArray['nom'] = $this->input->post('nom');
            $formArray['prenom'] = $this->input->post('prenom');
            $formArray['adresse'] = $this->input->post('adresse');
            $formArray['telephone'] = $this->input->post('telephone');
            $formArray['statut'] = $this->input->post('statut');
            $formArray['salaire'] = $this->input->post('salaire');
            $this->clientphysiquerepo->create($formArray);
            redirect(base_url().'index.php/Clientphysique/list');
        }

    }

    function edit($clientphysiqueId)
        {

            $this->load->model('clientphysiquerepo');
            $clientphysique = $this->clientphysiquerepo->getClientphysique($clientphysiqueId);

            $data = array();
            $data['clientphysique'] = $clientphysique;

            $this->form_validation->set_rules('nom','Nom','required');
            $this->form_validation->set_rules('prenom','Prenom','required');
            $this->form_validation->set_rules('adresse','Adresse','required');
            $this->form_validation->set_rules('telephone','Telephone','required');
            $this->form_validation->set_rules('statut','Statut','required');
            $this->form_validation->set_rules('salaire','Salaire','required');

            if ($this->form_validation->run() == false){

                $this->load->view('editclientphysique',$data);
            } else{

                //modification enregistrée
                $formArray = array();
                $formArray['nom'] = $this->input->post('nom');
                $formArray['prenom'] = $this->input->post('prenom');
                $formArray['adresse'] = $this->input->post('adresse');
                $formArray['telephone'] = $this->input->post('telephone');
                $formArray['statut'] = $this->input->post('statut');
                $formArray['salaire'] = $this->input->post('salaire');
                
                $this->clientphysiquerepo->updateClientphysique($clientphysiqueId,$formArray);
                redirect([base_url().'index.php/Clientphysique/list']);

            }


        }
}
 



?>