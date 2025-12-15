<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Extracurricullars Controller
 *
 * @property \App\Model\Table\ExtracurricullarsTable $Extracurricullars
 * @method \App\Model\Entity\Extracurricullar[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExtracurricullarsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students'],
        ];
        $extracurricullars = $this->paginate($this->Extracurricullars);

        $this->set(compact('extracurricullars'));
    }

    /**
     * View method
     *
     * @param string|null $id Extracurricullar id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extracurricullar = $this->Extracurricullars->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('extracurricullar'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extracurricullar = $this->Extracurricullars->newEmptyEntity();
        if ($this->request->is('post')) {
            $extracurricullar = $this->Extracurricullars->patchEntity($extracurricullar, $this->request->getData());
            if ($this->Extracurricullars->save($extracurricullar)) {
                $this->Flash->success(__('The extracurricullar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extracurricullar could not be saved. Please, try again.'));
        }
        $students = $this->Extracurricullars->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('extracurricullar', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Extracurricullar id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extracurricullar = $this->Extracurricullars->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extracurricullar = $this->Extracurricullars->patchEntity($extracurricullar, $this->request->getData());
            if ($this->Extracurricullars->save($extracurricullar)) {
                $this->Flash->success(__('The extracurricullar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extracurricullar could not be saved. Please, try again.'));
        }
        $students = $this->Extracurricullars->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('extracurricullar', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Extracurricullar id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extracurricullar = $this->Extracurricullars->get($id);
        if ($this->Extracurricullars->delete($extracurricullar)) {
            $this->Flash->success(__('The extracurricullar has been deleted.'));
        } else {
            $this->Flash->error(__('The extracurricullar could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
