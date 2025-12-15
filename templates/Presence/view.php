<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presence $presence
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Presence'), ['action' => 'edit', $presence->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Presence'), ['action' => 'delete', $presence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presence->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Presence'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Presence'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="presence view content">
            <h3><?= h($presence->status) ?></h3>
            <table>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= $presence->has('subject') ? $this->Html->link($presence->subject->name, ['controller' => 'Subjects', 'action' => 'view', $presence->subject->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $presence->has('student') ? $this->Html->link($presence->student->name, ['controller' => 'Students', 'action' => 'view', $presence->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($presence->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($presence->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester Id') ?></th>
                    <td><?= $this->Number->format($presence->semester_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($presence->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($presence->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
