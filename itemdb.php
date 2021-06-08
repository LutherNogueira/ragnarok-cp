<!--database get page-->
<head>
  <?php include 'base.php';?> <!--inclui a base de imports, links e metas html -->
 
</head>

<header>
  <?php include 'header.php';?> <!-- importa navibar -->
</header>

<?php include 'scripts/connect.php';?> <!-- importa arquivo de conexão e realiza-->

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive" ng-app="myApp" ng-controller="ItensCtrl">
            <!-- Metodo Get por pagina, SELECT itens-->
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
                <!--Preenchimento da tabela, cria um loop que preenche linha a linha enquanto existirem dados na tabela-->
                <?php
                  $sql = "SELECT id, name_english, type, subtype, price_buy FROM item_db ORDER BY id";
                  while ($row = mysqli_fetch_array($result)):;
                ?>
                <tr>
                  <td id="id"><?php echo $row['id'];?></td> <!-- preenche a coluna id com o retorno da query id-->
                  <td id="name_english"><?php echo $row['name_english'];?></td>
                  <td id="type"><?php echo $row['type'];?></td>
                  <td id="subtype"><?php echo $row['subtype'];?></td>
                  <td id="price_buy"><?php echo $row['price_buy'];?></td>
                </tr>       
                                     
              </tbody>
                <?php endwhile;?> <!-- fim do loop-->
            </table>
            <?php include 'scripts/pagination.php';?> <!-- importa aquivo de paginação, criando uma pagina a cada 20 itens -->
          </div>
        </div>
      </div>
    </div>
  </div>

<footer>
  <?php include 'footer.php';?> <!-- importa arquivo footer -->
</footer>
