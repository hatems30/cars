
                <div class ="col-sm-3" dir="rtl">
                    <?php
                       $list = CHtml::listData($data, 'employee_id', 'employee_name');
                       echo CHtml::dropDownList('employees', 'employees', $list ,array('class'=>'form-control','empty'=>''));
                     ?>
                </div>  
                <div class ="col-sm-1">
                    <b> المندوب</b>
                </div>