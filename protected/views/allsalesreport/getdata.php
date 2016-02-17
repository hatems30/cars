<br>
</br>
<table class="table table-borderd table-hover" dir="rtl">    
    <thead>                                  
        <th style ="text-align:center; font-size: medium">م</th> 
        <th style ="text-align:center; font-size: medium">رقم الفاتورة</th>
        <th style ="text-align:center; font-size: medium">تاريخ الفاتورة</th>
        <th style ="text-align:center; font-size: medium">نوع البيع</th>
        <th style ="text-align:center; font-size: medium">العميل</th>
        <th style ="text-align:center; font-size: medium">تليفون العميل</th>  
        <th style ="text-align:center; font-size: medium">المندوب</th>
        <th style ="text-align:center; font-size: medium">الماركة</th>
        <th style ="text-align:center; font-size: medium">الموديل</th>                
        <th style ="text-align:center; font-size: medium">الكود</th> 
        <th style ="text-align:center; font-size: medium">رقم الشاسيه</th> 
        <th style ="text-align:center; font-size: medium">سعر البيع</th>          
        <th style ="text-align:center; font-size: medium">الخصم</th>    
        <th style ="text-align:center; font-size: medium">السعر بعد الخصم</th>  
    </thead>
    <tbody class="detail" id="all_rows">
        
        <?php 
        $no = 1 ; 
        foreach ($params as $item):  
            if ($item['sales_type']== "inner")
            {
                $sales_type = "تحويلات";
            }
            else if ($item['sales_type']== "dealer")
            {
                $sales_type = "تجاري";
            }
            else if ($item['sales_type']== "comp")
            {
                $sales_type = "شركات";
            }            
            else 
            {
                 $sales_type = $item['sales_type'] ; 
            }
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $item['invoice_id'] ?></td>
            <td><?php echo $item['invoice_date'] ?></td>                         
            <td><?php echo $sales_type  ?></td>            
            <td><?php echo $item['customer_name'] ?></td>
            <td><?php echo $item['mobile'] ?></td>  
            <td><?php echo $item['employee_name'] ?></td>                                     
            <td style="color: red "><?php echo $item['brand_name'] ?></td>
            <td style="color: red "><?php echo $item['model_name'] ?></td>                         
            <td style="color: red "><?php echo $item['code_name'] ?></td>            
            <td style="color: red "><?php echo $item['chass_no'] ?></td>  
            <td><?php echo $item['car_price'] ?></td>                                                                                                                  
            <td><?php echo $item['discount'] ?></td>   
            <td><?php echo $item['car_price'] - $item['discount'] ?></td> 
        </tr>
        <?php   
                    $no = $no + 1 ;
        endforeach;   
        
        ?>        
    </tbody>
</table>
