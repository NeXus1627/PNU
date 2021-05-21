
<!-- Перший курс таблиці з оцінками -->


<?php
/* Excel */
        $e_po1 = $link->query("SELECT * FROM course_1 WHERE grupa='PO'");
        $e_rowpo1 = $e_po1->fetch_all(MYSQLI_ASSOC);

        $e_do1 = $link->query("SELECT * FROM course_1 WHERE grupa='DO'");
        $e_rowdo1 = $e_do1->fetch_all(MYSQLI_ASSOC);

        $e_pm1 = $link->query("SELECT * FROM course_1 WHERE grupa='PM'");
        $e_rowpm1 = $e_pm1->fetch_all(MYSQLI_ASSOC);

        $e_dz1 = $link->query("SELECT * FROM course_1 WHERE grupa='DZ'");
        $e_rowdz1 = $e_dz1->fetch_all(MYSQLI_ASSOC);

        $e_pr1 = $link->query("SELECT * FROM course_1 WHERE grupa='PR'");
        $e_rowpr1 = $e_pr1->fetch_all(MYSQLI_ASSOC);

        $e_tr1 = $link->query("SELECT * FROM course_1 WHERE grupa='TR'");
        $e_rowtr1 = $e_tr1->fetch_all(MYSQLI_ASSOC);
/* Word*/
        $w_po1 = $link1->query("SELECT * FROM course_1 WHERE grupa='PO'");
        $w_rowpo1 = $w_po1->fetch_all(MYSQLI_ASSOC);

        $w_do1 = $link1->query("SELECT * FROM course_1 WHERE grupa='DO'");
        $w_rowdo1 = $w_do1->fetch_all(MYSQLI_ASSOC);

        $w_pm1 = $link1->query("SELECT * FROM course_1 WHERE grupa='PM'");
        $w_rowpm1 = $w_pm1->fetch_all(MYSQLI_ASSOC);

        $w_dz1 = $link1->query("SELECT * FROM course_1 WHERE grupa='DZ'");
        $w_rowdz1 = $w_dz1->fetch_all(MYSQLI_ASSOC);

        $w_pr1 = $link1->query("SELECT * FROM course_1 WHERE grupa='PR'");
        $w_rowpr1 = $w_pr1->fetch_all(MYSQLI_ASSOC);

        $w_tr1 = $link1->query("SELECT * FROM course_1 WHERE grupa='TR'");
        $w_rowtr1 = $w_tr1->fetch_all(MYSQLI_ASSOC);
     ?>

<!-- ПО-1 -->

<div class="modal fade" id="ПО-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title" id="exampleModalLabel">Оцінки</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpo1 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpo1 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


<!-- ДО-1 -->

<div class="modal fade" id="ДО-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowdo1 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowdo1 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


<!-- ПМ-1 -->

<div class="modal fade" id="ПМ-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpm1 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpm1 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>



<!-- ДЗ-1 -->

<div class="modal fade" id="ДЗ-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowdz1 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowdz1 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>

<!-- ПР-1 -->


<div class="modal fade" id="ПР-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpr1 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpr1 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>



<!-- ТР-1 -->

<div class="modal fade" id="ТР-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowtr1 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowtr1 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


<!-- Другий курс таблиці з оцінками -->

<?php
/* Excel */
        $e_po2 = $link->query("SELECT * FROM course_2 WHERE grupa='PO'");
        $e_rowpo2 = $e_po2->fetch_all(MYSQLI_ASSOC);

        $e_do2 = $link->query("SELECT * FROM course_2 WHERE grupa='DO'");
        $e_rowdo2 = $e_do2->fetch_all(MYSQLI_ASSOC);

        $e_pm2 = $link->query("SELECT * FROM course_2 WHERE grupa='PM'");
        $e_rowpm2 = $e_pm2->fetch_all(MYSQLI_ASSOC);

        $e_dz2 = $link->query("SELECT * FROM course_2 WHERE grupa='DZ'");
        $e_rowdz2 = $e_dz2->fetch_all(MYSQLI_ASSOC);

        $e_pr2 = $link->query("SELECT * FROM course_2 WHERE grupa='PR'");
        $e_rowpr2 = $e_pr2->fetch_all(MYSQLI_ASSOC);

        $e_tr2 = $link->query("SELECT * FROM course_2 WHERE grupa='TR'");
        $e_rowtr2 = $e_tr2->fetch_all(MYSQLI_ASSOC);
