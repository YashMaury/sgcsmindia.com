<?php include "include/header.php"; ?>

<main class="main-content-wrapper">
  <div class="container">
    <div class="row mb-8">
      <div class="col-md-12">
        <div class="d-md-flex justify-content-between align-items-center">
          <div>
            <h2>Customers</h2>
            <!-- breacrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customers</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-xl-12 col-12 mb-5">
        <div class="card h-100 card-lg py-5">

          <div class="card-body p-0 ">

            <div class="table-responsive">
              <table class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap" id="DataTable" >
                <thead class="bg-light">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Purchase Date</th>
                    <th>Phone</th>
                    <th>Spent</th>

                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-xs rounded-circle">
                        <div class="ms-2">
                          <a href="#" class="text-inherit">Bonnie Howe</a>
                        </div>
                      </div>
                    </td>
                    <td>bonniehowe@gmail.com</td>

                    <td>
                      17 May, 2023 at 3:18pm
                    </td>
                    <td>-</td>
                    <td>
                      $49.00
                    </td>

                    <td>
                      <div class="dropdown">
                        <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="feather-icon icon-more-vertical fs-5"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                          <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                  <tr>

                    <td>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar avatar-xs rounded-circle">
                        <div class="ms-2">
                          <a href="#" class="text-inherit">Judy Nelson</a>
                        </div>
                      </div>
                    </td>
                    <td>judynelson@gmail.com</td>

                    <td>
                      27 April, 2023 at 2:47pm
                    </td>
                    <td>435-239-6436</td>
                    <td>
                      $490.00
                    </td>

                    <td>
                      <div class="dropdown">
                        <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="feather-icon icon-more-vertical fs-5"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                          <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>

                    <td>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/avatar/avatar-3.jpg" alt="" class="avatar avatar-xs rounded-circle">
                        <div class="ms-2">
                          <a href="#" class="text-inherit">John Mattox</a>
                        </div>
                      </div>
                    </td>
                    <td>johnmattox@gmail.com</td>

                    <td>
                      27 April, 2023 at 2:47pm
                    </td>
                    <td>347-424-9526</td>
                    <td>
                      $29.00
                    </td>

                    <td>
                      <div class="dropdown">
                        <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="feather-icon icon-more-vertical fs-5"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                          <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>

            </div>

          </div>

        </div>

      </div>
    </div>
  </div>
</main>

</div>

<?php include "include/footer.php"; ?>