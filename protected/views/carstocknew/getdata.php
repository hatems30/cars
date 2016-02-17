<br>
</br>
<table class="table table-borderd table-hover" dir="rtl">    
    <thead>                                  
        <th style ="text-align:center; font-size: medium"> </th>
        <th style ="text-align:center; font-size: medium">رقم السيارة</th>
        <th style ="text-align:center; font-size: medium">الشاسيه</th>                
        <th style ="text-align:center; font-size: medium">سعر البيع</th> 
        <th style ="text-align:center; font-size: medium">السعر الرسمي</th>   
    </thead>
    <tbody class="detail" id="all_rows">        
        <?php 
              $i = 1 ;
               foreach ($params as $item):      
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $item['car_id'] ?></td>
            <td><?php echo $item['chass_no'] ?></td>                         
            <td><?php echo $item['sale_price'] ?></td>  
            <td><?php echo $item['off_price'] ?></td>              
        </tr>
        <?php   
        $i = $i + 1;
        endforeach;         
        ?>   
        <?php               
               foreach ($params_inner as $item):      
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $item['car_id'] ?></td>
            <td><?php echo $item['chass_no'] ?></td>                         
            <td><?php echo $item['sale_price'] ?></td>  
            <td><?php echo $item['off_price'] ?></td>              
        </tr>
        <?php   
        $i = $i + 1;
        endforeach;         
        ?>   
        
    </tbody>
</table>
