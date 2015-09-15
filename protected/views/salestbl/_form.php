<?php
/* @var $this SalestblController */
/* @var $model Salestbl */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salestbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


       <div class="panel panel-default"> 
                  <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">البيع المباشر</font></b></div>           
               
           </div>
           </div>         
           <div class="panel-body">
           <div class="container-fluid">        
            <div class="row">
                <div class ="col-sm-3" dir =rtl>	
                <?php echo $form->labelEx($model,'car_id'); ?>
                </div>
                <div class ="col-sm-3" >
                <?php
                     if (isset($_REQUEST['car_id']))
                     {
                         echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAllByAttributes(array('car_id'=>$_REQUEST['car_id'])) , 'car_id', 'chass_no'),array('class'=>'form-control'));
                         
                     }
                     else
                     {
                         echo $form->dropDownList($model,'car_id', CHtml::listData(Carstbl::model()->findAll() , 'car_id', 'chass_no'),array('class'=>'form-control'));
                     }
                     echo $form->error($model,'car_id'); 
                     
                ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'branch_id'); ?>
                </div>
                <div class ="col-sm-3">		
                    <?php
                if (isset($_REQUEST['branch_id']))
                {    
                    echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAllByAttributes(array('branch_id'=>$_REQUEST['branch_id'])), 'branch_id', 'branch_name'),array('class'=>'form-control') );                  
                }
                else
                {
                    echo $form->dropDownList($model,'branch_id', CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name'),array('class'=>'form-control') );                  
                }
                ?>
                <?php echo $form->error($model,'branch_id'); ?>
                </div>       
                
            </div>	
                                                       </br>           
            <div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'invoice_date'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dateField($model,'invoice_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'invoice_date'); ?>
                </div>
                
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'employee_id'); ?>
                </div>
                <div class ="col-sm-3">
                    
		<?php 
                    if (isset($_REQUEST['branch_id']))
                    {
                     echo $form->dropDownList($model,'employee_id', CHtml::listData(Employees::model()->findAllByAttributes(array('branch_id'=>$_REQUEST['branch_id'])), 'employee_id', 'employee_name') , array('empty'=>'' ,'class'=>'form-control' ));
                    }
                    else
                    {
                     echo $form->dropDownList($model,'employee_id', CHtml::listData(Employees::model()->findAll(), 'employee_id', 'employee_name') , array('empty'=>'' ,'class'=>'form-control' ));   
                    }
                ?>  
		
                <?php echo $form->error($model,'employee_id'); ?>                    
                </div>     
                
            </div>
                                                          </br>                                                                                       
	<div class="row">
                <div class ="col-sm-3" dir =rtl>	
		<?php echo $form->labelEx($model,'customer_id'); ?>		
                </div>
                <div class ="col-sm-3">	
                <?php echo $form->dropDownList($model,'customer_id', CHtml::listData(customers::model()->findAll(), 'customer_id', 'customer_name') ,array('empty'=> '', 'class'=>'form-control')); ?>  
                <?php echo $form->error($model,'customer_id'); ?>
                </div>
	        <div class ="col-sm-3" dir =rtl>   
		<?php echo $form->labelEx($model,'finance_type'); ?>
                </div>
                <div class ="col-sm-3">    
                <?php echo $form->dropDownList($model,'finance_type',array("نقدي"=>"نقدي","قسط مباشر"=>"قسط مباشر" ,"بنك"=>"بنك"),array('empty'=>'' ,'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'finance_type'); ?>
                </div>
	</div>
</br>   

<div id ="cach-hidden" class="hidden">
	<div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'cach_price'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'cach_price' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'cach_price'); ?>
                </div>
        </div>
</div>

<div id="taksit-hidden" class="hidden">
        <div class="row">
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'المقدم'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'downpayment' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'downpayment'); ?>
                </div>
        
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'monthly_premium'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'monthly_premium' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'monthly_premium'); ?>
                </div>
            </div>  

        <div class="row">	
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'months_count'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'months_count' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'months_count'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'interest_rate'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'interest_rate' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'interest_rate'); ?>
                </div>
        </div>
</div>

<div id ="bank-hidden" class="hidden">
	<div class="row">
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'bank_id'); ?>	
                </div>
                <div class ="col-sm-3">		
                <?php echo $form->dropDownList($model,'bank_id', CHtml::listData(Banks::model()->findAll(), 'bank_id', 'bank_name') , array('empty'=>'' ,'class'=>'form-control' ));   ?>
                <?php echo $form->error($model,'bank_id'); ?>                    
                </div>
        
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'transfer_amount'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'transfer_amount' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'transfer_amount'); ?>
                </div>
        </div>

	<div class="row">
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'bank_down_amount'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'bank_down_amount' , array('class'=>'form-control') ); ?>
		<?php echo $form->error($model,'bank_down_amount'); ?>
                </div>
	
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'expenses'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'expenses' , array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'expenses'); ?>
                </div>
            </div>
</div>
</br>
	<div class="row">
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'insurance_comp_id'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->dropDownList($model,'insurance_comp_id', CHtml::listData(Inscomps::model()->findAll(), 'insurance_comp_id', 'insurance_comp_name') , array('class'=>'form-control')); ?>  
		<?php echo $form->error($model,'insurance_comp_id'); ?>
                </div>

                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'insurance_type'); ?>
                </div>
                <div class ="col-sm-3">
                <?php echo $form->dropDownList($model,'insurance_type',array("تحمل"=>"تحمل","بدون تحمل"=>"بدون تحمل"),array('empty'=>'Select Insurance Type' , 'class'=>'form-control' )); ?>
		<?php echo $form->error($model,'insurance_type'); ?>
                </div>
	</div>
</br>  
	<div class="row">            
	        <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'insurance_amount'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'insurance_amount' , array('class'=>'form-control') ); ?>
		<?php echo $form->error($model,'insurance_amount'); ?>
                </div>
                <div class ="col-sm-3" dir =rtl>
		<?php echo $form->labelEx($model,'insurance_rate'); ?>
                </div>
                <div class ="col-sm-3">
		<?php echo $form->textField($model,'insurance_rate' , array('class'=>'form-control') ); ?>
		<?php echo $form->error($model,'insurance_rate'); ?>
                </div>
	</div>
</br>
	<div class="row">
                <div class ="col-sm-2" dir =rtl>
		<?php echo $form->labelEx($model,'notes'); ?>
                </div>
                <div class ="col-sm-10"> 
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50 , 'class'=>'form-control') ); ?>
		<?php echo $form->error($model,'notes'); ?>
                </div>
	</div>

	<div class ="col-sm-3" dir =rtl>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' ,array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

           </div>
           </div>
       </div>

<script type ="text/javascript">

             $(function(){                                        
          $('#Salestbl_finance_type').on('change',function(){                           
               if($(this).val() === "نقدي")
               {
               $("#cach-hidden").removeClass('hidden');
               $("#taksit-hidden").addClass('hidden');
               $("#bank-hidden").addClass('hidden');
               }
               else if ($(this).val() === "قسط مباشر")
               {
               $("#cach-hidden").addClass('hidden');
               $("#taksit-hidden").removeClass('hidden');
               $("#bank-hidden").addClass('hidden');
               }          
               else if ($(this).val() === "بنك")
               {
               $("#cach-hidden").addClass('hidden');
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
          });

      
      
        </script>
        
        <script type ='text/javascript'>
    $(function(){
    
          
      });
</script>