<?php
/* @var $this HowtblController */
/* @var $model Howtbl */

$this->breadcrumbs=array(
	'Howtbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Howtbl', 'url'=>array('index')),
	array('label'=>'Create Howtbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#howtbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">طرق الاتصال</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'howtbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'how_id',
		'how_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
