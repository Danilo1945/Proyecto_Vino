<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Prevee Controller
 *
 * @property \App\Model\Table\PreveeTable $Prevee
 *
 * @method \App\Model\Entity\Prevee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PreveeController extends AppController
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
        $this->paginate = [
            'contain' => ['Proveedor', 'MateriaPrima']
        ];
        $prevee = $this->paginate($this->Prevee);

        $this->set(compact('prevee'));
    }

    /**
     * View method
     *
     * @param string|null $id Prevee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prevee = $this->Prevee->get($id, [
            'contain' => ['Proveedor', 'MateriaPrima']
        ]);

        $this->set('prevee', $prevee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prevee = $this->Prevee->newEntity();
        if ($this->request->is('post')) {
            $prevee = $this->Prevee->patchEntity($prevee, $this->request->getData());
            if ($this->Prevee->save($prevee)) {
                $this->Flash->success(__('The prevee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prevee could not be saved. Please, try again.'));
        }
        $proveedor = $this->Prevee->Proveedor->find('list', ['limit' => 200]);
        $materiaPrima = $this->Prevee->MateriaPrima->find('list', ['limit' => 200]);
        $this->set(compact('prevee', 'proveedor', 'materiaPrima'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prevee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prevee = $this->Prevee->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prevee = $this->Prevee->patchEntity($prevee, $this->request->getData());
            if ($this->Prevee->save($prevee)) {
                $this->Flash->success(__('The prevee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prevee could not be saved. Please, try again.'));
        }
        $proveedor = $this->Prevee->Proveedor->find('list', ['limit' => 200]);
        $materiaPrima = $this->Prevee->MateriaPrima->find('list', ['limit' => 200]);
        $this->set(compact('prevee', 'proveedor', 'materiaPrima'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prevee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prevee = $this->Prevee->get($id);
        if ($this->Prevee->delete($prevee)) {
            $this->Flash->success(__('The prevee has been deleted.'));
        } else {
            $this->Flash->error(__('The prevee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
