<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * HojaVentas Controller
 *
 * @property \App\Model\Table\HojaVentasTable $HojaVentas
 *
 * @method \App\Model\Entity\HojaVenta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HojaVentasController extends AppController
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
            'contain' => ['Trabajador', 'Users']
        ];
        $hojaVentas = $this->paginate($this->HojaVentas);

        $this->set(compact('hojaVentas'));
    }

    /**
     * View method
     *
     * @param string|null $id Hoja Venta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hojaVenta = $this->HojaVentas->get($id, [
            'contain' => ['Trabajador', 'Users']
        ]);

        $this->set('hojaVenta', $hojaVenta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hojaVenta = $this->HojaVentas->newEntity();
        if ($this->request->is('post')) {
            $hojaVenta = $this->HojaVentas->patchEntity($hojaVenta, $this->request->getData());
            if ($this->HojaVentas->save($hojaVenta)) {
                $this->Flash->success(__('The hoja venta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoja venta could not be saved. Please, try again.'));
        }
        $trabajador = $this->HojaVentas->Trabajador->find('list', ['limit' => 200]);
        $users = $this->HojaVentas->Users->find('list', ['limit' => 200]);
        $this->set(compact('hojaVenta', 'trabajador', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hoja Venta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hojaVenta = $this->HojaVentas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hojaVenta = $this->HojaVentas->patchEntity($hojaVenta, $this->request->getData());
            if ($this->HojaVentas->save($hojaVenta)) {
                $this->Flash->success(__('The hoja venta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoja venta could not be saved. Please, try again.'));
        }
        $trabajador = $this->HojaVentas->Trabajador->find('list', ['limit' => 200]);
        $users = $this->HojaVentas->Users->find('list', ['limit' => 200]);
        $this->set(compact('hojaVenta', 'trabajador', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hoja Venta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hojaVenta = $this->HojaVentas->get($id);
        if ($this->HojaVentas->delete($hojaVenta)) {
            $this->Flash->success(__('The hoja venta has been deleted.'));
        } else {
            $this->Flash->error(__('The hoja venta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
