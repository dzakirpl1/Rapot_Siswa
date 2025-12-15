<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extracurricullar $extracurricullar
 * @var \Cake\Collection\CollectionInterface|string[] $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Extracurricullars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="extracurricullars form content">
            <?= $this->Form->create($assesment) ?>
            <fieldset>
                <legend><?= __('Add Extracurricullar') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('weight');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

