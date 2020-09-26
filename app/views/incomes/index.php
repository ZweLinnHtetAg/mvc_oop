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
        <?php require_once APPROOT.'/views/components/message.php'; ?>
        <table class="table table-light">
        <thead>
          <th>Category ID</th>
          <th>Amount</th>
          <th>User Id</th>
          <th>Date</th>
          <th></th>
          <th></th>
        </thead>
        <tbody>
        <?php

          foreach($data['incomes'] as $income)
          {
            ?>

            <tr>
              <td><?php echo $income['category_name'] ?></td>
              <td><?php echo $income['amount'] ?></td>
              <td><?php echo $income['user_name'] ?></td>
              <td><?php echo $income['date'] ?></td>
              <td><a href="<?php echo URLROOT.'/income/edit/'.$income['id'] ?>" class="btn btn-success">Edit</a></td>
              <td><a href="<?php echo URLROOT.'/income/delete/'.$income['id'] ?>" class="btn btn-danger">Delete</a></td>
            </tr>

            <?php
          }

        ?>
        </tbody>
        </table>
       <a href="<?php echo URLROOT.'/income/create' ?>" class="btn btn-primary float-right">Add New</a>
      </div>
		</div>

<?php require_once APPROOT.'/views/components/footer.php' ?>