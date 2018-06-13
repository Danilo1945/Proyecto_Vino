<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Lote Controller
 *
 * @property \App\Model\Table\LoteTable $Lote
 *
 * @method \App\Model\Entity\Lote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoteController extends AppController
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
        $lote = $this->paginate($this->Lote);

        $this->set(compact('lote'));
    }

    /**
     * View method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lote = $this->Lote->get($id, [
            'contain' => ['HojaProductoTerminado']
        ]);

        $this->set('lote', $lote);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lote = $this->Lote->newEntity();
        if ($this->request->is('post')) {
            $lote = $this->Lote->patchEntity($lote, $this->request->getData());
            if ($this->Lote->save($lote)) {
                $this->Flash->success(__('The lote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lote could not be saved. Please, try again.'));
        }
        $this->set(compact('lote'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lote = $this->Lote->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lote = $this->Lote->patchEntity($lote, $this->request->getData());
            if ($this->Lote->save($lote)) {
                $this->Flash->success(__('The lote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lote could not be saved. Please, try again.'));
        }
        $this->set(compact('lote'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lote = $this->Lote->get($id);
        if ($this->Lote->delete($lote)) {
            $this->Flash->success(__('The lote has been deleted.'));
        } else {
            $this->Flash->error(__('The lote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
