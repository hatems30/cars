<?php
/* @var $this BanksController */
/* @var $model Banks */

$this->breadcrumbs=array(
	'Banks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Banks', 'url'=>array('index')),
	array('label'=>'Create Banks', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#banks-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><font size="5" color="blue">البنوك</font></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'banks-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'bank_id',
		'bank_name',
                'factor',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
