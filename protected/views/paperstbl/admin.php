<?php
/* @var $this PaperstblController */
/* @var $model Paperstbl */

$this->breadcrumbs=array(
	'Paperstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Paperstbl', 'url'=>array('index')),
	array('label'=>'Create Paperstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paperstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">تبليغ الاوراق</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'paperstbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'paper_id',
		'paper_date',
		array('name' => 'branch_id','value' => '$data->branch->branch_name'),            
		array('name' => 'car_id','value' => '$data->car->chass_no'),
		array('name' => 'supplier_id','value' => '$data->supplier->supplier_name'),
		'paper_status',
		/*
		'notes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
