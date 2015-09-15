<?php
/* @var $this TraffictblController */
/* @var $model Traffictbl */

$this->breadcrumbs=array(
	'Traffictbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Traffictbl', 'url'=>array('index')),
	array('label'=>'Create Traffictbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#traffictbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">وحدات المرور</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'traffictbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'traffic_id',
		'traffic_name',
		'notes',
		array(
			'class'=>'CButtonColumn',
		),        
	),
)); ?>
       </div>