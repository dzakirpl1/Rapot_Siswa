<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade $grade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Grade'), ['action' => 'edit', $grade->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Grade'), ['action' => 'delete', $grade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Grades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Grade'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="grades view content">
            <h3><?= h($grade->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $grade->has('student') ? $this->Html->link($grade->student->name, ['controller' => 'Students', 'action' => 'view', $grade->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Teacher') ?></th>
                    <td><?= $grade->has('teacher') ? $this->Html->link($grade->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $grade->teacher->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= $grade->has('subject') ? $this->Html->link($grade->subject->name, ['controller' => 'Subjects', 'action' => 'view', $grade->subject->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Assesment') ?></th>
                    <td><?= $grade->has('assesment') ? $this->Html->link($grade->assesment->name, ['controller' => 'Assesments', 'action' => 'view', $grade->assesment->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($grade->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester Id') ?></th>
                    <td><?= $this->Number->format($grade->semester_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($grade->score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($grade->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($grade->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
