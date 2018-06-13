<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * HojaProductoTerminado Controller
 *
 * @property \App\Model\Table\HojaProductoTerminadoTable $HojaProductoTerminado
 *
 * @method \App\Model\Entity\HojaProductoTerminado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HojaProductoTerminadoController extends AppController
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
            'contain' => ['Pasteurizacion', 'Lote', 'Brix', 'Trabajador']
        ];
        $hojaProductoTerminado = $this->paginate($this->HojaProductoTerminado);

        $this->set(compact('hojaProductoTerminado'));
    }

    /**
     * View method
     *
     * @param string|null $id Hoja Producto Terminado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hojaProductoTerminado = $this->HojaProductoTerminado->get($id, [
            'contain' => ['Pasteurizacion', 'Lote', 'Brix', 'Trabajador']
        ]);

        $this->set('hojaProductoTerminado', $hojaProductoTerminado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hojaProductoTerminado = $this->HojaProductoTerminado->newEntity();
        if ($this->request->is('post')) {
            $hojaProductoTerminado = $this->HojaProductoTerminado->patchEntity($hojaProductoTerminado, $this->request->getData());
            if ($this->HojaProductoTerminado->save($hojaProductoTerminado)) {
                $this->Flash->success(__('The hoja producto terminado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoja producto terminado could not be saved. Please, try again.'));
        }
        $pasteurizacion = $this->HojaProductoTerminado->Pasteurizacion->find('list', ['limit' => 200]);
        $lote = $this->HojaProductoTerminado->Lote->find('list', ['limit' => 200]);
        $brix = $this->HojaProductoTerminado->Brix->find('list', ['limit' => 200]);
        $trabajador = $this->HojaProductoTerminado->Trabajador->find('list', ['limit' => 200]);
        $this->set(compact('hojaProductoTerminado', 'pasteurizacion', 'lote', 'brix', 'trabajador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hoja Producto Terminado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hojaProductoTerminado = $this->HojaProductoTerminado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hojaProductoTerminado = $this->HojaProductoTerminado->patchEntity($hojaProductoTerminado, $this->request->getData());
            if ($this->HojaProductoTerminado->save($hojaProductoTerminado)) {
                $this->Flash->success(__('The hoja producto terminado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoja producto terminado could not be saved. Please, try again.'));
        }
        $pasteurizacion = $this->HojaProductoTerminado->Pasteurizacion->find('list', ['limit' => 200]);
        $lote = $this->HojaProductoTerminado->Lote->find('list', ['limit' => 200]);
        $brix = $this->HojaProductoTerminado->Brix->find('list', ['limit' => 200]);
        $trabajador = $this->HojaProductoTerminado->Trabajador->find('list', ['limit' => 200]);
        $this->set(compact('hojaProductoTerminado', 'pasteurizacion', 'lote', 'brix', 'trabajador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hoja Producto Terminado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hojaProductoTerminado = $this->HojaProductoTerminado->get($id);
        if ($this->HojaProductoTerminado->delete($hojaProductoTerminado)) {
            $this->Flash->success(__('The hoja producto terminado has been deleted.'));
        } else {
            $this->Flash->error(__('The hoja producto terminado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
