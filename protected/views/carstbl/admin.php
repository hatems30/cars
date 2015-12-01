<?php
/* @var $this CarstblController */
/* @var $model Carstbl */

$this->breadcrumbs=array(
	'Carstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Carstbl', 'url'=>array('index')),
	array('label'=>'Create Carstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#carstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">اضافة سيارة جديدة</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'carstbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'car_id',
		array('name' => 'brand_id','value' => '$data->brand->brand_name'),
                array('name' => 'model_id','value' => '$data->carmodel->model_name'),		
                array('name' => 'code_id','value' => '$data->code->code_name'),			
		'car_spec',
		array('name' => 'color_id','value' => '$data->color->color_name'),
		'car_year',
		'chass_no',
		'motor_no',
            /*
		'branch_id',
		'store_id',
		'supplier_id',
		'add_date',
		'cost_price',
		'off_price',
		'sale_price_from',
		'sale_price_to',
		'notes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>

