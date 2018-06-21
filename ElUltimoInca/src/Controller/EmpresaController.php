<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Empresa Controller
 *
 * @property \App\Model\Table\EmpresaTable $Empresa
 *
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpresaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $empresa = $this->paginate($this->Empresa);

        $this->set(compact('empresa'));
    }

    /**
     * View method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresa = $this->Empresa->get($id, [
            'contain' => ['Proveedor']
        ]);

        $this->set('empresa', $empresa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresa = $this->Empresa->newEntity();
        if ($this->request->is('post')) {
            $empresa = $this->Empresa->patchEntity($empresa, $this->request->getData());
            if ($this->Empresa->save($empresa)) {
                $this->Flash->success(__('La empresa se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La empresa no se pudo guardar. Por favor Vuelva Intentarlo'));
        }
        $this->set(compact('empresa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresa = $this->Empresa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresa = $this->Empresa->patchEntity($empresa, $this->request->getData());
            if ($this->Empresa->save($empresa)) {
                $this->Flash->success(__('La empresa se modificado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La empresa no se modifico. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('empresa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresa = $this->Empresa->get($id);
        if ($this->Empresa->delete($empresa)) {
            $this->Flash->success(__('La empresa se elimino.'));
        } else {
            $this->Flash->error(__('La empresa no se puede eliminar. Por favor vuelva intentarlo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
