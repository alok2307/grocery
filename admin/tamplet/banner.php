<?php
    // error_reporting(0);
?>

<div class="container py-4 px">
    <h4 class="font-baloo font-size-20 text-bold text-center">Upload Slide Banner image</h4>
    <form action="" method="post" enctype="multipart/form-data" class="py-5">
        <div class="form-group">
            <label for="Image-name">Image name</label>
            <input type="text" class="form-control w-50" name="img-name" id="text" placeholder="Image name" require >
        </div>
        <div class="form-group">
            <!-- <label for="image">Image</label> -->
            <input type="file" class="" name="img" id="img">
        </div>
        <div class="form-group text-right">
            <input type="submit" value="Upload File" name="submit" class=" btn btn-primary" id="submit">
        </div>
    </form>
</div>


<?php
    $folder = "./../assets/banner/";
    $img_name = $_POST["img-name"];
    $img = $_FILES["img"];
    
?>