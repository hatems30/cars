<?php
/* @var $this SalestblController */
/* @var $model Salestbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salestbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data',),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


       <div class="panel panel-default"> 
                  <div class="panel-heading">
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">مبيعات العملاء</font></b></div>           
               
           </div>
           </div>         
           <div class="panel-body">
           <div class="container-fluid">        
            <div class="row">
                <div class ="col-sm-3" >	
                <?php echo $form->labelEx($model,'car_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                <?php
                     if($this->action->Id=='update')                         
                       {
                            echo $form->textField($model,'car_id' ,array('class'=>'form-control' , 'class'=>'hidden'));                       
                            echo $form->textField(Carstbl::model()->findByAttributes(array('car_id' => $model->car_id)),'chass_no' ,array('class'=>'form-control' , 'readonly'=>'true'));
                       } 
                       elseif ($this->action->Id=='create')
                       {                         
                            echo $form->textField($model,'car_id' ,array('class'=>'form-control' , 'class'=>'hidden' , 'value'=>$_REQUEST['car_id']));                       
                            echo $form->textField(Carstbl::model()->findByAttributes(array("car_id"=>$_REQUEST['car_id'])),'chass_no' ,array('class'=>'form-control' , 'readonly'=>'true'));
                       }   
                     echo $form->error($model,'car_id'); 
                     
                ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>		
                    <?php
                       if($this->action->Id=='update')                         
                       {
                            echo $form->textField($model,'branch_id' ,array('class'=>'form-control' , 'class'=>'hidden'));                       
                            echo $form->textField(Branchs::model()->findByAttributes(array('branch_id' => $model->branch_id)),'branch_name' ,array('class'=>'form-control' , 'readonly'=>'true'));
                       } 
                       elseif ($this->action->Id=='create')
                       {
                            $user_name = Yii::app()->user->username;
                            $emps = User::model()->findBySql("SELECT `user`.branch_id FROM `user` where `user`.username = '$user_name'");                              
                            echo $form->textField($model,'branch_id' ,array('class'=>'form-control' , 'class'=>'hidden' , 'value'=>$emps['branch_id']));                       
                            echo $form->textField(Branchs::model()->findByAttributes(array('branch_id'=>$emps['branch_id'])),'branch_name' ,array('class'=>'form-control' , 'readonly'=>'true'));                           
                       }
                ?>
                <?php echo $form->error($model,'branch_id'); ?>
                </div>       
                
            </div>	
                                                       </br>           
            <div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'invoice_date'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php                    
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                                                          'name'=>'Salestbl[invoice_date]', 
                                                                          'model' => $model,
                                                                          'id' => 'Salestbl_invoice_date'       ,             
                                                                          'value' => $model->invoice_date,
                                                                          'options'=>array( 'showButtonPanel'=>true,'dateFormat'=>'yy-mm-dd',),
                                                                          'htmlOptions'=>array('class'=>'form-control','readonly'=>'true'),
                                                                        ));                                           
                ?>
		<?php echo $form->error($model,'invoice_date'); ?>
                </div>
                
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'employee_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>                    
		<?php 
                        if($this->action->Id=='update')                         
                       {
                            echo $form->textField($model,'employee_id' ,array('class'=>'form-control' , 'class'=>'hidden'));                       
                            echo $form->textField(Employees::model()->findByAttributes(array('employee_id' => $model->employee_id)),'employee_name' ,array('class'=>'form-control' , 'readonly'=>'true'));
		            echo $form->error($model,'employee_id');     
                       } 
                       elseif ($this->action->Id=='create')
                       {
                            $user_name = Yii::app()->user->username;
                            $emps = Employees::model()->findBySql("SELECT employees.employee_id FROM `user` INNER JOIN employees ON `user`.employee_id = employees.employee_id where `user`.username ='$user_name' LIMIT 1" , 'employee_id');                                                                                                                                        
                            echo $form->textField($model,'employee_id' ,array('class'=>'form-control' , 'class'=>'hidden' , 'value'=>$emps['employee_id']));                       
                            echo $form->textField(Employees::model()->findBysql("SELECT employees.employee_id,employees.employee_name FROM `user` INNER JOIN employees ON `user`.employee_id = employees.employee_id where `user`.username ='$user_name' LIMIT 1"),'employee_name' ,array('class'=>'form-control' , 'readonly'=>'true'));                           
		            echo $form->error($model,'employee_id');  
                       }
                ?>  		
                <?php echo $form->error($model,'employee_id'); ?>                    
                </div>     
                
            </div>
                                                          </br>                                                                                       
	<div class="row">
                <div class ="col-sm-3">	
		<?php echo $form->labelEx($model,'customer_id'); ?>		
                </div>
                <div class ="col-sm-3" dir =rtl>	
                <?php echo $form->dropDownList($model,'customer_id', CHtml::listData(Customers::model()->findAll(), 'customer_id', 'customer_name') ,array('empty'=> '', 'class'=>'form-control')); ?>  
                <?php echo $form->error($model,'customer_id'); ?>
                </div>
	        <div class ="col-sm-3">   
		<?php echo $form->labelEx($model,'finance_type'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>    
                <?php echo $form->dropDownList($model,'finance_type',array("نقدي"=>"نقدي","قسط مباشر"=>"قسط مباشر" ,"بنك"=>"بنك"),array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'finance_type'); ?>
                </div>
	</div>
</br>   


	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'car_price'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'car_price' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'car_price'); ?>
                </div>
        </div>


<div id="taksit-hidden" class="hidden">
        <div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'المقدم'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'downpayment' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'downpayment'); ?>
                </div>
        
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'monthly_premium'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'monthly_premium' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'monthly_premium'); ?>
                </div>
            </div>  

        <div class="row">	
	        <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'months_count'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'months_count' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'months_count'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'interest_rate'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'interest_rate' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'interest_rate'); ?>
                </div>
        </div>
</div>

<div id ="bank-hidden" class="hidden">
	<div class="row">
	        <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'bank_id'); ?>	
                </div>
                <div class ="col-sm-3" dir =rtl>		
                <?php echo $form->dropDownList($model,'bank_id', CHtml::listData(Banks::model()->findAll(), 'bank_id', 'bank_name') , array('empty'=>'' ,'class'=>'form-control' ));   ?>
                <?php echo $form->error($model,'bank_id'); ?>                    
                </div>
        
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'transfer_amount'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'transfer_amount' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'transfer_amount'); ?>
                </div>
        </div>

	<div class="row">
	        <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'bank_down_amount'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'bank_down_amount' , array('class'=>'form-control') ); ?>
		<?php echo $form->error($model,'bank_down_amount'); ?>
                </div>
	
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'expenses'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'expenses' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'expenses'); ?>
                </div>
        </div>
</div>
</br>
	<div class="row">
	        <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'insurance_comp_id'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->dropDownList($model,'insurance_comp_id', CHtml::listData(Inscomps::model()->findAll(), 'insurance_comp_id', 'insurance_comp_name') , array('class'=>'form-control')); ?>  
		<?php echo $form->error($model,'insurance_comp_id'); ?>
                </div>

                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'insurance_type'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                <?php echo $form->dropDownList($model,'insurance_type',array("تحمل"=>"تحمل","بدون تحمل"=>"بدون تحمل"),array('empty'=>'' , 'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'insurance_type'); ?>
                </div>
	</div>
</br>  
	<div class="row">            
	        <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'insurance_amount'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'insurance_amount' , array('class'=>'form-control') ); ?>
		<?php echo $form->error($model,'insurance_amount'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'insurance_rate'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->textField($model,'insurance_rate' , array('class'=>'form-control') ); ?>
		<?php echo $form->error($model,'insurance_rate'); ?>
                </div>
	</div>
</br>
        <div class="row">
                <div class="col-sm-3">
                <?php echo $form->labelEx($model,'image'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                <?php echo CHtml::activeFileField($model, 'image'); ?>
                <?php echo $form->error($model,'image'); ?>
                </div>
                <div class ="col-sm-3">
                <?php //if($model->isNewRecord !='1'){ ?>
                <?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/'.$model->image,"image",array("width"=>200)); ?>
                <?php //} ?>
                </div>
        </div>
</br>
	<div class="row">
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-sm-9" dir =rtl> 
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control') ); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>
</br>
<?php
           $cont = Yii::app()->controller->id;                   // check the permission of car price 
            $user_name = Yii::app()->user->username;
            $sql = "SELECT userpertbl.per_type
                    FROM userpertbl
                    INNER JOIN `user` ON userpertbl.user_id = `user`.id
                    INNER JOIN controllers ON userpertbl.controller_id = controllers.controller_id 
                    where `user`.username= '$user_name' and controllers.controller_code_name ='discount' limit 1";
            $connection = Yii::app()->db;   // assuming you have configured a "db" connection
            $command = $connection->createCommand($sql);
            $data = $command->queryAll($sql);
            if (isset($data[0]['per_type']) && !empty($data[0]['per_type'])) 
                {            
                    $per_type = $data[0]['per_type'];
                    if ($per_type == 'ReadWrite') 
                        {                        
?>
        <div class="row">        
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'discount'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                <?php //echo $form->dropDownList($model,'discount',array("0"=>"0","5"=>"5"),array('empty'=>'' , 'class'=>'form-control' )); ?>
                <?php echo $form->textField($model,'discount' , array('class'=>'form-control') ); ?>    
		<?php echo $form->error($model,'discount'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'final_price'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                <?php echo $form->textField($model,'final_price' , array('class'=>'form-control') ); ?>
		<?php echo $form->error($model,'final_price'); ?>
                </div>            
        </div>
                
        <div class="row">        
                <div class ="col-sm-3">
		<?php echo $form->labelEx($model,'confirm_stat'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
                <?php echo $form->dropDownList($model,'confirm_stat',array("غيرمعتمد"=>"غيرمعتمد","معتمد"=>"معتمد"),array('class'=>'form-control' )); ?>
		<?php echo $form->error($model,'confirm_stat'); ?>
                </div>
        </div>
<?php }} ?>
        <div class="row" >
	        <div class ="col-sm-3">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'اضافة' : 'حفظ' , array('class'=>'btn btn-default' , 'style'=>'font-size:18px')); ?>
	        </div>
        </div>    
<?php

?>
<?php $this->endWidget(); ?>

           </div>
           </div>
       </div>
</div>
<script type ="text/javascript">


             $(function(){    
                 
                 $('#Salestbl_discount').on('change',function(){                                                 
                    document.getElementById('Salestbl_final_price').value =  $('#Salestbl_car_price').val() - (($('#Salestbl_discount').val()/100)*$('#Salestbl_car_price').val());    
                    
                 });
                 
          $('#Salestbl_finance_type').on('change',function(){                        
               if($(this).val() === "نقدي")
               {               
               $("#taksit-hidden").addClass('hidden');
               $("#bank-hidden").addClass('hidden');
               }
               else if ($(this).val() === "قسط مباشر")
               {               
               $("#taksit-hidden").removeClass('hidden');
               $("#bank-hidden").addClass('hidden');
               }          
               else if ($(this).val() === "بنك")
               {               
               $("#taksit-hidden").addClass('hidden');
               $("#bank-hidden").removeClass('hidden');
               } 
              });
              
              $('#content').on('change','#Salestbl_car_id',function(){   
             
              $.ajax({
                  url: '<?php echo Yii::app()->request->baseUrl; ?>/salestbl/GetCarData',
                  data:{'id':$(this).val()},
                  method:'POST',
                  success:function(data){$('#ajax').html(data);}                 
              });
          });

    });
    

      

      
    $(document).ready(function(){
     $('#Salestbl_finance_type').change();
     $('#Salestbl_branch_id').change();
     $('#Salestbl_discount').change();
          });

      
      
        </script>
