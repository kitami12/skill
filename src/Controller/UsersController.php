<?php
// src/Controller/auth_informationController.php
namespace App\Controller;

class UsersController extends AppController
{
    
    public function initialize() {
        parent::initialize();

        $this->loadComponent('paginator');
        $this->loadComponent('Flash');
    }

    
  
    public function index()
    {
        $this->loadComponent('Paginator');
        $users = $this->Paginator->paginate($this->Users->find());
        
        $this->set(compact('users'));
    }
    public function view($slug = null)
{
    $user = $this->Users->findBySlug($slug)->firstOrFail();
    $this->set(compact('user'));
}
    public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error('社員IDまたはパスワードが不正です。');
    }
}
}
