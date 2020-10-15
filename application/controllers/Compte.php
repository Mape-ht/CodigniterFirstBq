<?php
class Compte extends CI_Controller
{
    public function list()
    {
        $this->load->model('compterepo');
        $comptes = $this->compterepo->all();

        $data = array();
        $data['comptes'] = $comptes;
        $this->load->view('listcompte', $data);
    }

    public function create()
    {
        //echo "ca marche!";
        
        $this->load->model('compterepo');
        $this->form_validation->set_rules('numero','Numero','required');
        $this->form_validation->set_rules('clerib','Clerib','required');
        $this->form_validation->set_rules('solde','Solde','required');
        $this->form_validation->set_rules('typefrais','Typefrais','required');
        $this->form_validation->set_rules('typecompte','Typecompte','required');
        $this->form_validation->set_rules('dateouverture','Dateouverture','required');

        if ($this->form_validation->run()==false){

            $this->load->view('createcompte');
        } else{

            //save compte to database
            $formArray = array();
            
            $formArray['numero'] = $this->input->post('numero');
            $formArray['clerib'] = $this->input->post('clerib');
            $formArray['solde'] = $this->input->post('solde');
            $formArray['typefrais'] = $this->input->post('typefrais');
            $formArray['typecompte'] = $this->input->post('typecompte');
            $formArray['dateouverture'] = $this->input->post('dateouverture');
            $this->compterepo->create($formArray);
            redirect(base_url().'index.php/Compte/list');
        }
        
    }

    public function edit($compteId)
        {
            $this->load->model('compterepo');
            $compte = $this->compterepo->getCompte($compteId);

            $data= array();
            $data['compte'] =$compte;
            var_dump($data);
            die;
            
            $this->form_validation->set_rules('numero','Numero','required');
            $this->form_validation->set_rules('clerib','Clerib','required');
            $this->form_validation->set_rules('solde','Solde','required');
            $this->form_validation->set_rules('typefrais','Typefrais','required');
            $this->form_validation->set_rules('typecompte','Typecompte','required');
            $this->form_validation->set_rules('dateouverture','Dateouverture','required');

            if ($this->form_validation->run()==false){

                $this->load->view('editcompte',$data);
            } else{

                //modification enregistrée
                $formArray = array();
                $data['compte'] = $compte;

                $formArray['numero'] = $this->input->post('numero');
                $formArray['clerib'] = $this->input->post('clerib');
                $formArray['solde'] = $this->input->post('solde');
                $formArray['typefrais'] = $this->input->post('typefrais');
                $formArray['typecompte'] = $this->input->post('typecompte');
                $formArray['dateouverture'] = $this->input->post('dateouverture');

                $this->compterepo->updateCompte($compteId,$formArray);
                redirect([base_url().'index.php/Compte/list']);
            }

        }
}



?>