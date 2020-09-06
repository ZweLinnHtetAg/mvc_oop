<?php require_once APPROOT.'/views/components/header.php' ?>

<div class="wrapper d-flex align-items-stretch">
			
    <?php require_once APPROOT.'/views/components/sidebar.php';  ?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <?php require_once APPROOT.'/views/components/menu.php';  ?>
        

        <h2 class="mb-4">

        <?php

            echo $data['title'];
        ?>

        </h2>

        <table class="table table-light">
        <thead>
          <th>ID</th>
          <th>Category ID</th>
          <th>Amount</th>
          <th>Qty</th>
          <th>User ID</th>
          <th>Date</th>
        </thead>
        <tbody>
          <?php 
          foreach($data['expenses'] as $expense)
          { ?>
            <tr>
              <td><?php echo $expense['id'] ?></td>
              <td><?php echo $expense['category_id'] ?></td>
              <td><?php echo $expense['amount'] ?></td>
              <td><?php echo $expense['qty'] ?></td>
              <td><?php echo $expense['user_id'] ?></td>
              <td><?php echo $expense['date'] ?></td>
            </tr>
          <?php
          }

          ?>
        </tbody>
        </table>
       
      </div>
		</div>

<?php require_once APPROOT.'/views/components/footer.php' ?>