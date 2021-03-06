<?php
include 'includes/db_admin.php';
include 'mark.php';
include 'actions.php';
include 'includes/header.php';
 ?>

  	<!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light " id="navbar">
  <a class="navbar-brand" href="#"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class=" navbar-toggler-icon"></span>
  </button>
  <p class="text-primary mt-2  p-2 ml-sm-auto"  style="font-family: Comic Sans MS, serif; font-size:16pt">PNU check lab work online</p>


  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mr-4">
      <li class="nav-item mr-3 ">
       <button data-toggle="modal" class="btn-light btn" data-target="#help"><a class="nav-link text-black" href="#">Help</a></button>
      </li>
      <li class="nav-item " >
        <button data-toggle="modal" class="btn-light btn" data-target="#contacts"><a class="nav-link text-black" href="#">Сontacts</a></button>
      </li>
    </ul>

      <button name="excel" type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success my-2 my-sm-2 mr-4" data-toggle="modal" data-target="#addexcel">Excel</button>
      <button name="word" type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success my-2 my-sm-2 mr-4" data-toggle="modal" data-target="#addword">Word</button>

  </div>
</nav>
<!-- Navbar end -->
<!--Help-->
<div class="modal" id="help" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Допомога</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="help">
          <h4> Вас вітає Допомога <b>PNU lab</b> </h4>
          <hr>
          1) Щоб подати Лабораторну роботу, натисніть одну з кнопок "Word"/"Excel"<br>
          2) Введіть свої дані у форму та прикріпіть Лабораторну роботу <br>
          3) Для перегляду оцінки перевіреної Лабораторної роботи <b>Виберіть</b> ваш курс та спеціальність у <b>списку зліва</b><br>
          4) Знайдіть себе та свою оцінку <br>
          <hr>
           <h4>Приємного користування!</h4>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Усе зрозуміло</button>
      </div>
    </div>
  </div>
</div>

<!-- Contacts -->

<div class="modal" id="contacts" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Наші контакти</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="help">
          <h4> Електронна адреса </h4>
          example@gmail.com<br>
          <hr>
          <h4>Контактний телефон</h4>
          (044) 123 45 67
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрити</button>
      </div>
    </div>
  </div>
</div>


<!-- Форма для подання лабораторної -->

<div class="modal fade" id="addexcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заповніть форму</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="actions.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Ім'я</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Прізвище</label>
            <input type="text" name="lastname" class="form-control" required>
          </div>
          <div class="form-group">
            <select name="course" id="" class="form-control" required="">
              <option value="" selected disabled >Виберіть ваш курс</option>
              <option value="course_1">Перший курс</option>
              <option value="course_2">Другий курс</option>
              <option value="course_3">Третій курс</option>
              <option value="course_4">Четвертий курс</option>
            </select>
          </div>

         <div class="form-group">
            <select name="grupa" id="" class="form-control" required="">
              <option value="" selected disabled >Виберіть вашy спеціальність</option>
              <option value="PO">ПО</option>
              <option value="DO">ДО</option>
              <option value="PM">ПМ</option>
              <option value="PR">ПР</option>
              <option value="DZ">ДЗ</option>
              <option value="TR">ТР</option>
            </select>
          </div>

          <div class="form-group">
            <label>Номер лабoраторної роботи</label>
            <input type="number" name="lab_num" class="form-control" required>
          </div>

          <div class="form-group">
              <div class="custom-file">
              <input name="image" type="file" class="custom-file-input">
              <label class="custom-file-label">Вибрати файл</label>
              </div>
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Скасувати</button>
        <button type="submit" name="add_labexcel" class="btn btn-primary">Зберегти</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Форма для Word -->