/* Word*/
        $w_po2 = $link1->query("SELECT * FROM course_2 WHERE grupa='PO'");
        $w_rowpo2 = $w_po2->fetch_all(MYSQLI_ASSOC);

        $w_do2 = $link1->query("SELECT * FROM course_2 WHERE grupa='DO'");
        $w_rowdo2 = $w_do2->fetch_all(MYSQLI_ASSOC);

        $w_pm2 = $link1->query("SELECT * FROM course_2 WHERE grupa='PM'");
        $w_rowpm2 = $w_pm2->fetch_all(MYSQLI_ASSOC);

        $w_dz2 = $link1->query("SELECT * FROM course_2 WHERE grupa='DZ'");
        $w_rowdz2 = $w_dz2->fetch_all(MYSQLI_ASSOC);

        $w_pr2 = $link1->query("SELECT * FROM course_2 WHERE grupa='PR'");
        $w_rowpr2 = $w_pr2->fetch_all(MYSQLI_ASSOC);

        $w_tr2 = $link1->query("SELECT * FROM course_2 WHERE grupa='TR'");
        $w_rowtr2 = $w_tr2->fetch_all(MYSQLI_ASSOC);
     ?>



<!-- ПО-2 -->



<div class="modal fade" id="ПО-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpo2 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpo2 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>



<!-- ДО-2 -->


<div class="modal fade" id="ДО-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowdo2 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowdo2 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>



<!-- ПМ-2 -->

<div class="modal fade" id="ПМ-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpm2 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpm2 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>



<!-- ДЗ-2 -->

<div class="modal fade" id="ДЗ-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowdz2 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowdz2 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


<!-- ПР-2 -->


<div class="modal fade" id="ПР-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpr2 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpr2 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>



<!-- ТР-2 -->

<div class="modal fade" id="ТР-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowtr2 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowtr2 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


<!-- Третій курс  -->

<?php
/* Excel */
        $e_po3 = $link->query("SELECT * FROM course_3 WHERE grupa='PO'");
        $e_rowpo3 = $e_po3->fetch_all(MYSQLI_ASSOC);

        $e_do3 = $link->query("SELECT * FROM course_3 WHERE grupa='DO'");
        $e_rowdo3 = $e_do3->fetch_all(MYSQLI_ASSOC);

        $e_pm3 = $link->query("SELECT * FROM course_3 WHERE grupa='PM'");
        $e_rowpm3 = $e_pm3->fetch_all(MYSQLI_ASSOC);

        $e_dz3 = $link->query("SELECT * FROM course_3 WHERE grupa='DZ'");
        $e_rowdz3 = $e_dz3->fetch_all(MYSQLI_ASSOC);

        $e_pr3 = $link->query("SELECT * FROM course_3 WHERE grupa='PR'");
        $e_rowpr3 = $e_pr3->fetch_all(MYSQLI_ASSOC);

        $e_tr3 = $link->query("SELECT * FROM course_3 WHERE grupa='TR'");
        $e_rowtr3 = $e_tr3->fetch_all(MYSQLI_ASSOC);
/* Word*/
        $w_po3 = $link1->query("SELECT * FROM course_3 WHERE grupa='PO'");
        $w_rowpo3 = $w_po3->fetch_all(MYSQLI_ASSOC);

        $w_do3 = $link1->query("SELECT * FROM course_3 WHERE grupa='DO'");
        $w_rowdo3 = $w_do3->fetch_all(MYSQLI_ASSOC);

        $w_pm3 = $link1->query("SELECT * FROM course_3 WHERE grupa='PM'");
        $w_rowpm3 = $w_pm3->fetch_all(MYSQLI_ASSOC);

        $w_dz3 = $link1->query("SELECT * FROM course_3 WHERE grupa='DZ'");
        $w_rowdz3 = $w_dz3->fetch_all(MYSQLI_ASSOC);

        $w_pr3 = $link1->query("SELECT * FROM course_3 WHERE grupa='PR'");
        $w_rowpr3 = $w_pr3->fetch_all(MYSQLI_ASSOC);

        $w_tr3 = $link1->query("SELECT * FROM course_3 WHERE grupa='TR'");
        $w_rowtr3 = $w_tr3->fetch_all(MYSQLI_ASSOC);
     ?>



<!-- ПО-3 -->



<div class="modal fade" id="ПО-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpo3 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpo3 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>



<!-- ДО-3 -->


<div class="modal fade" id="ДО-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowdo3 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowdo3 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


<!-- ПМ-3 -->

<div class="modal fade" id="ПМ-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpm3 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpm3 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>

<!-- ДЗ-3 -->

