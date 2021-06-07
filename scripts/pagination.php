<!--Create pages for table itens-->
<?php 
              $sql = "SELECT COUNT(ID) AS total FROM "."item_db";
              $result = $connect->query($sql);
              $row = $result->fetch_assoc();
              $total_pages = ceil($row["total"] / $results_per_page);
                
              for ($i=1; $i<=$total_pages; $i++) { 
                echo "<a href='itemdb.php?page=".$i."'";
                if ($i==$page)  echo " class='curPage'";
                echo ">".$i."</a> "; 
              }; 
              ?>