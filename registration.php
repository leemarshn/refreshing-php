<!DOCTYPE html>
<html>
<head>
<title>Registraton</title>

<style type="text/css">
 .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
} 
</style>


</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="img/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>
                <h3 style="background: green; color: white; padding: 5px">
                  <?php
                      if(isset($_GET['status']))
                      echo 'record saved successfuly';
                      
                      ?>

                  </h3>
                <form name="Student_registration" action="db_connect.php" method="POST">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" name="first_name" class="form-control form-control-lg" required="" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" name="last_name" class="form-control form-control-lg" required="" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="femaleGender" required="" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="maleGender" required="" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select name="state" class="select" required="">
                      <option value="">State</option>
                      <option value="Kenya">Kenya</option>
                      <option value="USA">United States</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select name="city" class="select" required="">
                      <option value="Kansas City">Kansas City</option>
                      <option value="Nairobi">Nairobi</option>
                      <option value="Minnesota">Minnesota</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example9" name="dob" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Course</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="Reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="Submit" name="Submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>