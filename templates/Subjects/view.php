<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subjects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subjects view content">
            <h3><?= h($subject->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subject->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subject->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Information') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($subject->information)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Grades') ?></h4>
                <?php if (!empty($subject->grades)) : ?>
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
                        <?php foreach ($subject->grades as $grades) : ?>
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
                <?php if (!empty($subject->presence)) : ?>
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
                        <?php foreach ($subject->presence as $presence) : ?>
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
            <div class="related">
                <h4><?= __('Related Teachers') ?></h4>
                <?php if (!empty($subject->teachers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Nip') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subject->teachers as $teachers) : ?>
                        <tr>
                            <td><?= h($teachers->id) ?></td>
                            <td><?= h($teachers->user_id) ?></td>
                            <td><?= h($teachers->name) ?></td>
                            <td><?= h($teachers->nip) ?></td>
                            <td><?= h($teachers->phone) ?></td>
                            <td><?= h($teachers->subject_id) ?></td>
                            <td><?= h($teachers->created) ?></td>
                            <td><?= h($teachers->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Teachers', 'action' => 'view', $teachers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Teachers', 'action' => 'edit', $teachers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teachers', 'action' => 'delete', $teachers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teachers->id)]) ?>
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
