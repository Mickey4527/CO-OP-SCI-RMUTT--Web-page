<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="base/style.css">
      <link rel="stylesheet" type="text/css" href="base/icon.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/denali-icon-font/dist/denali-icon-font.css" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
      <title>โรงเรียนสีกัน(วัฒนานันท์อุปถัมภ์)</title>
    </head>
<body>	

<!-- Header -->

<nav class="navbar navbar-expand-xl justify-content-center sticky-top bg-white" aria-label="Sixth navbar example">
    <div class="container-fluid">

    <!--Logo-->
      <a class="navbar-brand" href="#"><img src="assets/img/logo-e1646837687857.png" width="45px"><span class="text-logo sz-24 text-blue">สหกิจศึกษา<br>คณะวิทยาศาสตร์และเทคโนโลยี</span></a>

    <!--Menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
      </button>

    <!-- Menu bar -->

      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">

        <!-- Menu Link -->
        <li>
          <span class="nav-item">
            <a class="nav-link" href="index.php?page=home">หน้าหลัก</a> <!--Home-->
          </span>
            
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
              <button class="btn btn-outline-secondary" type="button" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
          </div>
        </form>
      </div>
    </div>
  </nav>
