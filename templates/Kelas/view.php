<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kela $kela
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kela'), ['action' => 'edit', $kela->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kela'), ['action' => 'delete', $kela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kela->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kelas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kela'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kelas view content">
            <h3><?= h($kela->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($kela->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($kela->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester Id') ?></th>
                    <td><?= $this->Number->format($kela->semester_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
