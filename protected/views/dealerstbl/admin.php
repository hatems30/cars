<?php
/* @var $this DealerstblController */
/* @var $model Dealerstbl */

$this->breadcrumbs=array(
	'Dealerstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dealerstbl', 'url'=>array('index')),
	array('label'=>'Create Dealerstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dealerstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">الموزعين</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dealerstbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'dealer_id',
		'dealer_name',
		'notes',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
