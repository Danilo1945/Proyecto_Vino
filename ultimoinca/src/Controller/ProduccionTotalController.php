<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProduccionTotal Controller
 *
 * @property \App\Model\Table\ProduccionTotalTable $ProduccionTotal
 *
 * @method \App\Model\Entity\ProduccionTotal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProduccionTotalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $produccionTotal = $this->paginate($this->ProduccionTotal);

        $this->set(compact('produccionTotal'));
    }

    /**
     * View method
     *
     * @param string|null $id Produccion Total id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produccionTotal = $this->ProduccionTotal->get($id, [
            'contain' => []
        ]);

        $this->set('produccionTotal', $produccionTotal);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produccionTotal = $this->ProduccionTotal->newEntity();
        if ($this->request->is('post')) {
            $produccionTotal = $this->ProduccionTotal->patchEntity($produccionTotal, $this->request->getData());
            if ($this->ProduccionTotal->save($produccionTotal)) {
                $this->Flash->success(__('El total de la producción se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El total de la producción no se pudo guardar. Inténtalo de nuevo.'));
        }
        $this->set(compact('produccionTotal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produccion Total id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produccionTotal = $this->ProduccionTotal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produccionTotal = $this->ProduccionTotal->patchEntity($produccionTotal, $this->request->getData());
            if ($this->ProduccionTotal->save($produccionTotal)) {
                $this->Flash->success(__('El total de la producción se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El total de la producción no se pudo guardar. Inténtalo de nuevo.'));
        }
        $this->set(compact('produccionTotal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produccion Total id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produccionTotal = $this->ProduccionTotal->get($id);
        if ($this->ProduccionTotal->delete($produccionTotal)) {
            $this->Flash->success(__('El total de la producción ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El total de la producción no pudo ser eliminado. Inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
