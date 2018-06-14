<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\PedidosController;
use Cake\Event\Event;


/**
 * Menu Controller
 *
 */
class MenuController extends AppController

{
    
    public function  beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow('home');
        $this->Auth->allow('contactos');
        $this->Auth->allow('acercaDe');
    }
    
    
    public function index()
    {
       
    }
    public function index1()
    {
       
    }
     public function home()
    {
       
    }
     public function acercaDe ()
    {
       
    }
     public function catalogo ()
    {
       
    }
     public function contactos()
    {
       
    }
     public function pedidos ()
    {
       
    }
    
    public function add()
    {
        $obj=new MenuController();
      
               $obj->add()-> 
                
                
        $pedido = $this->Pedidos->newEntity();
        
        if ($this->request->is('post')) {
            
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('El pedido se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El pedido no pudo ser guardado. Inténtalo de nuevo.'));
        }
        $trabajador = $this->Pedidos->Trabajador->find('list', ['limit' => 200]);
        $users = $this->Pedidos->Users->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'trabajador', 'users'));
    }
 
    
    
    
}
