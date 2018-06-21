<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UnidadMedida Controller
 *
 * @property \App\Model\Table\UnidadMedidaTable $UnidadMedida
 *
 * @method \App\Model\Entity\UnidadMedida[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnidadMedidaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $unidadMedida = $this->paginate($this->UnidadMedida);

        $this->set(compact('unidadMedida'));
    }

    /**
     * View method
     *
     * @param string|null $id Unidad Medida id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidadMedida = $this->UnidadMedida->get($id, [
            'contain' => ['CompraMatPri']
        ]);

        $this->set('unidadMedida', $unidadMedida);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidadMedida = $this->UnidadMedida->newEntity();
        if ($this->request->is('post')) {
            $unidadMedida = $this->UnidadMedida->patchEntity($unidadMedida, $this->request->getData());
            if ($this->UnidadMedida->save($unidadMedida)) {
                $this->Flash->success(__('La unidad de medida se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Unidad de Medida no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('unidadMedida'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidad Medida id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidadMedida = $this->UnidadMedida->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidadMedida = $this->UnidadMedida->patchEntity($unidadMedida, $this->request->getData());
            if ($this->UnidadMedida->save($unidadMedida)) {
                $this->Flash->success(__('La unidad de medida se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Unidad de Medida no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('unidadMedida'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidad Medida id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidadMedida = $this->UnidadMedida->get($id);
        if ($this->UnidadMedida->delete($unidadMedida)) {
            $this->Flash->success(__('La unidad de medida se elimino satisfactoriamente.'));
        } else {
            $this->Flash->error(__('El Unidad de Medida no se pudo guardar. Por favor vuelva intentarlo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
