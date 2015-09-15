<?php
/* @var $this CarcodeController */
/* @var $model Carcode */

$this->breadcrumbs=array(
	'Carcodes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Carcode', 'url'=>array('index')),
	array('label'=>'Create Carcode', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#carcode-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">الاكـــواد</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'carcode-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'code_id',
		'code_name',
		array('name' => 'brand_id','value' => '$data->brand->brand_name'),
                array('name' => 'model_id','value' => '$data->model->model_name'),		
		'code_01',
		'code_02',		
		'code_03',
		'code_04',
		'code_05',
            /*
		'code_06',
		'code_07',
		'code_08',
		'code_09',
		'code_10',
		'code_11',
		'code_12',
		'code_13',
		'code_14',
		'code_15',
		'code_16',
		'code_17',
		'code_18',
		'code_19',
		'code_20',
		'code_21',
		'code_22',
		'code_23',
		'code_24',
		'code_25',
		'code_26',
		'code_27',
		'code_28',
		'code_29',
		'code_30',
		'code_31',
		'code_32',
		'code_33',
		'code_34',
		'code_35',
		'code_36',
		'code_37',
		'code_38',
		'code_39',
		'code_40',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>