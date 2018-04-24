<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HojaProduccionVino Controller
 *
 * @property \App\Model\Table\HojaProduccionVinoTable $HojaProduccionVino
 *
 * @method \App\Model\Entity\HojaProduccionVino[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HojaProduccionVinoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hojaProduccionVino = $this->paginate($this->HojaProduccionVino);

        $this->set(compact('hojaProduccionVino'));
    }

    /**
     * View method
     *
     * @param string|null $id Hoja Produccion Vino id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hojaProduccionVino = $this->HojaProduccionVino->get($id, [
            'contain' => []
        ]);

        $this->set('hojaProduccionVino', $hojaProduccionVino);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hojaProduccionVino = $this->HojaProduccionVino->newEntity();
        if ($this->request->is('post')) {
            $hojaProduccionVino = $this->HojaProduccionVino->patchEntity($hojaProduccionVino, $this->request->getData());
            if ($this->HojaProduccionVino->save($hojaProduccionVino)) {
                $this->Flash->success(__('The hoja produccion vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoja produccion vino could not be saved. Please, try again.'));
        }
        $this->set(compact('hojaProduccionVino'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hoja Produccion Vino id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hojaProduccionVino = $this->HojaProduccionVino->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hojaProduccionVino = $this->HojaProduccionVino->patchEntity($hojaProduccionVino, $this->request->getData());
            if ($this->HojaProduccionVino->save($hojaProduccionVino)) {
                $this->Flash->success(__('The hoja produccion vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoja produccion vino could not be saved. Please, try again.'));
        }
        $this->set(compact('hojaProduccionVino'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hoja Produccion Vino id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hojaProduccionVino = $this->HojaProduccionVino->get($id);
        if ($this->HojaProduccionVino->delete($hojaProduccionVino)) {
            $this->Flash->success(__('The hoja produccion vino has been deleted.'));
        } else {
            $this->Flash->error(__('The hoja produccion vino could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
