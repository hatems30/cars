<?php
/* @var $this NoticestblController */
/* @var $model Noticestbl */

$this->breadcrumbs=array(
	'Noticestbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Noticestbl', 'url'=>array('index')),
	array('label'=>'Create Noticestbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#noticestbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><font size="5" color="blue">اشعارات</font></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'noticestbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'notice_id',
		'notes_date',
		'desc',
		'image',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>

