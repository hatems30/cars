<br>
</br>
<table class="table table-borderd table-hover" dir="rtl">    
    <thead>                                  
        <th style ="text-align:center; font-size: medium">الماركة</th>
        <th style ="text-align:center; font-size: medium">الموديل</th>                
        <th style ="text-align:center; font-size: medium">الكود</th> 
        <th style ="text-align:center; font-size: medium">رصيد البداية</th>   
        <th style ="text-align:center; font-size: medium">مشتريات</th>  
        <th style ="text-align:center; font-size: medium">تحويلات من الفروع</th>  
        <th style ="text-align:center; font-size: medium">مبيعات النقدي</th>   
        <th style ="text-align:center; font-size: medium">مبيعات البنوك</th>   
        <th style ="text-align:center; font-size: medium">مبيعات التقسيط</th>   
        <th style ="text-align:center; font-size: medium">البيع التجاري</th>   
        <th style ="text-align:center; font-size: medium">مبيعات الشركات</th>   
        <th style ="text-align:center; font-size: medium">تحويلات الى الفروع</th>   
        <th style ="text-align:center; font-size: medium">الرصيد الحالي</th>   
    </thead>
    <tbody class="detail" id="all_rows">
        
        <?php  
               $total_first_bal = 0 ; 
               $total_inner_in_sales = 0 ; 
               $total_in = 0 ;                
               $total_cach_sales = 0 ; 
               $total_bank_sales = 0 ;                
               $total_premium_sales = 0 ; 
               $total_dealer_sales = 0 ; 
               $total_company_sales = 0 ;  
               $total_inner_out_sales = 0 ; 
               $final_total=0;
               foreach ($params as $item):      
        ?>
        <tr>            
            <td><?php echo $item['brand_name'] ?></td>
            <td><?php echo $item['model_name'] ?></td>                         
            <td><?php echo $item['code_name'] ?></td>
            <td><font color="blue"><?php echo $item['first_total'] ?></font></td>                         
            <td><font color="blue"><?php echo $item['total_in'] ?></font></td>     
            <td><font color="blue"><?php echo $item['inner_in_sales'] ?></font></td>   
            <td><font color="red"><?php echo $item['cach_sales']?></font></td>
            <td><font color="red"><?php echo $item['bank_sales'] ?></font></td>
            <td><font color="red"><?php echo $item['premium_sales'] ?></font></td>
            <td><font color="red"><?php echo $item['dealer_sales'] ?></font></td>
            <td><font color="red"><?php echo $item['company_sales'] ?></font></td>
            <td><font color="red"><?php echo $item['inner_out_sales'] ?></font></td>
            <td><?php echo $item['final_total'] ?></td>                                                          
        </tr>
        <?php   
               $total_first_bal = $total_first_bal + $item['first_total']; 
               $total_in = $total_in + $item['total_in']; 
               $total_inner_in_sales = $total_inner_in_sales + $item['inner_in_sales'];               
               $total_cach_sales = $total_cach_sales + $item['cach_sales']; 
               $total_bank_sales = $total_bank_sales + $item['bank_sales'] ;                
               $total_premium_sales = $total_premium_sales + $item['premium_sales']; 
               $total_dealer_sales = $total_dealer_sales + $item['dealer_sales'] ; 
               $total_company_sales = $total_company_sales + $item['company_sales'] ;          
               $total_inner_out_sales = $total_inner_out_sales + $item['inner_out_sales'] ;   
               $final_total = $final_total + $item['final_total'] ;  
        endforeach;         
        ?>
        
    </tbody>
    <tfoot>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td><?php echo $total_first_bal ?> </td>
    <td><?php echo $total_in ?> </td>
    <td><?php echo $total_inner_in_sales ?> </td>
    <td><?php echo $total_cach_sales ?> </td>
    <td><?php echo $total_bank_sales ?> </td>
    <td><?php echo $total_premium_sales ?> </td>
    <td><?php echo $total_dealer_sales ?> </td>
    <td><?php echo $total_company_sales ?> </td>
    <td><?php echo $total_inner_out_sales ?> </td>
    <td><?php echo $final_total ?> </td>    
    </tfoot>
</table>
