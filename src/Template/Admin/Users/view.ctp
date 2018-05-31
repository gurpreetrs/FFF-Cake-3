<section class="content-header">
    <h1>
    User Profile
    <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View</li>
    </ol>
</section>

<section class="content">
	<div class="row">
        <div class="col-xs-12">
        
        
        <div class="box">
  <div class="box-header">
    <h3 class="box-title"><?= h($user->name) ?></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <table class="table table-condensed">
      <tbody>
        <tr>
          
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
          <th><?= __('Name') ?></th>
          <td><?= h($user->name) ?></td>
        </tr>
        <tr>
          <th><?= __('Email') ?></th>
          <td><?= h($user->email) ?></td>
        </tr>
        <tr>
          <th><?= __('Address') ?></th>
          <td><?= h($user->address) ?></td>
        </tr>
        <tr>
          <th><?= __('Image') ?></th>
          <td>
            <?php if($user->image != ''){ ?>
            <img src="<?php echo $this->request->webroot; ?>images/users/<?php echo $user->image; ?>" style="width: 190px; margin-bottom: 20px;
            " class="previewHolder"/>
            <?php }else{ ?>
            <img src="<?php echo $this->request->webroot; ?>images/users/noimage.png" style="width: 190px; margin-bottom: 20px;
            " class="previewHolder"/>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td>
          <?php echo $this->Html->link(__('Edit Profile'), ['action' => 'edit', $user->id], ['class' => 'btn btn-info']); ?>
          <?php echo $this->Html->link(__('Change Password'), ['action' => 'changepassword', $user->id], ['class' => 'btn btn-warning']); ?>
          </td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>

        
        
        
        </div>
    </div>
</section>       