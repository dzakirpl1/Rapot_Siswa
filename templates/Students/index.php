<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Student> $students
 */
?>

<?php foreach ($students as $student): ?>
  <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img src="../img/photo/<?= h($student->photo) ?>" class="img-circle">             
               </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?= h($student->name)?></h3>
              <h5 class="widget-user-desc"><?= h($student->address) ?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><?= $this->Html->link(__('View'), ['action' => 'view', $student->id], ['class'=>'btn btn-info btn-xs']) ?></li>
                <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id], ['class'=>'btn btn-warning btn-xs']) ?>
                <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class'=>'btn btn-danger btn-xs']) ?></li></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
<?php endforeach; ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    STUDENTS

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
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('kelas_id') ?></th>
                    <th><?= $this->Paginator->sort('nis') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('addres') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $this->Number->format($student->id) ?></td>
                    <td><?= $student->has('user') ? $this->Html->link($student->user->username, ['controller' => 'Users', 'action' => 'view', $student->user->id]) : '' ?></td>
                    <td><?= $student->has('kela') ? $this->Html->link($student->kela->name, ['controller' => 'Kelas', 'action' => 'view', $student->kela->id]) : '' ?></td>
                    <td><?= h($student->nis) ?></td>
                    <td><?= h($student->name) ?></td>
                    <td><?= h($student->addres) ?></td>
                    <td><?= h($student->phone) ?></td>
                    <td><?= h($student->photo) ?></td>
                    <td><?= h($student->created) ?></td>
                    <td><?= h($student->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $student->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
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


