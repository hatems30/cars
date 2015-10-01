<?php
/* @var $this CarpricetblController */
/* @var $model Carpricetbl */

$this->breadcrumbs=array(
	'Carpricetbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Carpricetbl', 'url'=>array('index')),
	array('label'=>'Create Carpricetbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#carpricetbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><font size="5" color="blue">اسعار السيارات</font></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'carpricetbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'price_id',
		'car_id',
		'cost_price',
		'off_price',
		'sale_price_from',
		'sale_price_to',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
