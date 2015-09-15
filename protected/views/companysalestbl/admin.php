<?php
/* @var $this CompanysalestblController */
/* @var $model Companysalestbl */

$this->breadcrumbs=array(
	'Companysalestbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Companysalestbl', 'url'=>array('index')),
	array('label'=>'Create Companysalestbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#companysalestbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">مبيعات الشركات</font></b></div>           
               
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'companysalestbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'invoice_id',
		'invoice_date',
		 array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		 array('name' => 'employee_id','value' => '$data->employee->employee_name'),
		 array('name' => 'car_id','value' => '$data->car->chass_no'),
		'price',		
		array('name' => 'company_id','value' => '$data->company->company_name'),
            /*
		'notes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
