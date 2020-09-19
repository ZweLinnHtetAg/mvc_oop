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

        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <form action="<?php echo URLROOT.'/category/update/'.$data["category"]["id"]?>" method="POST">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo  $data["category"]["name"]  ?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="description" value="<?php  echo $data["category"]["description"] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                    <select class="custom-select" name="type_id">
                       <?php  foreach($data['types'] as $type)  { ?>
                       <option value="<?php echo $type['id'] ?>"  <?php  if($type['id'] == $data["category"]["type_id"])  echo "selected" ?>> 
                           <?php echo $type['name']  ?> 
                        </option>
                       <?php } ?>
                    </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block mt-5" value="Update">
                </form>
            </div>
        </div>

<?php require_once APPROOT.'/views/components/footer.php' ?>        