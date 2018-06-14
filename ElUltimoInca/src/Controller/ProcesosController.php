<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Procesos Controller
 *
 * @property \App\Model\Table\ProcesosTable $Procesos
 *
 * @method \App\Model\Entity\Proceso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProcesosController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $procesos = $this->paginate($this->Procesos);

        $this->set(compact('procesos'));
    }

    /**
     * View method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proceso = $this->Procesos->get($id, [
            'contain' => []
        ]);

        $this->set('proceso', $proceso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proceso = $this->Procesos->newEntity();
        if ($this->request->is('post')) {
            $proceso = $this->Procesos->patchEntity($proceso, $this->request->getData());
            if ($this->Procesos->save($proceso)) {
                $this->Flash->success(__('The proceso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso could not be saved. Please, try again.'));
        }
        $this->set(compact('proceso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proceso = $this->Procesos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proceso = $this->Procesos->patchEntity($proceso, $this->request->getData());
            if ($this->Procesos->save($proceso)) {
                $this->Flash->success(__('The proceso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso could not be saved. Please, try again.'));
        }
        $this->set(compact('proceso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proceso = $this->Procesos->get($id);
        if ($this->Procesos->delete($proceso)) {
            $this->Flash->success(__('The proceso has been deleted.'));
        } else {
            $this->Flash->error(__('The proceso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
