<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * SalidaHojaInventario Controller
 *
 * @property \App\Model\Table\SalidaHojaInventarioTable $SalidaHojaInventario
 *
 * @method \App\Model\Entity\SalidaHojaInventario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalidaHojaInventarioController extends AppController
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
        $salidaHojaInventario = $this->paginate($this->SalidaHojaInventario);

        $this->set(compact('salidaHojaInventario'));
    }

    /**
     * View method
     *
     * @param string|null $id Salida Hoja Inventario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salidaHojaInventario = $this->SalidaHojaInventario->get($id, [
            'contain' => []
        ]);

        $this->set('salidaHojaInventario', $salidaHojaInventario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salidaHojaInventario = $this->SalidaHojaInventario->newEntity();
        if ($this->request->is('post')) {
            $salidaHojaInventario = $this->SalidaHojaInventario->patchEntity($salidaHojaInventario, $this->request->getData());
            if ($this->SalidaHojaInventario->save($salidaHojaInventario)) {
                $this->Flash->success(__('The salida hoja inventario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salida hoja inventario could not be saved. Please, try again.'));
        }
        $this->set(compact('salidaHojaInventario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Salida Hoja Inventario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salidaHojaInventario = $this->SalidaHojaInventario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salidaHojaInventario = $this->SalidaHojaInventario->patchEntity($salidaHojaInventario, $this->request->getData());
            if ($this->SalidaHojaInventario->save($salidaHojaInventario)) {
                $this->Flash->success(__('The salida hoja inventario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salida hoja inventario could not be saved. Please, try again.'));
        }
        $this->set(compact('salidaHojaInventario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Salida Hoja Inventario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salidaHojaInventario = $this->SalidaHojaInventario->get($id);
        if ($this->SalidaHojaInventario->delete($salidaHojaInventario)) {
            $this->Flash->success(__('The salida hoja inventario has been deleted.'));
        } else {
            $this->Flash->error(__('The salida hoja inventario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
