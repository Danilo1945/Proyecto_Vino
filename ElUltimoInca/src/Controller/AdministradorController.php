<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Administrador Controller
 *
 * @property \App\Model\Table\AdministradorTable $Administrador
 *
 * @method \App\Model\Entity\Administrador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministradorController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
//        $this->viewBuilder()->setHelpers(['Materialize.Form']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $administrador = $this->paginate($this->Administrador);

        $this->set(compact('administrador'));
    }

    /**
     * View method
     *
     * @param string|null $id Administrador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administrador = $this->Administrador->get($id, [
            'contain' => []
        ]);

        $this->set('administrador', $administrador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administrador = $this->Administrador->newEntity();
        if ($this->request->is('post')) {
            $administrador = $this->Administrador->patchEntity($administrador, $this->request->getData());
            if ($this->Administrador->save($administrador)) {
                $this->Flash->success(__('The administrador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrador could not be saved. Please, try again.'));
        }
        $this->set(compact('administrador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administrador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administrador = $this->Administrador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administrador = $this->Administrador->patchEntity($administrador, $this->request->getData());
            if ($this->Administrador->save($administrador)) {
                $this->Flash->success(__('The administrador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrador could not be saved. Please, try again.'));
        }
        $this->set(compact('administrador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administrador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administrador = $this->Administrador->get($id);
        if ($this->Administrador->delete($administrador)) {
            $this->Flash->success(__('The administrador has been deleted.'));
        } else {
            $this->Flash->error(__('The administrador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
