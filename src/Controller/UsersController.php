<?php

namespace App\Controller;

class UsersController extends AppController {

    public function initialize()
    {
        parent::initialize();
        // autorise l'action logout (même en cours de déconnexion)
        $this->Auth->allow(['logout', 'new']);
    } // Fin de initialize

    public function index() {

    } // Fin index

    public function new() {
        $new = $this->Users->newEntity();

        if ($this->request->is('post')) {

            // patchEntity permet de récupérer ce qui vient du formulaire pour le mettre dans l'objet entité $new
            $new = $this->Users->patchEntity($new, $this->request->getData());
            if($this->Users->save($new)) {
                return $this->redirect(['controller' => 'Ribs', 'action' => 'newrib', $new->id]);
            }
            $this->Flash->error('Erreur, veuillez recommencer');
        }
        $this->set(compact('new'));
    } // Fin new

    public function login() {
        if($this->request->is('post')) {
            $user = $this->Auth->identify();
            if($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['action' => 'home']);
            }
            $this->Flash->error('Connexion impossible, vérifiez les données');
        }
    } // Fin login

    public function home() {

    } // Fin home

}
