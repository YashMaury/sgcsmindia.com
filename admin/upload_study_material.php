<?php include "include/header.php"; ?>

<!-- main -->
<main class="main-content-wrapper">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- page header -->
                    <div>
                        <h2>Upload Study Material</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active">Upload Study Material</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- card -->
                <div class="card mb-6 shadow border-0">
                    <div class="card-body p-6 ">
                        <h4 class="mb-5 h5">Select Material</h4>
                        <form action="action/upload_studymaterial_post.php" method="post" enctype="multipart/form-data">
                            <div class="mb-4 d-flex">
                                <div class="position-relative">
                                    <!-- <img class="image  icon-shape icon-xxxl bg-light rounded-4"
                                        src="assets/images/icons/bakery.svg" alt="Material"> -->

                                    <input type="file" name="material_file" class="file-input form-control" required>
                                    <!-- <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                        <span class="icon-shape icon-sm rounded-circle bg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-pencil-fill text-muted"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                            </svg>
                                        </span>
                                    </div> -->
                                </div>



                            </div>
                            <h4 class="mb-4 h5 mt-5">Material Information</h4>

                            <div class="row">
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Material Name</label>
                                    <input type="text" class="form-control" name="material_title"
                                        placeholder="Material Name" required>
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Material Description</label>
                                    <textarea type="text" class="form-control" name="material_description"
                                        placeholder="Material Description" required></textarea>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        Upload Material
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>
</main>

</div>

<script src="assets/libs/quill/dist/quill.min.js"></script>
<script src="assets/js/vendors/editor.js"></script>
<script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>

<?php include "include/footer.php"; ?>