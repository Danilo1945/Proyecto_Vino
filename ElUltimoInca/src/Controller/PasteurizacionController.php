<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Pasteurizacion Controller
 *
 * @property \App\Model\Table\PasteurizacionTable $Pasteurizacion
 *
 * @method \App\Model\Entity\Pasteurizacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PasteurizacionController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->setHelpers(['Materialize.Form']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pasteurizacion = $this->paginate($this->Pasteurizacion);

        $this->set(compact('pasteurizacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Pasteurizacion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pasteurizacion = $this->Pasteurizacion->get($id, [
            'contain' => ['HojaProductoTerminado']
        ]);

      
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pasteurizacion = $this->Pasteurizacion->newEntity();
        if ($this->request->is('post')) {
            $pasteurizacion = $this->Pasteurizacion->patchEntity($pasteurizacion, $this->request->getData());
            if ($this->Pasteurizacion->save($pasteurizacion)) {
                $this->Flash->success(__('The pasteurizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pasteurizacion could not be saved. Please, try again.'));
        }
        $this->set(compact('pasteurizacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pasteurizacion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pasteurizacion = $this->Pasteurizacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pasteurizacion = $this->Pasteurizacion->patchEntity($pasteurizacion, $this->request->getData());
            if ($this->Pasteurizacion->save($pasteurizacion)) {
                $this->Flash->success(__('The pasteurizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pasteurizacion could not be saved. Please, try again.'));
        }
        $this->set(compact('pasteurizacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pasteurizacion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pasteurizacion = $this->Pasteurizacion->get($id);
        if ($this->Pasteurizacion->delete($pasteurizacion)) {
            $this->Flash->success(__('The pasteurizacion has been deleted.'));
        } else {
            $this->Flash->error(__('The pasteurizacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
