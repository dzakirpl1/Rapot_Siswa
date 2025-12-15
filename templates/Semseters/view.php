<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semseter $semseter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Semseter'), ['action' => 'edit', $semseter->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Semseter'), ['action' => 'delete', $semseter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semseter->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Semseters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Semseter'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="semseters view content">
            <h3><?= h($semseter->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($semseter->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($semseter->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($semseter->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
