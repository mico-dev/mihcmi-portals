<form>
  <input class="form-control" type="text" name="s" placeholder="Doctors Name">
  <button class="btn btn-main" type="submit"><i class="fa fa-search"></i></button>
  <?php
    error_reporting(0);
    $data = $_GET['s'];
    if($data!=''){
         echo "<script>window.location='mddir.php?name=$data';</script>";
    }
  ?>
</form>
