<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * CompraMatPri Controller
 *
 * @property \App\Model\Table\CompraMatPriTable $CompraMatPri
 *
 * @method \App\Model\Entity\CompraMatPri[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompraMatPriController extends AppController
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
        $compraMatPri = $this->paginate($this->CompraMatPri);

        $this->set(compact('compraMatPri'));
    }

    /**
     * View method
     *
     * @param string|null $id Compra Mat Pri id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compraMatPri = $this->CompraMatPri->get($id, [
            'contain' => []
        ]);

        $this->set('compraMatPri', $compraMatPri);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compraMatPri = $this->CompraMatPri->newEntity();
        if ($this->request->is('post')) {
            $compraMatPri = $this->CompraMatPri->patchEntity($compraMatPri, $this->request->getData());
            if ($this->CompraMatPri->save($compraMatPri)) {
                $this->Flash->success(__('The compra mat pri has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra mat pri could not be saved. Please, try again.'));
        }
        $this->set(compact('compraMatPri'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compra Mat Pri id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compraMatPri = $this->CompraMatPri->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compraMatPri = $this->CompraMatPri->patchEntity($compraMatPri, $this->request->getData());
            if ($this->CompraMatPri->save($compraMatPri)) {
                $this->Flash->success(__('The compra mat pri has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra mat pri could not be saved. Please, try again.'));
        }
        $this->set(compact('compraMatPri'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Compra Mat Pri id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compraMatPri = $this->CompraMatPri->get($id);
        if ($this->CompraMatPri->delete($compraMatPri)) {
            $this->Flash->success(__('The compra mat pri has been deleted.'));
        } else {
            $this->Flash->error(__('The compra mat pri could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
