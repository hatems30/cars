<br>
</br>
<table class="table table-borderd table-hover" dir="rtl">    
    <thead>                                  
        <th style ="text-align:center; font-size: medium">م</th> 
        <th style ="text-align:center; font-size: medium">رقم الفاتورة</th>
        <th style ="text-align:center; font-size: medium">تاريخ الفاتورة</th>
        <th style ="text-align:center; font-size: medium">نوع البيع</th>
        <th style ="text-align:center; font-size: medium">العميل</th>
        <th style ="text-align:center; font-size: medium">المندوب</th>
        <th style ="text-align:center; font-size: medium">الماركة</th>
        <th style ="text-align:center; font-size: medium">الموديل</th>                
        <th style ="text-align:center; font-size: medium">الكود</th> 
        <th style ="text-align:center; font-size: medium">رقم الشاسيه</th> 
        <th style ="text-align:center; font-size: medium">سعر البيع</th>   
    </thead>
    <tbody class="detail" id="all_rows">
        
        <?php 
        $no = 1 ; 
        foreach ($params as $item):              
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $item['invoice_id'] ?></td>
            <td><?php echo $item['invoice_date'] ?></td>                         
            <td><?php echo $item['sales_type'] ?></td>            
            <td><?php echo $item['customer_name'] ?></td>
            <td><?php echo $item['employee_name'] ?></td>                                     
            <td><?php echo $item['brand_name'] ?></td>
            <td><?php echo $item['model_name'] ?></td>                         
            <td><?php echo $item['code_name'] ?></td>            
            <td><?php echo $item['chass_no'] ?></td>  
            <td><?php echo $item['car_price'] ?></td>                                                     
        </tr>
        <?php   
                    $no = $no + 1 ;
        endforeach;   
        
        ?>        
    </tbody>
</table>
