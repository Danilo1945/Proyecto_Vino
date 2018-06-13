<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Brix Controller
 *
 * @property \App\Model\Table\BrixTable $Brix
 *
 * @method \App\Model\Entity\Brix[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BrixController extends AppController
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
        $brix = $this->paginate($this->Brix);

        $this->set(compact('brix'));
    }

    /**
     * View method
     *
     * @param string|null $id Brix id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $brix = $this->Brix->get($id, [
            'contain' => ['AreaProduccion', 'HojaProductoTerminado']
        ]);

        $this->set('brix', $brix);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $brix = $this->Brix->newEntity();
        if ($this->request->is('post')) {
            $brix = $this->Brix->patchEntity($brix, $this->request->getData());
            if ($this->Brix->save($brix)) {
                $this->Flash->success(__('The brix has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The brix could not be saved. Please, try again.'));
        }
        $this->set(compact('brix'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Brix id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $brix = $this->Brix->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $brix = $this->Brix->patchEntity($brix, $this->request->getData());
            if ($this->Brix->save($brix)) {
                $this->Flash->success(__('The brix has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The brix could not be saved. Please, try again.'));
        }
        $this->set(compact('brix'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Brix id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $brix = $this->Brix->get($id);
        if ($this->Brix->delete($brix)) {
            $this->Flash->success(__('The brix has been deleted.'));
        } else {
            $this->Flash->error(__('The brix could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
