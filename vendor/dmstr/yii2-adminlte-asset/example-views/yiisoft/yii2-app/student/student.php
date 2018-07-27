<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentsdetail-index">

    <section class="content">   
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header pull-right">
                         <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
                </div>
				<div class="tutor-index">

    			<h1><?= $this->title ?></h1>

    			
    				
    			
    
    			
   				 <!-- <div id="w0" class="grid-view"><div class="summary">Showing <b>1-4</b> of <b>4</b> items.</div> -->
				<table class="table table-striped table-bordered">
					<thead>
						<tr><th>#</th>
							<th><a href="/tutor/index?sort=id" data-sort="id">ID</a></th>
							<th><a href="/tutor/index?sort=user_id" data-sort="user_id">Username</a></th>
							<th><a href="/tutor/index?sort=firstname" data-sort="firstname">Email</a></th><th><a href="/tutor/index?sort=lastname" data-sort="lastname">Email Notification</a></th>
							<th><a href="/tutor/index?sort=phone" data-sort="phone">SMS Notification</a></th>
							<th class="action-column">&nbsp;</th>
						</tr>
						<!-- <tr id="w0-filters" class="filters">
							<td>&nbsp;</td><td><input type="text" class="form-control" name="UserSearch[id]"></td>
							<td><input type="text" class="form-control" name="UserSearch[username]"></td>
							<td><input type="text" class="form-control" name="UserSearch[email]"></td>
							<td><input type="text" class="form-control" name="UserSearch[email_notification]"></td>
							<td><input type="text" class="form-control" name="UserSearch[sms_notification]"></td>
							<td>&nbsp;</td>
						</tr> -->
					</thead>
					<tbody>
						<?php 
    			$i = 1;
    			foreach ($model as $value) {
    				
    			?>	
						<tr data-key="1">
							<td></td>
							<td><?= $i ?></td>
							<td><?= $value['attributes']['username'] ?></td>
							<td><?= $value['attributes']['email'] ?></td>
							<td><?= $value['attributes']['email_notification'] ?></td>
							<td><?= $value['attributes']['sms_notification'] ?></td>
							<td><a href="/student/view?id=1" title="View" aria-label="View" data-pjax="0">
								<span class="glyphicon glyphicon-eye-open"></span>
							   </a> 
							   <a href="/student/update?id=1" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> 
							   <a href="/student/delete?id=1" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>
						<?php 
						$i++;
						}
    			?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	</div>
</section>
</div>
