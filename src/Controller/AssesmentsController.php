<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Assesments Controller
 *
 * @property \App\Model\Table\AssesmentsTable $Assesments
 * @method \App\Model\Entity\Assesment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssesmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $assesments = $this->paginate($this->Assesments);

        $this->set(compact('assesments'));
    }

    /**
     * View method
     *
     * @param string|null $id Assesment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assesment = $this->Assesments->get($id, [
            'contain' => ['Grades'],
        ]);

        $this->set(compact('assesment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assesment = $this->Assesments->newEmptyEntity();
        if ($this->request->is('post')) {
            $assesment = $this->Assesments->patchEntity($assesment, $this->request->getData());
            if ($this->Assesments->save($assesment)) {
                $this->Flash->success(__('The assesment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assesment could not be saved. Please, try again.'));
        }
        $this->set(compact('assesment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assesment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assesment = $this->Assesments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assesment = $this->Assesments->patchEntity($assesment, $this->request->getData());
            if ($this->Assesments->save($assesment)) {
                $this->Flash->success(__('The assesment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assesment could not be saved. Please, try again.'));
        }
        $this->set(compact('assesment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Assesment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assesment = $this->Assesments->get($id);
        if ($this->Assesments->delete($assesment)) {
            $this->Flash->success(__('The assesment has been deleted.'));
        } else {
            $this->Flash->error(__('The assesment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
