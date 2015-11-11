<?php
/* @var $this OutstocktblController */
/* @var $model Outstocktbl */

$this->breadcrumbs=array(
	'Outstocktbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Outstocktbl', 'url'=>array('index')),
	array('label'=>'Create Outstocktbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#outstocktbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><font size="5" color="blue">Stock خارجي</font></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'outstocktbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'car_id',
		'car_name',
		'car_color',
		'notes',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>