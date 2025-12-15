<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Users

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('subject_id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('semester_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($presence as $presence): ?>
                <tr>
                    <td><?= $this->Number->format($presence->id) ?></td>
                    <td><?= $presence->has('subject') ? $this->Html->link($presence->subject->name, ['controller' => 'Subjects', 'action' => 'view', $presence->subject->id]) : '' ?></td>
                    <td><?= $presence->has('student') ? $this->Html->link($presence->student->name, ['controller' => 'Students', 'action' => 'view', $presence->student->id]) : '' ?></td>
                    <td><?= $this->Number->format($presence->semester_id) ?></td>
                    <td><?= h($presence->status) ?></td>
                    <td><?= h($presence->created) ?></td>
                    <td><?= h($presence->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $presence->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $presence->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $presence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presence->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>



