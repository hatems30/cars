<?php
/* @var $this SalestblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salestbls',
);

// Include the client scripts
$baseUrl = Yii::app()->baseUrl; 
 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/ajaxScript.js');


$this->menu=array(
	array('label'=>'Create Salestbl', 'url'=>array('create')),
	array('label'=>'Manage Salestbl', 'url'=>array('admin')),
);
?>

<h1>Salestbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
