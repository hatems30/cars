

                <div class ="col-sm-1"  dir =rtl>
                    الموديل
                </div>
                <div class ="col-sm-3">
                    <?php
                       $list = CHtml::listData($data, 'model_id', 'model_name');
                       echo CHtml::dropDownList('carmodels', 'carmodels', $list ,array('class'=>'form-control','empty'=>''));
                     ?>
                </div>  