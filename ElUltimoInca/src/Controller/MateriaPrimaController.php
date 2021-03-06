<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * MateriaPrima Controller
 *
 * @property \App\Model\Table\MateriaPrimaTable $MateriaPrima
 *
 * @method \App\Model\Entity\MateriaPrima[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MateriaPrimaController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
//        $this->viewBuilder()->setHelpers(['Materialize.Form']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UnidadMedida']
        ];
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
            'contain' => ['UnidadMedida']
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
                $this->Flash->success(__('The materia prima has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materia prima could not be saved. Please, try again.'));
        }
        $unidadMedida = $this->MateriaPrima->UnidadMedida->find('list', ['limit' => 200]);
        $this->set(compact('materiaPrima', 'unidadMedida'));
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
                $this->Flash->success(__('The materia prima has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materia prima could not be saved. Please, try again.'));
        }
        $unidadMedida = $this->MateriaPrima->UnidadMedida->find('list', ['limit' => 200]);
        $this->set(compact('materiaPrima', 'unidadMedida'));
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
            $this->Flash->success(__('The materia prima has been deleted.'));
        } else {
            $this->Flash->error(__('The materia prima could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
