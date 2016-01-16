<br>
</br>
<table class="table table-borderd table-hover" dir="rtl">    
    <thead>                                  
        <th style ="text-align:center; font-size: medium">م</th>        
        <th style ="text-align:center; font-size: medium">التاريخ</th>
        <th style ="text-align:center; font-size: medium">الفرع المحول اليه</th>
        <th style ="text-align:center; font-size: medium">المندوب</th>       
        <th style ="text-align:center; font-size: medium">الماركة</th>
        <th style ="text-align:center; font-size: medium">الموديل</th>                
        <th style ="text-align:center; font-size: medium">الكود</th> 
        <th style ="text-align:center; font-size: medium">رقم الشاسيه</th> 
         
    </thead>
    <tbody class="detail" id="all_rows">
        
        <?php 
        $no = 1 ; 
        foreach ($params as $item):              
        ?>
        <tr>            
            <td><?php echo $item['trs_id'] ?></td>
            <td><?php echo $item['trs_date'] ?></td>                         
            <td><?php echo $item['branch_name'] ?></td>  
            <td><?php echo $item['employee_name'] ?></td>                                                 
            <td><?php echo $item['brand_name'] ?></td>
            <td><?php echo $item['model_name'] ?></td>                         
            <td><?php echo $item['code_name'] ?></td>            
            <td><?php echo $item['chass_no'] ?></td>  
                                                               
        </tr>
        <?php   
                    $no = $no + 1 ;
        endforeach;   
        
        ?>        
    </tbody>
</table>
