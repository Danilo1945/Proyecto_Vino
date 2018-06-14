<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * DetallePedidos Controller
 *
 * @property \App\Model\Table\DetallePedidosTable $DetallePedidos
 *
 * @method \App\Model\Entity\DetallePedido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetallePedidosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Pedidos', 'UnidadMedida', 'ProduccionTotal']
        ];
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
    public function view($id = null) {
        $detallePedido = $this->DetallePedidos->get($id, [
            'contain' => ['Pedidos', 'UnidadMedida', 'ProduccionTotal']
        ]);

        $this->set('detallePedido', $detallePedido);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $detallePedido = $this->DetallePedidos->newEntity();
        if ($this->request->is('post')) {
            $detallePedido = $this->DetallePedidos->patchEntity($detallePedido, $this->request->getData());
            if ($this->DetallePedidos->save($detallePedido)) {
                $this->Flash->success(__('El detalle pedido a sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El detalle pedido no pudo ser guardado. porfavor intentelo de nuevo.'));
        }
        $pedidos = $this->DetallePedidos->Pedidos->find('list', ['limit' => 200]);

        $unidadMedida = $this->DetallePedidos->UnidadMedida->find('list', ['limit' => 200]);
        $produccionTotal = $this->DetallePedidos->ProduccionTotal->find('list', ['limit' => 200]);
        $this->set(compact('detallePedido', 'pedidos', 'unidadMedida', 'produccionTotal'));
    }

    public function getUnidadMedida() {
        $unidadMedida = $this->DetallePedidos->UnidadMedida->find('list', ['limit' => 200]);

        return $unidadMedida;
    }

    public function getProduccionTotal() {
        $produccionTotal = $this->DetallePedidos->ProduccionTotal->find('list', ['limit' => 200]);

        return $produccionTotal;
    }

    public function getDetallePedido() {
        $detallePedido = $this->DetallePedidos->newEntity();
        
        return $detallePedido;
    }

    public function getPedidos() {
        $pedidos = $this->DetallePedidos->Pedidos->find('list', ['limit' => 200]);
        
        return $pedidos;
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalle Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $detallePedido = $this->DetallePedidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detallePedido = $this->DetallePedidos->patchEntity($detallePedido, $this->request->getData());
            if ($this->DetallePedidos->save($detallePedido)) {
                $this->Flash->success(__('El detalle pedido se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El detalle pedido no a sido guardado. porfavor intentalo de nuevo.'));
        }
        $pedidos = $this->DetallePedidos->Pedidos->find('list', ['limit' => 200]);
        $unidadMedida = $this->DetallePedidos->UnidadMedida->find('list', ['limit' => 200]);
        $produccionTotal = $this->DetallePedidos->ProduccionTotal->find('list', ['limit' => 200]);
        $this->set(compact('detallePedido', 'pedidos', 'unidadMedida', 'produccionTotal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalle Pedido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $detallePedido = $this->DetallePedidos->get($id);
        if ($this->DetallePedidos->delete($detallePedido)) {
            $this->Flash->success(__('El detalle pedido a sido eliminado.'));
        } else {
            $this->Flash->error(__('El detalle pedido no a podido ser eliminado. Porfavor, intentalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
