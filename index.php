<?php 
error_reporting(E_ALL ^ E_WARNING); 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';


include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>



<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto">
    <img src="./images/iphone14.png" id="logo"> 
      <h1 class="display-4 fw-normal"><font face="Dubai"><b>اربح معنا</b></font></h1><br>
      <p class="lead fw-normal"><font face="Dubai"><b>المتبقي على فتح التسجيل في الجائزة</b></font></p>
      <h3 id="countdown"></h3>
      <p id="demo"></p>
      <p class="lead fw-normal"><font face="Dubai"><b>للدخول في السحب</b></font></p>
      </div>
        <div class="container">
        <h4><font face="Dubai">للدخول في الجائزة اتبع الآتي :</font></h4>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">سيتم السحب من خلال بث مباشر</li>
        <li class="list-group-item">الرابح سيحصل على جهاز IPhone 14 Pro</li>
</ul>
  </div>
</div>
 <!-- <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light"> -->
    <div class="col-md-5 p-lg-5 mx-auto w-75">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <h3><font face="Dubai"><b>ادخل معلوماتك</b></font></h3>
    <br>
    <br>
    <div class="mb-1">
        <label for="firstName" class="form-label"><font face="Dubai"><b>الاسم الاول</b></font> <font color="red">*</font></label>
        <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
    </div>
    <br>
    <div class="mb-1">
        <label for="lastName" class="form-label"><font face="Dubai"><b>الاسم الثاني</b></font> <font color="red">*</font></label>
        <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
    </div>
    <br>
    <div class="mb-1>
        <label for="email" class="form-label"><font face="Dubai"><b>البريد الالكتروني</b></font> <font color="red">*</font></label>
        <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
    </div>
    <br>
  <button type="submit" name="submit" class="btn btn-secondary"><font face="Dubai"><b>ارسال المعلومات</b></font></button>
</form>
</div>
</div>

<div class='d-grid gap-2 col-6 mx-auto my-1 p-lg-3'>
  <button id='winner' class='btmn btn-secondary' type='button' class="btn btn-primary" href="#modal" role="button">
  <font face="Dubai"><b>اختيار الرابح</b></font>
    </button>
</div>

<div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="modalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class='display-3 text-center modal-title'><?php echo htmlspecialchars($user[1]) . ' ' . htmlspecialchars($user[2]); ?></h1> 
        <?php endforeach; ?>
    </div>
    </div>
  </div>
</div>
<div class='loader-con'>
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<?php include_once './parts/footer.php'; ?>
