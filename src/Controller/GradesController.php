<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Grades Controller
 *
 * @property \App\Model\Table\GradesTable $Grades
 * @method \App\Model\Entity\Grade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GradesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Teachers', 'Subjects', 'Assesments', 'Semseters'], // <-- DIPERBAIKI (Semesters -> Semseters)
        ];
        $grades = $this->paginate($this->Grades);

        $this->set(compact('grades'));
    }

    /**
     * View method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grade = $this->Grades->get($id, [
            'contain' => ['Students', 'Teachers', 'Subjects', 'Assesments', 'Semseters'], // <-- DIPERBAIKI (Semesters -> Semseters)
        ]);

        $this->set(compact('grade'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grade = $this->Grades->newEmptyEntity();
        if ($this->request->is('post')) {
            $grade = $this->Grades->patchEntity($grade, $this->request->getData());
            if ($this->Grades->save($grade)) {
                $this->Flash->success(__('The grade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grade could not be saved. Please, try again.'));
        }
        $students = $this->Grades->Students->find('list', ['limit' => 200])->all();
        $teachers = $this->Grades->Teachers->find('list', ['limit' => 200])->all();
        $subjects = $this->Grades->Subjects->find('list', ['limit' => 200])->all();
        $assesments = $this->Grades->Assesments->find('list', ['limit' => 200])->all();
        $semesters = $this->Grades->Semseters->find('list', ['limit' => 200])->all(); // <-- DIPERBAIKI (Semesters -> Semseters)
        $this->set(compact('grade', 'students', 'teachers', 'subjects', 'assesments', 'semesters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grade = $this->Grades->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grade = $this->Grades->patchEntity($grade, $this->request->getData());
            if ($this->Grades->save($grade)) {
                $this->Flash->success(__('The grade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grade could not be saved. Please, try again.'));
        }
        $students = $this->Grades->Students->find('list', ['limit' => 200])->all();
        $teachers = $this->Grades->Teachers->find('list', ['limit' => 200])->all();
        $subjects = $this->Grades->Subjects->find('list', ['limit' => 200])->all();
        $assesments = $this->Grades->Assesments->find('list', ['limit' => 200])->all();
        $semseters = $this->Grades->Semseters->find('list', ['limit' => 200])->all();
        $this->set(compact('grade', 'students', 'teachers', 'subjects', 'assesments', 'semseters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grade = $this->Grades->get($id);
        if ($this->Grades->delete($grade)) {
            $this->Flash->success(__('The grade has been deleted.'));
        } else {
            $this->Flash->error(__('The grade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}