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
          <?php include 'scripts/get.php'?> 
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
                <?php include 'scripts/table.php'?>
          </div>
        </div>
      </div>
    </div>
  </div>

<footer>
  <?php include 'footer.php';?> <!-- importa arquivo footer -->
</footer>
