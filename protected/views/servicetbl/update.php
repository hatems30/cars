<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Servicetbls'=>array('index'),
	$model->service_id=>array('view','id'=>$model->service_id),
	'Update',
);
?>
<h1 class="ar"><?php echo Yii::t("data","Servicetbls");?></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="the-box">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>