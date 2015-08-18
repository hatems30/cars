<?php
/* @var $this supplierController */
/* @var $model supplier */

$this->breadcrumbs=array(
	'SupplierS'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List supplier', 'url'=>array('index')),
	array('label'=>'Manage supplier', 'url'=>array('admin')),
);
 * 
 */
?>

<h1 class="ar"><?php echo Yii::t("data","Suppliers");?></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="the-box">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>