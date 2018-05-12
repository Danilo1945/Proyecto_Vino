<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Catalogo Controller
 *
 * @property \App\Model\Table\CatalogoTable $Catalogo
 *
 * @method \App\Model\Entity\Catalogo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatalogoController extends AppController
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
        $catalogo = $this->paginate($this->Catalogo);

        $this->set(compact('catalogo'));
    }

    /**
     * View method
     *
     * @param string|null $id Catalogo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catalogo = $this->Catalogo->get($id, [
            'contain' => []
        ]);

        $this->set('catalogo', $catalogo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catalogo = $this->Catalogo->newEntity();
        if ($this->request->is('post')) {
            $catalogo = $this->Catalogo->patchEntity($catalogo, $this->request->getData());
            if ($this->Catalogo->save($catalogo)) {
                $this->Flash->success(__('The catalogo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catalogo could not be saved. Please, try again.'));
        }
        $this->set(compact('catalogo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Catalogo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catalogo = $this->Catalogo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catalogo = $this->Catalogo->patchEntity($catalogo, $this->request->getData());
            if ($this->Catalogo->save($catalogo)) {
                $this->Flash->success(__('The catalogo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catalogo could not be saved. Please, try again.'));
        }
        $this->set(compact('catalogo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Catalogo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catalogo = $this->Catalogo->get($id);
        if ($this->Catalogo->delete($catalogo)) {
            $this->Flash->success(__('The catalogo has been deleted.'));
        } else {
            $this->Flash->error(__('The catalogo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
