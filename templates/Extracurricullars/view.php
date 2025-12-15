<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extracurricullar $extracurricullar
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Extracurricullar'), ['action' => 'edit', $extracurricullar->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Extracurricullar'), ['action' => 'delete', $extracurricullar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extracurricullar->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Extracurricullars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Extracurricullar'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="extracurricullars view content">
            <h3><?= h($extracurricullar->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $extracurricullar->has('student') ? $this->Html->link($extracurricullar->student->name, ['controller' => 'Students', 'action' => 'view', $extracurricullar->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($extracurricullar->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($extracurricullar->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precense Id') ?></th>
                    <td><?= $this->Number->format($extracurricullar->precense_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($extracurricullar->score) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Information') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($extracurricullar->information)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
