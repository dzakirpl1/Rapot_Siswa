<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Presence Controller
 *
 * @property \App\Model\Table\PresenceTable $Presence
 * @method \App\Model\Entity\Presence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PresenceController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subjects', 'Students'],
        ];
        $presence = $this->paginate($this->Presence);

        $this->set(compact('presence'));
    }

    /**
     * View method
     *
     * @param string|null $id Presence id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $presence = $this->Presence->get($id, [
            'contain' => ['Subjects', 'Students', 'semseters'],
        ]);

        $this->set(compact('presence'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $presence = $this->Presence->newEmptyEntity();
        if ($this->request->is('post')) {
            $presence = $this->Presence->patchEntity($presence, $this->request->getData());
            if ($this->Presence->save($presence)) {
                $this->Flash->success(__('The presence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presence could not be saved. Please, try again.'));
        }
        $subjects = $this->Presence->Subjects->find('list', ['limit' => 200])->all();
        $students = $this->Presence->Students->find('list', ['limit' => 200])->all();
        $semseters = $this->Presence->Semseters->find('list', ['limit' => 200])->all();     
        $this->set(compact('presence', 'subjects', 'students', 'semseters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Presence id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $presence = $this->Presence->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $presence = $this->Presence->patchEntity($presence, $this->request->getData());
            if ($this->Presence->save($presence)) {
                $this->Flash->success(__('The presence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presence could not be saved. Please, try again.'));
        }
        $subjects = $this->Presence->Subjects->find('list', ['limit' => 200])->all();
        $students = $this->Presence->Students->find('list', ['limit' => 200])->all();
        $semseters = $this->Presence->Semseters->find('list', ['limit' => 200])->all();
        $this->set(compact('presence', 'subjects', 'students', 'semseters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Presence id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $presence = $this->Presence->get($id);
        if ($this->Presence->delete($presence)) {
            $this->Flash->success(__('The presence has been deleted.'));
        } else {
            $this->Flash->error(__('The presence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
