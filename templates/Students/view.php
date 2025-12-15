<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>



 <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $student->has('user') ? $this->Html->link($student->user->username, ['controller' => 'Users', 'action' => 'view', $student->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Kela') ?></th>
                    <td><?= $student->has('kela') ? $this->Html->link($student->kela->name, ['controller' => 'Kelas', 'action' => 'view', $student->kela->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nis') ?></th>
                    <td><?= h($student->nis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Addres') ?></th>
                    <td><?= h($student->addres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($student->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($student->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($student->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($student->updated) ?></td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </div>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $student->has('user') ? $this->Html->link($student->user->username, ['controller' => 'Users', 'action' => 'view', $student->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Kela') ?></th>
                    <td><?= $student->has('kela') ? $this->Html->link($student->kela->name, ['controller' => 'Kelas', 'action' => 'view', $student->kela->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nis') ?></th>
                    <td><?= h($student->nis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Addres') ?></th>
                    <td><?= h($student->addres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($student->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($student->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($student->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($student->updated) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Extracurricullars') ?></h4>
                <?php if (!empty($student->extracurricullars)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Precense Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Information') ?></th>
                            <th><?= __('Score') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->extracurricullars as $extracurricullars) : ?>
                        <tr>
                            <td><?= h($extracurricullars->id) ?></td>
                            <td><?= h($extracurricullars->student_id) ?></td>
                            <td><?= h($extracurricullars->precense_id) ?></td>
                            <td><?= h($extracurricullars->name) ?></td>
                            <td><?= h($extracurricullars->information) ?></td>
                            <td><?= h($extracurricullars->score) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Extracurricullars', 'action' => 'view', $extracurricullars->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Extracurricullars', 'action' => 'edit', $extracurricullars->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Extracurricullars', 'action' => 'delete', $extracurricullars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extracurricullars->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Grades') ?></h4>
                <?php if (!empty($student->grades)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Teacher Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Assesment Id') ?></th>
                            <th><?= __('Semester Id') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->grades as $grades) : ?>
                        <tr>
                            <td><?= h($grades->id) ?></td>
                            <td><?= h($grades->student_id) ?></td>
                            <td><?= h($grades->teacher_id) ?></td>
                            <td><?= h($grades->subject_id) ?></td>
                            <td><?= h($grades->assesment_id) ?></td>
                            <td><?= h($grades->semester_id) ?></td>
                            <td><?= h($grades->score) ?></td>
                            <td><?= h($grades->created) ?></td>
                            <td><?= h($grades->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Grades', 'action' => 'view', $grades->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Grades', 'action' => 'edit', $grades->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grades', 'action' => 'delete', $grades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grades->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Presence') ?></h4>
                <?php if (!empty($student->presence)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Semester Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->presence as $presence) : ?>
                        <tr>
                            <td><?= h($presence->id) ?></td>
                            <td><?= h($presence->subject_id) ?></td>
                            <td><?= h($presence->student_id) ?></td>
                            <td><?= h($presence->semester_id) ?></td>
                            <td><?= h($presence->status) ?></td>
                            <td><?= h($presence->created) ?></td>
                            <td><?= h($presence->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Presence', 'action' => 'view', $presence->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Presence', 'action' => 'edit', $presence->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Presence', 'action' => 'delete', $presence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presence->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
