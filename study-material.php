<?php
include "include/header.php";
$url = $URL."studymaterial/read_studymaterial.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>

<div class="achivements" style="background: url(assets/images/slide/breadcrumb.jpg);padding: 50px;">
    <div class="sec-title mb-3 text-center">
        <h2 class="mb-0" style="color:#fff;">STUDY MATERIAL</h2>
        <p style="color:#fff;">Home / Study Material</p>
    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

<section class="container mt-4">
    <div class="sec-title mb-3 text-center">
        <h1 class="mt-4">Study Material</h1>
    </div>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">

    <?php 
      $counter=0;  
      foreach($result as $key => $value){
      foreach($value as $key1 => $value1)
      {
    ?>

        <div class="col">
            <div class="card">
                <a href="admin/gallery/studyMaterial/<?php echo $value1->id;?>/<?php echo $value1->id;?>.pdf" target="_blank">
                    <img src="assets/images/social/pdf.png" class="bi bi-file-earmark-arrow-down-fill card-img-top" style="font-size: 100px;" />
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value1->materialTitle; ?></h5>
                    <p class="card-text"><?php echo $value1->materialDescription; ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary"><?php echo "<b>Uploaded on:</b> ".date("d-M-Y",strtotime($value1->createdOn)); ?></small>
                </div>
            </div>
        </div>

    <?php } } ?>
        
    </div>

</section>

<?php include "include/footer.php"; ?>