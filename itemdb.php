<head>
  <?php include 'base.php';?>
 
</head>

<header>
  <?php include 'header.php';?>
</header>

<?php include 'scripts/connect.php';?>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive" ng-app="myApp" ng-controller="ItensCtrl">
          <?php
            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * $results_per_page;
            $sql = "SELECT id, name_english, type, subtype, price_buy FROM item_db ORDER BY id ASC LIMIT $start_from, ".$results_per_page;
            $result = $connect->query($sql); 
          ?> 
            <table class="table table-striped table-dark">
              <thead>
                <tr>
                  <th scope="col" onclick="">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Type</th>
                  <th scope="col">Sub Type</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT id, name_english, type, subtype, price_buy FROM item_db ORDER BY id";
                  while ($row = mysqli_fetch_array($result)):;
                ?>
                <tr>
                  <td id="id"><?php echo $row['id'];?></td>
                  <td id="name_english"><?php echo $row['name_english'];?></td>
                  <td id="type"><?php echo $row['type'];?></td>
                  <td id="subtype"><?php echo $row['subtype'];?></td>
                  <td id="price_buy"><?php echo $row['price_buy'];?></td>
                </tr>       
                                     
              </tbody>
                <?php endwhile;?>
            </table>
            <?php include 'scripts/pagination.php';?>
          </div>
        </div>
      </div>
    </div>
  </div>

<footer>
  <?php include 'footer.php';?>
</footer>
