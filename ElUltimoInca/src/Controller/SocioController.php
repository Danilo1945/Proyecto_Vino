<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Socio Controller
 *
 * @property \App\Model\Table\SocioTable $Socio
 *
 * @method \App\Model\Entity\Socio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SocioController extends AppController
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
        $socio = $this->paginate($this->Socio);

        $this->set(compact('socio'));
    }

    /**
     * View method
     *
     * @param string|null $id Socio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socio = $this->Socio->get($id, [
            'contain' => []
        ]);

        $this->set('socio', $socio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socio = $this->Socio->newEntity();
        if ($this->request->is('post')) {
            $socio = $this->Socio->patchEntity($socio, $this->request->getData());
            if ($this->Socio->save($socio)) {
                $this->Flash->success(__('The socio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The socio could not be saved. Please, try again.'));
        }
        $this->set(compact('socio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Socio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socio = $this->Socio->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socio = $this->Socio->patchEntity($socio, $this->request->getData());
            if ($this->Socio->save($socio)) {
                $this->Flash->success(__('The socio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The socio could not be saved. Please, try again.'));
        }
        $this->set(compact('socio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Socio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socio = $this->Socio->get($id);
        if ($this->Socio->delete($socio)) {
            $this->Flash->success(__('The socio has been deleted.'));
        } else {
            $this->Flash->error(__('The socio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    
}
