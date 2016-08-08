<?php

namespace Controller;

use Core\View;
use Model\Contact;

class ContactController
{
    private $model;
    private $view;
    
    public function __construct()
    {
        $this->model = new Contact();
        $this->view = new View();
    }
    
    public function index()
    {
        $data = $this->model->getAllContacts();
        $this->view->setAttribute('applicationName', APPLICATION_NAME);
        $this->view->setAttribute('pageName', 'Contacts');
        $this->view->setAttribute('contacts', $data);
        $this->view->render('contact/index');
    }
    
    public function add()
    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET')
        {
            $this->view->setAttribute('applicationName', APPLICATION_NAME);
            $this->view->setAttribute('pageName', 'Contacts');
            $this->view->render('contact/add');
        }
        
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $name = isset($_POST['name']) ? $_POST['name'] : NULL;
            $mobileNumber = isset($_POST['mobileNumber']) ? $_POST['mobileNumber'] : NULL;
            $address = isset($_POST['address']) ? $_POST['address'] : NULL;
            $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : NULL;
            $dateCreated = date('Y-m-d H:i:s');
            
            $data = [
                     'name' => $name, 
                     'mobileNumber' => $mobileNumber, 
                     'address' => $address, 
                     'emailAddress' => $emailAddress, 
                     'dateCreated' => $dateCreated
                    ];
            
            if ($this->model->addContact($data) >= 1)
            {
                $this->view->redirect('/contact');
            }            
        }
    }
    
    public function view($id)
    {
        $data = $this->model->getContactById($id);
        $this->view->setAttribute('applicationName', APPLICATION_NAME);
        $this->view->setAttribute('pageName', 'Contacts');
        $this->view->setAttribute('contact', $data);
        $this->view->render('contact/view');
    }
    
    public function edit($id = '')
    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET' && $id !== '')
        {
            $data = $this->model->getContactById($id);
            $this->view->setAttribute('applicationName', APPLICATION_NAME);
            $this->view->setAttribute('pageName', 'Contacts');
            $this->view->setAttribute('contact', $data);
            $this->view->render('contact/edit');
        }
        
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $name = isset($_POST['name']) ? $_POST['name'] : NULL;
            $mobileNumber = isset($_POST['mobileNumber']) ? $_POST['mobileNumber'] : NULL;
            $address = isset($_POST['address']) ? $_POST['address'] : NULL;
            $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : NULL;
            $dateCreated = date('Y-m-d H:i:s');

            $data = [
                     'id' => $id,
                     'name' => $name, 
                     'mobileNumber' => $mobileNumber, 
                     'address' => $address, 
                     'emailAddress' => $emailAddress, 
                     'dateCreated' => $dateCreated
                    ];
            
            if ($this->model->updateContact($data) >= 1)
            {
                $this->view->redirect('/contact');
            }    
        }
    }
    
    public function delete($id)
    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET' && $id !== '')
        {        
            if ($this->model->deleteContact($id) >= 1)
            {
                $this->view->redirect('/contact');   
            } else {
                $this->view->redirect('/contact/' . $id);
            }
        }
    }
}