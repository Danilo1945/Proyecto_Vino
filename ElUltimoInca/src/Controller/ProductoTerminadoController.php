<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductoTerminado Controller
 *
 * @property \App\Model\Table\ProductoTerminadoTable $ProductoTerminado
 *
 * @method \App\Model\Entity\ProductoTerminado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoTerminadoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $productoTerminado = $this->paginate($this->ProductoTerminado);

        $this->set(compact('productoTerminado'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto Terminado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productoTerminado = $this->ProductoTerminado->get($id, [
            'contain' => []
        ]);

        $this->set('productoTerminado', $productoTerminado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productoTerminado = $this->ProductoTerminado->newEntity();
        if ($this->request->is('post')) {
            $productoTerminado = $this->ProductoTerminado->patchEntity($productoTerminado, $this->request->getData());
            if ($this->ProductoTerminado->save($productoTerminado)) {
                $this->Flash->success(__('The producto terminado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto terminado could not be saved. Please, try again.'));
        }
        $this->set(compact('productoTerminado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto Terminado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productoTerminado = $this->ProductoTerminado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productoTerminado = $this->ProductoTerminado->patchEntity($productoTerminado, $this->request->getData());
            if ($this->ProductoTerminado->save($productoTerminado)) {
                $this->Flash->success(__('The producto terminado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto terminado could not be saved. Please, try again.'));
        }
        $this->set(compact('productoTerminado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto Terminado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productoTerminado = $this->ProductoTerminado->get($id);
        if ($this->ProductoTerminado->delete($productoTerminado)) {
            $this->Flash->success(__('The producto terminado has been deleted.'));
        } else {
            $this->Flash->error(__('The producto terminado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
