<?php
/* @var $this StoresController */
/* @var $model Stores */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Stores', 'url'=>array('index')),
	array('label'=>'Create Stores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">المخــازن</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'store_id',
		'store_name',
                array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
