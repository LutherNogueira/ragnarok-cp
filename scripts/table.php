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