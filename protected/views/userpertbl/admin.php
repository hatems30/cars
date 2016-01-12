<?php
/* @var $this UserpertblController */
/* @var $model Userpertbl */

$this->breadcrumbs=array(
	'Userpertbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Userpertbl', 'url'=>array('index')),
	array('label'=>'Create Userpertbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#userpertbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">الصلاحيات</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php 
/*
$user = Yii::app()->user->username;
$user_data = User::model()->findByAttributes(array('username'=>$user));
$id = $user_data['id'];
*/
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'userpertbl-grid',
	//'dataProvider'=>$model->search($id),
        'dataProvider'=>$model->search($_REQUEST['id']),
	//'filter'=>$model,
	'columns'=>array(
		'per_id',
		
                array('name' => 'user_id','value' => '$data->user->username'),
                array('name' => 'controller_id','value' => '$data->controller->controller_form_name'),
		
		'per_type',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>