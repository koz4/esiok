<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $auth = Zend_Auth::getInstance();

        if ($auth->hasIdentity()) {
            $this->view->identity = $auth->getIdentity();
        } // action body
    }

    public function createAction()
    {
        $userForm = new Application_Form_User();
        if ($this->_request->isPost()) {
            if ($userForm->isValid($_POST)) {
                $userModel = new Application_Model_DbTable_User();
                $userModel->createUser(
                        $userForm->getValue('username'), $userForm->getValue('password'), $userForm->getValue('first_name'), $userForm->getValue('last_name'), $userForm->getValue('role')
                );
                return $this->_forward('list');
            }
        }
        $userForm->setAction('create');
        $this->view->form = $userForm;
    }

    public function listAction()
    {
        $currentUsers = Application_Model_DbTable_User::getUsers();
        if ($currentUsers->count() > 0) {
            $this->view->users = $currentUsers;
        } else {
            $this->view->users = null;
        } // action body
    }

    public function updateAction()
    {
        $userForm = new Application_Form_User();
        $userForm->setAction('/user/update');
        $userForm->removeElement('password');
        $id = $this->_request->getParam('id');
        $userModel = new Application_Model_DbTable_User();
        $currentUser = $userModel->find($id)->current();
        $userForm->populate($currentUser->toArray());
        $this->view->form = $userForm; // action body
    }

    public function passwordAction()
    {
        $passwordForm = new Application_Form_User();
        $passwordForm->setAction('/user/password');
        $passwordForm->removeElement('first_name');
        $passwordForm->removeElement('last_name');
        $passwordForm->removeElement('username');
        $passwordForm->removeElement('role');
        $userModel = new Application_Model_DbTable_User();
        if ($this->_request->isPost()) {
            if ($passwordForm->isValid($_POST)) {
                $userModel->updatePassword(
                        $passwordForm->getValue('id'), $passwordForm->getValue('password')
                );
                return $this->_forward('list');
            }
        } else {
            $id = $this->_request->getParam('id'); // action body
            $currentUser = $userModel->find($id)->current();
            $passwordForm->populate($currentUser->toArray());
        }
        $this->view->form = $passwordForm;
    }

    public function deleteAction()
    {

        $id = $this->_request->getParam('id');
        $userModel = new Application_Model_DbTable_User();
        $userModel->deleteUser($id);
        return $this->_forward('list');
    }

    public function loginAction()
    {
        $userForm = new Application_Form_User();
        $userForm->setAction("login");
       // $userForm->setAction('user/login');
        $userForm->removeElement('first_name');
        $userForm->removeElement('last_name');
        $userForm->removeElement('role');
        $this->view->form = $userForm;
    }

    public function logoutAction()
    {
        $authAdapter = Zend_Auth::getInstance(); 
    $authAdapter->clearIdentity();
    }


}



