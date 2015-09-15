<?php
/* @var $this InscompsController */
/* @var $model Inscomps */

$this->breadcrumbs=array(
	'Inscomps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Inscomps', 'url'=>array('index')),
	array('label'=>'Create Inscomps', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inscomps-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">شركات التأمين</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inscomps-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'insurance_comp_id',
		'insurance_comp_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>