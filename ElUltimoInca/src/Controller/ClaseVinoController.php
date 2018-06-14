<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * ClaseVino Controller
 *
 * @property \App\Model\Table\ClaseVinoTable $ClaseVino
 *
 * @method \App\Model\Entity\ClaseVino[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClaseVinoController extends AppController
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
        $claseVino = $this->paginate($this->ClaseVino);

        $this->set(compact('claseVino'));
    }

    /**
     * View method
     *
     * @param string|null $id Clase Vino id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $claseVino = $this->ClaseVino->get($id, [
            'contain' => ['AreaProduccion']
        ]);

        $this->set('claseVino', $claseVino);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $claseVino = $this->ClaseVino->newEntity();
        if ($this->request->is('post')) {
            $claseVino = $this->ClaseVino->patchEntity($claseVino, $this->request->getData());
            if ($this->ClaseVino->save($claseVino)) {
                $this->Flash->success(__('The clase vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clase vino could not be saved. Please, try again.'));
        }
        $this->set(compact('claseVino'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clase Vino id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $claseVino = $this->ClaseVino->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $claseVino = $this->ClaseVino->patchEntity($claseVino, $this->request->getData());
            if ($this->ClaseVino->save($claseVino)) {
                $this->Flash->success(__('The clase vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clase vino could not be saved. Please, try again.'));
        }
        $this->set(compact('claseVino'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clase Vino id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $claseVino = $this->ClaseVino->get($id);
        if ($this->ClaseVino->delete($claseVino)) {
            $this->Flash->success(__('The clase vino has been deleted.'));
        } else {
            $this->Flash->error(__('The clase vino could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
