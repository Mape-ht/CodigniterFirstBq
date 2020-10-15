<?php
Class Clientmoral extends CI_Controller
{ 

    public function list()
    {
        $this->load->model('clientmoralrepo');
        $clientmorals = $this->clientmoralrepo->all();

        $data = array();
        $data['clientmorals'] = $clientmorals;
        $this->load->view('listclientmoral', $data);
    }
    
    public function create()
    {
        //echo "ça marche !";
        $this->load->model('clientmoralrepo');
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
            $this->clientmoralrepo->create($formArray);
            //$this->session->set_flashdate('succes','Informations bien enregistrées!');
            redirect(base_url().'index.php/Clientmoral/list');
            
        }
        
    }


    function edit($clientmoralId)
    {
        $this->load->model('clientmoralrepo');
       $clientmoral = $this->clientmoralrepo->getClientmoral($clientmoralId);
        
        $data = array();
        $data['clientmoral'] = $clientmoral;

        $this->form_validation->set_rules('raisonsocial','Raisonsocial','required');
        $this->form_validation->set_rules('adresse','Adresse','required');
        $this->form_validation->set_rules('telephone','Telephone','required');
        
        if ($this->form_validation->run() == false) {

            $this->load->view('editclientmoral',$data);
        } else{

            //modification enregistrée
            $formArray = array();
            $formArray['raisonsocial'] = $this->input->post('raisonsocial');
            $formArray['adresse'] = $this->input->post('adresse');
            $formArray['telephone'] = $this->input->post('telephone');
            
            $this->clientmoralrepo->updateClientmoral($clientmoralId,$formArray);
            redirect([base_url().'index.php/Clientmoral/list']);
        }
        
    }

    }
