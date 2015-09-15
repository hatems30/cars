<?php
/* @var $this CarmodelController */
/* @var $model Carmodel */

$this->breadcrumbs=array(
	'Carmodels'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Carmodel', 'url'=>array('index')),
	array('label'=>'Create Carmodel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#carmodel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">الموديلات</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'carmodel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'model_id',
		'model_name',
		array('name' => 'brand_id','value' => '$data->brand->brand_name'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