<div class="modal fade" id="addword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заповніть форму</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="actions.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Ім'я</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Прізвище</label>
            <input type="text" name="lastname" class="form-control" required>
          </div>
          <div class="form-group">
            <label for=""></label>
            <select name="course" id="" class="form-control" required="">
              <option value="" selected disabled >Виберіть ваш курс</option>
              <option value="course_1">Перший курс</option>
              <option value="course_2">Другий курс</option>
              <option value="course_3">Третій курс</option>
              <option value="course_4">Четвертий курс</option>
            </select>
          </div>
           <div class="form-group">
            <select name="grupa" id="" class="form-control" required="">
              <option value="" selected disabled >Виберіть вашy спеціальність</option>
              <option value="PO">ПО</option>
              <option value="DO">ДО</option>
              <option value="PM">ПМ</option>
              <option value="PR">ПР</option>
              <option value="DZ">ДЗ</option>
              <option value="TR">ТР</option>
            </select>
          </div>


          <div class="form-group">
            <label>Номер лабoраторної роботи</label>
            <input type="number" name="lab_num" class="form-control" required>
          </div>


          <div class="form-group">
              <div class="custom-file">
              <input name="image" type="file" class="custom-file-input">
              <label class="custom-file-label">Вибрати файл</label>
              </div>
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Скасувати</button>
        <button type="submit" name="add_labword" class="btn btn-primary">Зберегти</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>






<hr>


<!-- Виведення оцінок список зліва -->
<form action="actions.php" method="post" enctype="multipart/form-data">
<ul class="hidden-menu ">
  <h5 class="alert alert-primary text-black">Виберіть курс</h5>
  <div class="form-group">
  <li class="menu__list " value="course_1"><a href="#"><i class="fa fa-graduation-cap mr-1 ml-5 "></i>Курс 1</a>
    <ul class="menu__drop">
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПО-1"> ∽ ПО ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ДО-1"> ∽ ДО ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПМ-1"> ∽ ПМ ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ДЗ-1"> ∽ ДЗ ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПР-1"> ∽ ПР ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ТР-1"> ∽ ТР ∽</button></li>
    </ul></li>
</div>


 <li class="menu__list" ><a href="#" ><i class="fa fa-graduation-cap mr-1 ml-5 "></i>Курс 2</a>
    <ul class="menu__drop">
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПО-2"> ∽ ПО ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ДО-2"> ∽ ДО ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПМ-2"> ∽ ПМ ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ДЗ-2"> ∽ ДЗ ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПР-2"> ∽ ПР ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ТР-2"> ∽ ТР ∽</button></li>
    </ul></li>



 <li class="menu__list"><a href="#"><i class="fa fa-graduation-cap mr-1 ml-5 "></i>Курс 3</a>
    <ul class="menu__drop">
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПО-3"> ∽ ПО ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ДО-3"> ∽ ДО ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПМ-3"> ∽ ПМ ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ДЗ-3"> ∽ ДЗ ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПР-3"> ∽ ПР ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ТР-3"> ∽ ТР ∽</button></li>
    </ul></li>



 <li class="menu__list"><a href="#"><i class="fa fa-graduation-cap mr-1 ml-5 "></i>Курс 4</a>
    <ul class="menu__drop">
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПО-4"> ∽ ПО ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ДО-4"> ∽ ДО ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПМ-4"> ∽ ПМ ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ДЗ-4"> ∽ ДЗ ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ПР-4"> ∽ ПР ∽</button></li>
      <li ><button type="button"class=" bg-primary text-white rounded-pill btn btn-outline-success " data-toggle="modal" data-target="#ТР-4"> ∽ ТР ∽</button></li>
    </ul></li>


</ul>

</form>

<hr>
<!-- Коротка інформація -->
<div class="modal " id="short" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ">Коротко про нас</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p >
          Портал спроектований та розроблений студентом групи ПМ-41<br>
              Створений для перевірки лабораторних робіт Word та Excel
              <hr>
              <h4>Розробники:<br></h4>
              Васильків Олег<br>

        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
      </div>
    </div>
  </div>
</div>




<!-- footer -->

<?php
include 'includes/footer.php';
 ?>
