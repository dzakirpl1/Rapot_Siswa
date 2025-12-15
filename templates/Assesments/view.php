<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assesment $assesment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Assesment'), ['action' => 'edit', $assesment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assesment'), ['action' => 'delete', $assesment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assesment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assesments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assesment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assesments view content">
            <h3><?= h($assesment->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($assesment->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assesment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= $this->Number->format($assesment->weight) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Grades') ?></h4>
                <?php if (!empty($assesment->grades)) : ?>
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
                        <?php foreach ($assesment->grades as $grades) : ?>
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
        </div>
    </div>
</div>
