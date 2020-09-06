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
              <tr>
                  <th>Id</th>
                  <th>Name </th>
                  <th>Description </th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($data['categories'] as $category)
          {
          ?>
          <tr>
            <td><?php echo $category['id'] ?></td>
            <td><?php echo $category['name'] ?></td>
            <td><?php echo $category['description'] ?></td>
          </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
       
      </div>
		</div>

<?php require_once APPROOT.'/views/components/footer.php' ?>