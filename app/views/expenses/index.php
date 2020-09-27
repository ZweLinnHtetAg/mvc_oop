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
        <table class="table table-light" id="myTable">
        <thead>
          <th>Category ID</th>
          <th>Amount</th>
          <th>Qty</th>
          <th>User ID</th>
          <th>Date</th>
          <th></th>
          <th></th>
        </thead>
        <tbody>
          <?php 
          foreach($data['expenses'] as $expense)
          { ?>
            <tr>
              <td><?php echo $expense['category_name'] ?></td>
              <td><?php echo $expense['amount'] ?></td>
              <td><?php echo $expense['qty'] ?></td>
              <td><?php echo $expense['user_name'] ?></td>
              <td><?php echo $expense['date'] ?></td>
              <td><a href="<?php echo URLROOT.'/expense/edit/'.$expense['id'] ?>" class="btn btn-success">Edit</a></td>
              <td><a href="<?php echo URLROOT."/expense/delete/".$expense['id'] ?> " class="btn btn-danger">Delete</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
        </table>
        <a href="<?php echo URLROOT.'/expense/create' ?>" class="btn btn-primary float-right"> Add New</a>
      </div>
		</div>

<?php require_once APPROOT.'/views/components/footer.php' ?>