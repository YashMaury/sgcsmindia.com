<?php include "include/header.php"; ?>
<?php
$url = $URL."gallery/read_galley.php";
$franchise_id = 0;
$data = array("franchise_id" => $franchise_id);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
// print_r($response);
$result = json_decode($response);
// print_r($result);
?>

<style>
    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }
</style>

<div class="achivements" style="background: url(assets/images/slide/breadcrumb.jpg);padding: 50px;">
    <div class="sec-title mb-3 text-center">
        <h2 class="mb-0" style="color:#fff;">OUR GALLERY</h2>
        <p style="color:#fff;">Home / Our Gallery</p>
    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

<section class="container mt-4">
    <div class="sec-title mb-3 text-center">
        <h1 class="mt-4">Our Gallery</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $counter = 0;
        foreach ($result as $key => $value) {
        foreach ($value as $key1 => $value1) {
        $image = $GALLERY_IMG_PATH."gallery_img_".$value1->id.".png";
        ?>

        <div class="col">
            <div class="card">
                <a href="<?php echo $image; ?>" data-toggle="lightbox" data-gallery="our-publication" data-caption="<?php echo $value1->image_description; ?>">
                    <img src="<?php echo $image; ?>" class="card-img-top" alt="<?php echo $image; ?>">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value1->image_title; ?></h5>
                    <p class="card-text"><?php echo $value1->image_description; ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary"><?php echo "<b>Uploaded on:</b> ".date("d-M-Y",strtotime($value1->created_on)); ?></small>
                </div>
            </div>
        </div>

        <?php } } ?>
       
    </div>

</section>

<?php include "include/footer.php"; ?>