<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Kelas Controller
 *
 * @property \App\Model\Table\KelasTable $Kelas
 * @method \App\Model\Entity\Kela[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KelasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['semseters'],
        ];
        $kelas = $this->paginate($this->Kelas);

        $this->set(compact('kelas'));
    }

    /**
     * View method
     *
     * @param string|null $id Kela id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kela = $this->Kelas->get($id, [
            'contain' => ['semseters'],
        ]);

        $this->set(compact('kela'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kela = $this->Kelas->newEmptyEntity();
        if ($this->request->is('post')) {
            $kela = $this->Kelas->patchEntity($kela, $this->request->getData());
            if ($this->Kelas->save($kela)) {
                $this->Flash->success(__('The kela has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kela could not be saved. Please, try again.'));
        }
        $semseters = $this->Kelas->semseters->find('list', ['limit' => 200])->all();
        $this->set(compact('kela', 'semseters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kela id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kela = $this->Kelas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kela = $this->Kelas->patchEntity($kela, $this->request->getData());
            if ($this->Kelas->save($kela)) {
                $this->Flash->success(__('The kela has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kela could not be saved. Please, try again.'));
        }
       $semseters = $this->Kelas->semseters->find('list', ['limit' => 200])->all();
        $this->set(compact('kela', 'semseters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kela id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kela = $this->Kelas->get($id);
        if ($this->Kelas->delete($kela)) {
            $this->Flash->success(__('The kela has been deleted.'));
        } else {
            $this->Flash->error(__('The kela could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
