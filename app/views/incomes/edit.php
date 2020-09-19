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
                <form action="<?php echo URLROOT.'/income/update/'.$data['income']['id']?>" method="POST">
                <div class="form-group row">
                    <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="amount" name="amount" value="<?php echo $data['income']['amount'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                    <select class="custom-select" name="category_id">
                        <?php foreach($data['categories'] as $category) {?>

                            <option value="<?php echo $category['id'] ?>"  <?php if($category['id']==$data['income']['category_id']) echo "selected";  ?> >
                                <?php echo $category['name'] ?>
                            </option>
                         
                        <?php } ?>    
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $data['income']['date'] ?>" required>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block mt-5" value="Update">
                </form>
            </div>
        </div>

<?php require_once APPROOT.'/views/components/footer.php' ?>        