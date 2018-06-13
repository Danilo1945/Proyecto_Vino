<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MateriaPrima Controller
 *
 * @property \App\Model\Table\MateriaPrimaTable $MateriaPrima
 *
 * @method \App\Model\Entity\MateriaPrima[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MateriaPrimaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $materiaPrima = $this->paginate($this->MateriaPrima);

        $this->set(compact('materiaPrima'));
    }

    /**
     * View method
     *
     * @param string|null $id Materia Prima id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materiaPrima = $this->MateriaPrima->get($id, [
            'contain' => ['CompraMatPri', 'Prevee']
        ]);

        $this->set('materiaPrima', $materiaPrima);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materiaPrima = $this->MateriaPrima->newEntity();
        if ($this->request->is('post')) {
            $materiaPrima = $this->MateriaPrima->patchEntity($materiaPrima, $this->request->getData());
            if ($this->MateriaPrima->save($materiaPrima)) {
                $this->Flash->success(__('La Materia Prima se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La Materia Prima no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('materiaPrima'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Materia Prima id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materiaPrima = $this->MateriaPrima->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materiaPrima = $this->MateriaPrima->patchEntity($materiaPrima, $this->request->getData());
            if ($this->MateriaPrima->save($materiaPrima)) {
                $this->Flash->success(__('La Materia Prima se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La Materia Prima no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('materiaPrima'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Materia Prima id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materiaPrima = $this->MateriaPrima->get($id);
        if ($this->MateriaPrima->delete($materiaPrima)) {
            $this->Flash->success(__('La Materia Prima se elimino satisfactoriamente.'));
        } else {
            $this->Flash->error(__('La Materia Prima no se pudo eliminar. Por favor vuelva intentarlo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
