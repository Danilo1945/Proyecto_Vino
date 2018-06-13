<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * DetallePedidos Controller
 *
 * @property \App\Model\Table\DetallePedidosTable $DetallePedidos
 *
 * @method \App\Model\Entity\DetallePedido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetallePedidosController extends AppController
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
        $detallePedidos = $this->paginate($this->DetallePedidos);

        $this->set(compact('detallePedidos'));
    }

    /**
     * View method
     *
     * @param string|null $id Detalle Pedido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detallePedido = $this->DetallePedidos->get($id, [
            'contain' => []
        ]);

        $this->set('detallePedido', $detallePedido);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detallePedido = $this->DetallePedidos->newEntity();
        if ($this->request->is('post')) {
            $detallePedido = $this->DetallePedidos->patchEntity($detallePedido, $this->request->getData());
            if ($this->DetallePedidos->save($detallePedido)) {
                $this->Flash->success(__('The detalle pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalle pedido could not be saved. Please, try again.'));
        }
        $this->set(compact('detallePedido'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalle Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detallePedido = $this->DetallePedidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detallePedido = $this->DetallePedidos->patchEntity($detallePedido, $this->request->getData());
            if ($this->DetallePedidos->save($detallePedido)) {
                $this->Flash->success(__('The detalle pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalle pedido could not be saved. Please, try again.'));
        }
        $this->set(compact('detallePedido'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalle Pedido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detallePedido = $this->DetallePedidos->get($id);
        if ($this->DetallePedidos->delete($detallePedido)) {
            $this->Flash->success(__('The detalle pedido has been deleted.'));
        } else {
            $this->Flash->error(__('The detalle pedido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
