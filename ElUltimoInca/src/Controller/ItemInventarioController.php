<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemInventario Controller
 *
 * @property \App\Model\Table\ItemInventarioTable $ItemInventario
 *
 * @method \App\Model\Entity\ItemInventario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemInventarioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $itemInventario = $this->paginate($this->ItemInventario);

        $this->set(compact('itemInventario'));
    }

    /**
     * View method
     *
     * @param string|null $id Item Inventario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemInventario = $this->ItemInventario->get($id, [
            'contain' => ['InventarioEmpresa']
        ]);

        $this->set('itemInventario', $itemInventario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemInventario = $this->ItemInventario->newEntity();
        if ($this->request->is('post')) {
            $itemInventario = $this->ItemInventario->patchEntity($itemInventario, $this->request->getData());
            if ($this->ItemInventario->save($itemInventario)) {
                $this->Flash->success(__('El Item del inventario se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Item Inventario no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('itemInventario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item Inventario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemInventario = $this->ItemInventario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemInventario = $this->ItemInventario->patchEntity($itemInventario, $this->request->getData());
            if ($this->ItemInventario->save($itemInventario)) {
                $this->Flash->success(__('El item del inventario se guardo correctamente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Item Inventario no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('itemInventario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item Inventario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemInventario = $this->ItemInventario->get($id);
        if ($this->ItemInventario->delete($itemInventario)) {
            $this->Flash->success(__('El item del inventario se elimino correctamente.'));
        } else {
            $this->Flash->error(__('El Item Inventario no se pudo eliminar. Por favor vuelva intentarlo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
