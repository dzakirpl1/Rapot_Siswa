<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Semseters Controller
 *
 * @property \App\Model\Table\SemsetersTable $Semseters
 * @method \App\Model\Entity\Semseter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SemsetersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $semseters = $this->paginate($this->Semseters);

        $this->set(compact('semseters'));
    }

    /**
     * View method
     *
     * @param string|null $id Semseter id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $semseter = $this->Semseters->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('semseter'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $semseter = $this->Semseters->newEmptyEntity();
        if ($this->request->is('post')) {
            $semseter = $this->Semseters->patchEntity($semseter, $this->request->getData());
            if ($this->Semseters->save($semseter)) {
                $this->Flash->success(__('The semseter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semseter could not be saved. Please, try again.'));
        }
        $this->set(compact('semseter'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Semseter id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $semseter = $this->Semseters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $semseter = $this->Semseters->patchEntity($semseter, $this->request->getData());
            if ($this->Semseters->save($semseter)) {
                $this->Flash->success(__('The semseter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semseter could not be saved. Please, try again.'));
        }
        $this->set(compact('semseter'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Semseter id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $semseter = $this->Semseters->get($id);
        if ($this->Semseters->delete($semseter)) {
            $this->Flash->success(__('The semseter has been deleted.'));
        } else {
            $this->Flash->error(__('The semseter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
