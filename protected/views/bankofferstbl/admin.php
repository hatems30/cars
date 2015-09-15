<?php
/* @var $this BankofferstblController */
/* @var $model Bankofferstbl */

$this->breadcrumbs=array(
	'Bankofferstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bankofferstbl', 'url'=>array('index')),
	array('label'=>'Create Bankofferstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bankofferstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><font size="5" color="blue">عروض البنوك</font></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bankofferstbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'offer_id',
		'offer_date',
		array('name' => 'customer_id','value' => '$data->customer->customer_name'),
		array('name' => 'brand_id','value' => '$data->brand->brand_name'),            
		array('name' => 'model_id','value' => '$data->model->model_name'),
		array('name' => 'code_id','value' => '$data->code->code_name'),		
		array('name' => 'bank_id','value' => '$data->bank->bank_name'),
		'banker',
		array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		array('name' => 'employee_id','value' => '$data->employee->employee_name'),
		'offer_status',
		/*
                'results',
		'notes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
