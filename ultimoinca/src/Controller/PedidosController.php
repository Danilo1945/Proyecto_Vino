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
    
    
    
    
   
    
    
    
    
   public $id_ultima=0;
public function guardarPedido( $usuario_id,$date,$tra_id,$estado_cuenta,$observaciones){ 
        
//            debug($usuario_id);
//            debug($date);
//            debug($tra_id);
//            debug($estado_cuenta);
//            debug($observaciones);
        
        $pedido = $this->Pedidos->newEntity();
       

        if ($this->request->is('post')) {

            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
           $pedido->users_id=$usuario_id;
           $pedido->fecha_ven=$date;
           $pedido->trabajador_id=$tra_id;
           $pedido->estado_cuenta=$estado_cuenta;
           $pedido->observaciones_ven=$observaciones;
           
           
           
           
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('El Pedido se guardo satisfactoriamente.'));
                  
                  $insertedId = $pedido->id; 
                    $this->id_ultima=$insertedId;
                    
                  //debug($this->id_ultima );
          
                return $this->redirect(['action' => 'addclientes']);
            }
            $this->Flash->error(__('El Pedido no se pudo guardar. Por favor vuelva intentarlo.'));
        }

        
    }


    public function addclientes() {

        $detaPed = new DetallePedidosController();
        
        
        $detallePedido = $detaPed->getDetallePedido();
        $unidadMedida = $detaPed->getUnidadMedida();
        $produccionTotal = $detaPed->getProduccionTotal();
        $pedidos = $detaPed->getPedidos();


        $pedido = $this->Pedidos->newEntity();
        
        
       

        if ($this->request->is('post')) {
            
              debug($this->request->getData());
              
;            $user_id=$this->request->data['usuario'][0];


            date_default_timezone_set('America/Lima');
            $date=date('Y/m/d');
            $tra_id=9;
            $estado_cuenta="SIN ATENDER";
            $observacion="SIN OBSERVACIONES";
            debug($user_id);
            debug($date);
            debug($tra_id);
            debug($estado_cuenta);
            debug($observacion);
            
            $this->guardarPedido( $user_id,$date,$tra_id,$estado_cuenta,$observacion);
            
            
            //debug($this->request->data);
//            debug($this->request->data['periodo'][6]);
//            $a = $this->request->data['periodo'];
//          debug($a[1]);

            /// algoritmo clasdificación de datos

           $tamano = sizeof($this->request->data['periodo']);

            $cont = 0;

            $productos = array();

            $cont = 0;
            $cont2 = 0;
            for ($i = 0; $i < $tamano; $i++) {
                //debug('///// contador');
                //debug($cont);
                //debug('///// contador2');
                //debug($cont2);
                if ($cont2 == 0) {
                    $productos[$cont]['codigo'] = $this->request->data['periodo'][$i];
                }
                if ($cont2 == 1) {
                    $productos[$cont]['descripcion'] = $this->request->data['periodo'][$i];   
                }
                if ($cont2 == 2) {
                    $productos[$cont]['precio'] = $this->request->data['periodo'][$i]; 
                }
                if ($cont2 == 3) {
                    $productos[$cont]['cantidad'] = $this->request->data['periodo'][$i]; 
                }
                if ($cont2 == 4) {
                    $productos[$cont]['total'] = $this->request->data['periodo'][$i];
                    $cont2 =-1;
                    $cont++;
                }
                  $cont2++;
               
                
            } // FIN FOR

              $unimed=6;
              $proTotal=1;
           
            foreach ($productos as $a) {
                //debug("////////////////////////////////////////////");
                debug($a['codigo']);
                debug($a['descripcion']);
                debug($a['precio']);
                debug($a['cantidad']);
                debug($a['total']);
               $detaPed->GpedidosNew($a['cantidad'], $a['descripcion'],$a['precio'], $a['total'],$this->id_ultima, $unimed, $proTotal);
                // debug("////////////////////////////////////////////"); 
            }
        } // FIN IF





//            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
//            if ($this->Pedidos->save($pedido)) {
//                $this->Flash->success(__('El Pedido se guardo satisfactoriamente.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('El Pedido no se pudo guardar. Por favor vuelva intentarlo.'));
        // de la tabla cliente y trabajador
        $trabajador = $this->Pedidos->Trabajador->find('list', ['limit' => 200]);
        $users = $this->Pedidos->Users->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'trabajador', 'users'));
        $this->set(compact('detallePedido', 'pedidos', 'unidadMedida', 'produccionTotal'));
    }

}
