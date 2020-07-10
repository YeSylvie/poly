<?php

namespace App\Controller;

class RibsController extends AppController {

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->Auth->allow(['newrib', 'addidcard', 'reglement', 'carte', 'validation']);
    }

    public function newrib($id = null) {
        $new = $this->Ribs->newEntity();

        if ($this->request->is('post')) {

            // patchEntity permet de récupérer ce qui vient du formulaire pour le mettre dans l'objet entité $new
            $new = $this->Ribs->patchEntity($new, $this->request->getData());
            $new->user_id = $id;

            echo $new;
            if($this->Ribs->save($new)) {
                return $this->redirect(['action' => 'addidcard', $new->id]);
            }
            $this->Flash->error('Erreur, veuillez recommencer');
        }
        $this->set(compact('new'));
    } // fin newrib

    public function addidcard($id = null) {
        $rib = $this->Ribs->get($id);

        $this->set(compact('rib'));

        $oldName = $rib->idcard;

        if ($this->request->is(['post', 'put'])) {
            $this->Ribs->patchEntity($rib, $this->request->getData());

            // Si on n'a pas reçu de fichier ou si le format n'est pas le bon
            if (empty($this->request->getData()['idcard']['name']) || !in_array($this->request->getData()['idcard']['type'],
                    ['image/png', 'image/jpg', 'image/jpeg'])) {
                $this->Flash->error('Pas de fichier ou format non valide, veuillez recommencer');
            }
            // Sinon
            else {
                // On récupère l'extension
                $ext = pathinfo($this->request->getData()['idcard']['name'], PATHINFO_EXTENSION);

                // On crée le new nom
                $newName  = 'user-'.$rib->id.'-'.time().'-'.$ext;

                // On déplace le fichier de la mémoire temporaire vers le dossier avatars
                move_uploaded_file($this->request->getData()['idcard']['tmp_name'], WWW_ROOT.'img/cards/'.$newName);

                // On remplace le nom dans l'objet à sauvegarder
                $rib->idcard = $newName;

                // On essaie la sauvegarde (if else)
                if ($this->Ribs->save($rib)) {
                    if (!empty($oldName) && file_exists(WWW_ROOT.'img/cards/'.$oldName)) {
                        // On le supprime -> unlink
                        unlink(WWW_ROOT.'img/cards/'.$oldName);
                    }
                    return $this->redirect(['action'=> 'reglement']);
                } else {
                    $this->Flash->error('Modification impossible, veuillez recommencer');
                }

            } // Fin sinon

        } // Fin de test form
    } // Fin addiscard

    public function reglement() {

    } // Fin de reglement

    public function carte() {

    } // Fin de carte

    public function validation() {

    } // Fin de validation
}