<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Trabajador Controller
 *
 * @property \App\Model\Table\TrabajadorTable $Trabajador
 *
 * @method \App\Model\Entity\Trabajador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrabajadorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $trabajador = $this->paginate($this->Trabajador);

        $this->set(compact('trabajador'));
    }

    /**
     * View method
     *
     * @param string|null $id Trabajador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trabajador = $this->Trabajador->get($id, [
            'contain' => ['AreaProduccion', 'CompraMatPri', 'HojaProduccionVino', 'HojaProductoTerminado', 'HojaVentas', 'Pedidos']
        ]);

        $this->set('trabajador', $trabajador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trabajador = $this->Trabajador->newEntity();
        if ($this->request->is('post')) {
            $trabajador = $this->Trabajador->patchEntity($trabajador, $this->request->getData());
            if ($this->Trabajador->save($trabajador)) {
                $this->Flash->success(__('EL Trabajador se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Trabajadeo no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('trabajador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trabajador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trabajador = $this->Trabajador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trabajador = $this->Trabajador->patchEntity($trabajador, $this->request->getData());
            if ($this->Trabajador->save($trabajador)) {
                $this->Flash->success(__('EL Trabajador se guardo satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Trabajador no se pudo guardar. Por favor vuelva intentarlo.'));
        }
        $this->set(compact('trabajador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trabajador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trabajador = $this->Trabajador->get($id);
        if ($this->Trabajador->delete($trabajador)) {
            $this->Flash->success(__('EL Socio se elimino satisfactoriamente.'));
        } else {
            $this->Flash->error(__('El Trabajador no se pudo guardar. Por favor vuelva intentarlo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
