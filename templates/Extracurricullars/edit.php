<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extracurricullar $extracurricullar
 * @var string[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $extracurricullar->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $extracurricullar->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Extracurricullars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="extracurricullars form content">
            <?= $this->Form->create($extracurricullar) ?>
            <fieldset>
                <legend><?= __('Edit Extracurricullar') ?></legend>
                <?php
                    echo $this->Form->control('student_id', ['options' => $students]);
                    echo $this->Form->control('precense_id');
                    echo $this->Form->control('name');
                    echo $this->Form->control('information');
                    echo $this->Form->control('score');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