<div class="modal fade" id="ДЗ-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowdz3 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowdz3 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>

<!-- ПР-3 -->


<div class="modal fade" id="ПР-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpr3 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpr3 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>

<!-- ТР-3 -->

<div class="modal fade" id="ТР-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowtr3 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowtr3 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


<!-- Четвертій курс -->

<?php
/* Excel */
        $e_po4 = $link->query("SELECT * FROM course_4 WHERE grupa='PO'");
        $e_rowpo4 = $e_po4->fetch_all(MYSQLI_ASSOC);

        $e_do4 = $link->query("SELECT * FROM course_4 WHERE grupa='DO'");
        $e_rowdo4 = $e_do4->fetch_all(MYSQLI_ASSOC);

        $e_pm4 = $link->query("SELECT * FROM course_4 WHERE grupa='PM'");
        $e_rowpm4 = $e_pm4->fetch_all(MYSQLI_ASSOC);

        $e_dz4 = $link->query("SELECT * FROM course_4 WHERE grupa='DZ'");
        $e_rowdz4 = $e_dz4->fetch_all(MYSQLI_ASSOC);

        $e_pr4 = $link->query("SELECT * FROM course_4 WHERE grupa='PR'");
        $e_rowpr4 = $e_pr4->fetch_all(MYSQLI_ASSOC);

        $e_tr4 = $link->query("SELECT * FROM course_4 WHERE grupa='TR'");
        $e_rowtr4 = $e_tr4->fetch_all(MYSQLI_ASSOC);
/* Word*/
        $w_po4 = $link1->query("SELECT * FROM course_4 WHERE grupa='PO'");
        $w_rowpo4 = $w_po4->fetch_all(MYSQLI_ASSOC);

        $w_do4 = $link1->query("SELECT * FROM course_4 WHERE grupa='DO'");
        $w_rowdo4 = $w_do4->fetch_all(MYSQLI_ASSOC);

        $w_pm4 = $link1->query("SELECT * FROM course_4 WHERE grupa='PM'");
        $w_rowpm4 = $w_pm4->fetch_all(MYSQLI_ASSOC);

        $w_dz4 = $link1->query("SELECT * FROM course_4 WHERE grupa='DZ'");
        $w_rowdz4 = $w_dz4->fetch_all(MYSQLI_ASSOC);

        $w_pr4 = $link1->query("SELECT * FROM course_4 WHERE grupa='PR'");
        $w_rowpr4 = $w_pr4->fetch_all(MYSQLI_ASSOC);

        $w_tr4 = $link1->query("SELECT * FROM course_4 WHERE grupa='TR'");
        $w_rowtr4 = $w_tr4->fetch_all(MYSQLI_ASSOC);
     ?>




<!-- ПО-4 -->



<div class="modal fade" id="ПО-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpo4 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpo4 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>



<!-- ДО-4 -->


<div class="modal fade" id="ДО-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowdo4 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowdo4 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>

<!-- ПМ-4 -->

<div class="modal fade" id="ПМ-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpm4 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpm4 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>

<!-- ДЗ-4 -->

<div class="modal fade" id="ДЗ-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowdz4 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowdz4 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>

<!-- ПР-4 -->


<div class="modal fade" id="ПР-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowpr4 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowpr4 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>


<!-- ТР-4 -->

<div class="modal fade" id="ТР-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Оцінки</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <h3 class="text-center">Excel</h3>
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
                <th scope="col">Прізвище</th>
                <th scope="col">Ім'я</th>
                <th scope="col">Номер лабораторної роботи</th>
                <th scope="col">Оцінка</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach($e_rowtr4 as $key): ?>
              <tr>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['lastname']; ?></td>
                <td><?php echo $key['lab_num']; ?></td>
                <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

              </tr>

            </tbody>
          </table>
        <h3 class="text-center">Word</h3>
            <table class="table table-bordered bg-white">
              <thead>
                <tr>
                  <th scope="col">Прізвище</th>
                  <th scope="col">Ім'я</th>
                  <th scope="col">Номер лабораторної роботи</th>
                  <th scope="col">Оцінка</th>

                </tr>
              </thead>
              <tbody>
              <?php foreach($w_rowtr4 as $key): ?>
                <tr>
                  <td><?php echo $key['name']; ?></td>
                  <td><?php echo $key['lastname']; ?></td>
                  <td><?php echo $key['lab_num']; ?></td>
                  <td><?php echo $key['mark']; ?></td>

              <?php endforeach ?>

                </tr>

              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>
