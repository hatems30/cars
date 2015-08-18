<?php
/* @var $this CarmodelController */
/* @var $model Carmodel */

$this->breadcrumbs=array(
	'Carmodels'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Carmodel', 'url'=>array('index')),
//	array('label'=>'Manage Carmodel', 'url'=>array('admin')),
//);
?>

<h1 class="ar"><?php echo Yii::t("data","Models");?></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="the-box">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>

