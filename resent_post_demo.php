<style>
.main_section {
    margin-top: 8%;
    padding: 0px;
}

.heading {
    font-size: 30px;
}
</style>
<?php
include("conn.php");
 function php_slug($string)  
 {  
      $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));  
      return $slug;  
 }
$alias=mysqli_real_escape_string($conn,$_GET['alias']);
$result=mysqli_query($conn, "select * from blog where alias='$alias'");
?>
<div class="container main_section">
    <div class="row row_section">
        <div class="col-md-8">
            <?php
                                while($row=mysqli_fetch_assoc($result)){
                                ?>
            <div class="row">
                <div class="card-body">
                    <img src="../admin/image/<?=$row['image']?>" class="img-fluid rounded-2" alt="image" width="70%">
                    <div class="mt-5">
                        <h1 class="heading"><?=$row['title']?></h1>
                        <div class="date mt-3">
                            <small>Posted On - <?=$row['created_at']?></small>
                        </div>
                    </div>
                    <div class="description mt-1">
                        <p class="mt-1"><?=$row['body_content']?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-body">
            <h5 class="m-0">Recent Posts</h5>
            <div class="mt-3 resent_post"><a href="blog_detail.php">description</a>
            </div>
        </div>
    </div>
</div>
</div>