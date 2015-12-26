<br>
</br>
<table class="table table-borderd table-hover" dir="rtl">    
    <thead>                                  
        <th style ="text-align:center; font-size: medium">الماركة</th>
        <th style ="text-align:center; font-size: medium">الموديل</th>                
        <th style ="text-align:center; font-size: medium">الكود</th>   
        <th style ="text-align:center; font-size: medium">اجمالي الوارد</th>   
        <th style ="text-align:center; font-size: medium">مبيعات النقدي</th>   
        <th style ="text-align:center; font-size: medium">مبيعات البنوك</th>   
        <th style ="text-align:center; font-size: medium">مبيعات التقسيط</th>   
        <th style ="text-align:center; font-size: medium">البيع التجاري</th>   
        <th style ="text-align:center; font-size: medium">مبيعات الشركات</th>   
        <th style ="text-align:center; font-size: medium">الرصيد الحالي</th>   
    </thead>
    <tbody class="detail" id="all_rows">
        
        <?php         foreach ($params as $item):        ?>
        <tr>            
            <td><?php echo $item['brand_name'] ?></td>
            <td><?php echo $item['model_name'] ?></td>                         
            <td><?php echo $item['code_name'] ?></td>
            <td><font color="blue"><?php echo $item['total_in'] ?></font></td>                         
            <td><font color="red"><?php echo $item['cach_sales']?></font></td>
            <td><font color="red"><?php echo $item['bank_sales'] ?></font></td>
            <td><font color="red"><?php echo $item['premium_sales'] ?></font></td>
            <td><font color="red"><?php echo $item['dealer_sales'] ?></font></td>
            <td><font color="red"><?php echo $item['company_sales'] ?></font></td>
            <td><?php echo $item['final_total'] ?></td>
                                                          
        </tr>
        <?php   endforeach;         ?>
    </tbody>
</table>
