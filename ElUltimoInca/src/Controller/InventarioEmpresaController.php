<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * InventarioEmpresa Controller
 *
 * @property \App\Model\Table\InventarioEmpresaTable $InventarioEmpresa
 *
 * @method \App\Model\Entity\InventarioEmpresa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InventarioEmpresaController extends AppController
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
            'contain' => ['ItemInventario']
        ];
        $inventarioEmpresa = $this->paginate($this->InventarioEmpresa);

        $this->set(compact('inventarioEmpresa'));
    }

    /**
     * View method
     *
     * @param string|null $id Inventario Empresa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inventarioEmpresa = $this->InventarioEmpresa->get($id, [
            'contain' => ['ItemInventario', 'AreaProduccion', 'HojaProduccionVino']
        ]);

        $this->set('inventarioEmpresa', $inventarioEmpresa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inventarioEmpresa = $this->InventarioEmpresa->newEntity();
        if ($this->request->is('post')) {
            $inventarioEmpresa = $this->InventarioEmpresa->patchEntity($inventarioEmpresa, $this->request->getData());
            if ($this->InventarioEmpresa->save($inventarioEmpresa)) {
                $this->Flash->success(__('The inventario empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventario empresa could not be saved. Please, try again.'));
        }
        $itemInventario = $this->InventarioEmpresa->ItemInventario->find('list', ['limit' => 200]);
        $this->set(compact('inventarioEmpresa', 'itemInventario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inventario Empresa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inventarioEmpresa = $this->InventarioEmpresa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inventarioEmpresa = $this->InventarioEmpresa->patchEntity($inventarioEmpresa, $this->request->getData());
            if ($this->InventarioEmpresa->save($inventarioEmpresa)) {
                $this->Flash->success(__('The inventario empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventario empresa could not be saved. Please, try again.'));
        }
        $itemInventario = $this->InventarioEmpresa->ItemInventario->find('list', ['limit' => 200]);
        $this->set(compact('inventarioEmpresa', 'itemInventario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inventario Empresa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inventarioEmpresa = $this->InventarioEmpresa->get($id);
        if ($this->InventarioEmpresa->delete($inventarioEmpresa)) {
            $this->Flash->success(__('The inventario empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The inventario empresa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
