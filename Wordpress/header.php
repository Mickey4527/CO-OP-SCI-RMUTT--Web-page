<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <?php wp_head(); ?>
    </head>
<body>	

<!-- Header -->

<nav class="navbar navbar-expand-xl justify-content-center bg-white navbar-white sticky-top" aria-label="Sixth navbar example">
    <div class="container-fluid">

    <!--Logo-->
      <a class="navbar-brand" href="#"><img src="https://www.rmutt.ac.th/wp-content/uploads/2020/03/20200310-LOGO-RMUTT.png" width="100px"><span class="text-logo sz-24 text-blue">สหกิจศึกษา</span></a>

    <!--Menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <i class="material-icons md-24 black200">menu</i>
      </button>

    <!-- Menu bar -->

      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">

        <!-- Menu Link -->
        <li class="nav-item">
            <a class="nav-link" href="Index.php">หน้าแรก</a> <!--Home-->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">เกี่ยวกับโรงเรียน</a> <!--About-->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?page=history">ประวัติโรงเรียน</a>
                <a class="dropdown-item" href="index.php?page=manage">คณะผู้บริหาร</a>
                <a class="dropdown-item" href="index.php?page=404">กลุ่มบริหาร</a>
                <a class="dropdown-item" href="index.php?page=404">กลุ่มสาระการเรียนรู้</a> 
                <a class="dropdown-item" href="index.php?page=404">คณะกรรมการสถานศึกษา</a>    
                <a class="dropdown-item" href="index.php?page=sci">กลุ่มสาระการเรียนรู้วิทยาศาสตร์และเทคโนโลยี</a>
                <a class="dropdown-item" href="index.php?page=404">กลุ่มสาระการเรียนรู้ภาษาไทย</a>
                <a class="dropdown-item" href="index.php?page=404">กลุ่มสาระการเรียนรู้ภาษาอังกฤษ</a>
                <a class="dropdown-item" href="index.php?page=404">กลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา</a>
                <a class="dropdown-item" href="index.php?page=404">กลุ่มสาระการเรียนรู้การงานอาชีพ</a>
                <a class="dropdown-item" href="index.php?page=404">กลุ่มสาระการเรียนรู้ศิลปะ</a>
                <a class="dropdown-item" href="index.php?page=404">กิจกรรมพัฒนาผู้เรียน</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=404">ดาวโหลดเอกสาร</a>
          </li>    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">เพิ่มเติม</a> <!--More-->
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="index.php?page=teach_student">ตารางเรียน</a>
              <a class="dropdown-item" href="index.php?page=404">ดาวโหลดเอกสาร</a>
              <a class="dropdown-item" href="index.php?page=404">ข่าวสาร</a>
              <a class="dropdown-item" href="index.php?page=404">กระบวนการโรงเรียน</a>
              <a class="dropdown-item" href="index.php?page=404">ห้องสมุดโรงเรียน</a>
              <a class="dropdown-item" href="index.php?page=mob4">คลังข้อสอบ</a>
              <a class="dropdown-item" href="index.php?page=404">Seekan photo</a>
            </ul>
          </li>
				  <li class="nav-item">
            <a class="nav-link" href="index.php?page=404">ติดต่อโรงเรียน</a>
          </li>
        </ul>
        <form role="search">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="ค้นหาข้อมูล" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="material-icons md-24 black200">search</i></button>
          </div>
        </form>
      </div>
    </div>
  </nav>
