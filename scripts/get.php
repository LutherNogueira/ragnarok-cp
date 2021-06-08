<?php
            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * $results_per_page;
            $sql = "SELECT id, name_english, type, subtype, price_buy FROM item_db ORDER BY id ASC LIMIT $start_from, ".$results_per_page;
            $result = $connect->query($sql); 
          ?> 