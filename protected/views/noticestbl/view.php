<?php
/* @var $this NoticestblController */
/* @var $model Noticestbl */

$this->breadcrumbs=array(
	'Noticestbls'=>array('index'),
	$model->notice_id,
);

$this->menu=array(
	array('label'=>'List Noticestbl', 'url'=>array('index')),
	array('label'=>'Create Noticestbl', 'url'=>array('create')),
	array('label'=>'Update Noticestbl', 'url'=>array('update', 'id'=>$model->notice_id)),
	array('label'=>'Delete Noticestbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->notice_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Noticestbl', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'notice_id',
		'notes_date',
		'desc',
		//'image',
	),
)); ?>
<div alig="center"  >
    
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/'.$model->image,"image",array("width"=>400)); ?>        
        
</div>
