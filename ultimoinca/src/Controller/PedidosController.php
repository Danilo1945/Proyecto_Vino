<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\DetallePedidosController;

/**
 * Pedidos Controller
 *
 * @property \App\Model\Table\PedidosTable $Pedidos
 *
 * @method \App\Model\Entity\Pedido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PedidosController extends AppController {
   
    
    
    
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function isAuthorized($user) {
        if (isset($user['roles_id']) and $user['roles_id'] === 3) {

            if (in_array($this->request->action, ['addclientes', 'add'])) {
                return true;
            }
        }
 
   
        return parent:: isAuthorized($user);
    }

    public function index() {
        $this->paginate = [
            'contain' => ['Trabajador', 'Users']
        ];
        $pedidos = $this->paginate($this->Pedidos);

        $this->set(compact('pedidos'));
    }

    /**
     * View method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $pedido = $this->Pedidos->get($id, [
            'contain' => ['Trabajador', 'Users']
        ]);

        $this->set('pedido', $pedido);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $pedido = $this->Pedidos->newEntity();


        if ($this->request->is('post')) {

            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('El Pedido se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Pedido no se pudo guardar. Por favor vuelva intentarlo.'));
        }

        $trabajador = $this->Pedidos->Trabajador->find('list', ['limit' => 200]);
        $users = $this->Pedidos->Users->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'trabajador', 'users'));
    }

    public function add2($producto, $cantidad) {
        $pedido = $this->Pedidos->newEntity();


        if ($this->request->is('post')) {

            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            $user->roles_id = 3;


            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('El Pedido se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Pedido no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $trabajador = $this->Pedidos->Trabajador->find('list', ['limit' => 200]);
        $users = $this->Pedidos->Users->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'trabajador', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $pedido = $this->Pedidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('El Pedido se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Pedido no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $trabajador = $this->Pedidos->Trabajador->find('list', ['limit' => 200]);
        $users = $this->Pedidos->Users->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'trabajador', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $pedido = $this->Pedidos->get($id);
        if ($this->Pedidos->delete($pedido)) {
            $this->Flash->success(__('El Pedido se elimino satisfactoriamente.'));
        } else {
            $this->Flash->error(__('El Pedido no se pudo eliminar. Por favor vuelva intentarlo. '));
        }

        return $this->redirect(['action' => 'index']);
    }


    
    
    
    
    public function addclientes() {
 $detaPed= new DetallePedidosController();
 $detallePedido= $detaPed->getDetallePedido();
 $unidadMedida= $detaPed->getUnidadMedida();
 $produccionTotal =$detaPed->getProduccionTotal();
 $pedidos =$detaPed->getPedidos();


        $pedido = $this->Pedidos->newEntity();


        if ($this->request->is('post')) {
            debug($this->request->data);
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('El Pedido se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Pedido no se pudo guardar. Por favor vuelva intentarlo.'));
        }


        // de la tabla cliente y trabajador
        $trabajador = $this->Pedidos->Trabajador->find('list', ['limit' => 200]);

        $users = $this->Pedidos->Users->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'trabajador', 'users'));
        $this->set(compact('detallePedido', 'pedidos', 'unidadMedida', 'produccionTotal'));
    }

}
