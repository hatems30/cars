




       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">العمـــلاء</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php 

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customers-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'customer_id',
		'customer_name',
		'mobile',
		'address',
		'license_address',  
                array('name'=>'بيانات السيارة','type' => 'raw','value'=>'"<span class=\"link1\" data-toggle=\"modal\" data-target=\"#myModal\" data-id=\"".$data[\'customer_id\']."\">".$data[\'customer_id\']."</span>"'),       
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>

<script type="text/javascript">
          
          $(function(){
          $('#content').on('click','.link1',function(){                       
                  $.ajax({                  
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Customers/Getcars",
                  data:{"id":$(this).data('id')},
                  method:'POST',
                  success:function(data){
                      console.log(data);
                      $('#ajax-code').html(data);
    }                 
              });
          });
      });  
    </script>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="ajax-code">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>