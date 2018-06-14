<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * AreaProduccion Controller
 *
 * @property \App\Model\Table\AreaProduccionTable $AreaProduccion
 *
 * @method \App\Model\Entity\AreaProduccion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AreaProduccionController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->setHelpers(['Materialize.Form']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['InventarioEmpresa', 'UnidadMedida', 'Procesos', 'Brix', 'ClaseVino', 'Trabajador']
        ];
        $areaProduccion = $this->paginate($this->AreaProduccion);

        $this->set(compact('areaProduccion'));
    }

    /**
     * View method
     *
     * @param string|null $id Area Produccion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areaProduccion = $this->AreaProduccion->get($id, [
            'contain' => ['InventarioEmpresa', 'UnidadMedida', 'Procesos', 'Brix', 'ClaseVino', 'Trabajador']
        ]);

        $this->set('areaProduccion', $areaProduccion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areaProduccion = $this->AreaProduccion->newEntity();
        if ($this->request->is('post')) {
            $areaProduccion = $this->AreaProduccion->patchEntity($areaProduccion, $this->request->getData());
            if ($this->AreaProduccion->save($areaProduccion)) {
                $this->Flash->success(__('The area produccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area produccion could not be saved. Please, try again.'));
        }
        $inventarioEmpresa = $this->AreaProduccion->InventarioEmpresa->find('list', ['limit' => 200]);
        $unidadMedida = $this->AreaProduccion->UnidadMedida->find('list', ['limit' => 200]);
        $procesos = $this->AreaProduccion->Procesos->find('list', ['limit' => 200]);
        $brix = $this->AreaProduccion->Brix->find('list', ['limit' => 200]);
        $claseVino = $this->AreaProduccion->ClaseVino->find('list', ['limit' => 200]);
        $trabajador = $this->AreaProduccion->Trabajador->find('list', ['limit' => 200]);
        $this->set(compact('areaProduccion', 'inventarioEmpresa', 'unidadMedida', 'procesos', 'brix', 'claseVino', 'trabajador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Area Produccion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areaProduccion = $this->AreaProduccion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areaProduccion = $this->AreaProduccion->patchEntity($areaProduccion, $this->request->getData());
            if ($this->AreaProduccion->save($areaProduccion)) {
                $this->Flash->success(__('The area produccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area produccion could not be saved. Please, try again.'));
        }
        $inventarioEmpresa = $this->AreaProduccion->InventarioEmpresa->find('list', ['limit' => 200]);
        $unidadMedida = $this->AreaProduccion->UnidadMedida->find('list', ['limit' => 200]);
        $procesos = $this->AreaProduccion->Procesos->find('list', ['limit' => 200]);
        $brix = $this->AreaProduccion->Brix->find('list', ['limit' => 200]);
        $claseVino = $this->AreaProduccion->ClaseVino->find('list', ['limit' => 200]);
        $trabajador = $this->AreaProduccion->Trabajador->find('list', ['limit' => 200]);
        $this->set(compact('areaProduccion', 'inventarioEmpresa', 'unidadMedida', 'procesos', 'brix', 'claseVino', 'trabajador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Area Produccion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areaProduccion = $this->AreaProduccion->get($id);
        if ($this->AreaProduccion->delete($areaProduccion)) {
            $this->Flash->success(__('The area produccion has been deleted.'));
        } else {
            $this->Flash->error(__('The area produccion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
