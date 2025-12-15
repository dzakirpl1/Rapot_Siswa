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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assesment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assesment->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Assesments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assesments form content">
            <?= $this->Form->create($assesment) ?>
            <fieldset>
                <legend><?= __('Edit Assesment') ?></legend>
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
