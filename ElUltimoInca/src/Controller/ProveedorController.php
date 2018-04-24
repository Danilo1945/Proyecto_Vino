<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Proveedor Controller
 *
 * @property \App\Model\Table\ProveedorTable $Proveedor
 *
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProveedorController extends AppController
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
        $proveedor = $this->paginate($this->Proveedor);

        $this->set(compact('proveedor'));
    }

    /**
     * View method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedor = $this->Proveedor->get($id, [
            'contain' => []
        ]);

        $this->set('proveedor', $proveedor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedor = $this->Proveedor->newEntity();
        if ($this->request->is('post')) {
            $proveedor = $this->Proveedor->patchEntity($proveedor, $this->request->getData());
            if ($this->Proveedor->save($proveedor)) {
                $this->Flash->success(__('The proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedor = $this->Proveedor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedor = $this->Proveedor->patchEntity($proveedor, $this->request->getData());
            if ($this->Proveedor->save($proveedor)) {
                $this->Flash->success(__('The proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedor = $this->Proveedor->get($id);
        if ($this->Proveedor->delete($proveedor)) {
            $this->Flash->success(__('The proveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
