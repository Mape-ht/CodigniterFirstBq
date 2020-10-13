<?php
Class Clientmoral extends CI_Controller
{ 

    public function index()
    {
        $this->load->model('Clientmoralrepo');
        $clientmorals = $this->Clientmoralrepo->all();

        $data = array();
        $data['clientmorals'] = $clientmorals;
        $this->load->view('listclientmoral', $data);
    }
    
    public function create()
    {
        //echo "ça marche !";
        $this->load->model('Clientmoralrepo');
        $this->form_validation->set_rules('raisonsocial','Raisonsocial','required');
        $this->form_validation->set_rules('adresse','Adresse','required');
        $this->form_validation->set_rules('telephone','Telephone','required');
        
        if ($this->form_validation->run()==false){

            $this->load->view('createclientmoral');
        } else{
            //save clientmoral to database
            $formArray = array();
            $formArray['raisonsocial'] = $this->input->post('raisonsocial');
            $formArray['adresse'] = $this->input->post('adresse');
            $formArray['telephone'] = $this->input->post('telephone');
            $this->Clientmoralrepo->create($formArray);
            //$this->session->set_flashdate('succes','Informations bien enregistrées!');
            redirect(base_url().'index.php/Clientmoral/index');
            
        }
        
    }

    
    
} 