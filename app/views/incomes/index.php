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
          <th>User Id</th>
          <th>Date</th>
        </thead>
        <tbody>
        <?php

          foreach($data['incomes'] as $income)
          {
            ?>

            <tr>
              <td><?php echo $income['id'] ?></td>
              <td><?php echo $income['category_id'] ?></td>
              <td><?php echo $income['amount'] ?></td>
              <td><?php echo $income['user_id'] ?></td>
              <td><?php echo $income['date'] ?></td>
            </tr>

            <?php
          }

        ?>
        </tbody>
        </table>
       
      </div>
		</div>

<?php require_once APPROOT.'/views/components/footer.php' ?>