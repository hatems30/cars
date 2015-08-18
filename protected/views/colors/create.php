<?php
/* @var $this ColorsController */
/* @var $model Colors */

$this->breadcrumbs=array(
	'Colors'=>array('index'),
	'Create',
);

?>

<h1 class="ar"><?php echo Yii::t("data","Colors");?></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="the-box">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>