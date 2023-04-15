
<!--Banner=-->

    <div class="container">
        <article>
            <div id="demo1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="side-show carousel-item active">
                        <figure class="container-img">
                            <img src="assets/img/img22.jpg" alt="Los Angeles">
                        </figure>
                        
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                    <div class="side-show carousel-item">
                        <figure class="container-img">
                            <img src="assets/img/img22.jpg" alt="Chicago">
                        </figure>
                        
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div> 
                    </div>
                    <div class="side-show carousel-item">
                        <figure class="container-img">
                            <img src="https://coopsci.rmutt.ac.th/wp-content/uploads/2022/06/20220622-coopsci-01.jpg" alt="New York">
                        </figure>
                       
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>  
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </article>
    </div>

    <script>
          var carousel = document.getElementById('demo1');
          carousel.addEventListener('slide.bs.carousel', function () {
            var activeItem = carousel.querySelector('.active');
            console.log(activeItem);
            });
</script>
    <!--body-->


    <div class="container">
        <div class="row">
            <section class="main a">

                <!--Event-->
                
                <article>
                    <div class="border-title">
                        <h2 class="section-title a">ข่าวประชาสัมพันธ์</h2>
                    </div>           
                </article>
                
                <article>

                <div id="multi-item-carousel" class="carousel slide" data-ride="carousel" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#multi-item-carousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#multi-item-carousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#multi-item-carousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner overflow-hidden">
    <div class="card-box-show carousel-item active">
      <div class="row">
        <div class="col-md-4">
        <div class="card-box is-left">
                        <figure class="imagestyle">
                            <a href=""><img src="https://coopsci.rmutt.ac.th/wp-content/uploads/2022/06/20220622-coopsci-01.jpg"></a>
                        </figure>
                        <div class="container">
                            <span class="date">24 มีนาคม 2565</span>
                            <div class="title text-blue"><h4><a href="assets/img/img22.jpg">การอบรมวิจัยในชั้นเรียนและกระบวนการส่งเสริมชุมชนแห่งการเรียนรู้ทางการศึกษา</a></h4></div>
                            <div class="content"><p>We aim to drive society to the next level by using technology and innovation, and also 
                                further promote Thailand 4.0. The digital world will be built on campus networks, with the future defined by connections between all this.</p>
                            </div>
                        </div>                             
                    </div>
                    
                    
        </div>
        <div class="col-md-4">
        <div class="card-box is-left">
                        <figure class="imagestyle">
                            <img src="assets/img/img22.jpg">
                        </figure>
                        <div class="container">
                            <div class="title"><h4>การอบรมวิจัยในชั้นเรียนและกระบวนการส่งเสริมชุมชนแห่งการเรียนรู้ทางการศึกษา</h4></div>
                            <p class="tx-hide">We aim to drive society to the next level by using technology and innovation, and also 
                                further promote Thailand 4.0. The digital world will be built on campus networks, with the future defined by connections between all this.</p>
                        </div>
                    </div>
        </div>
        <div class="col-md-4">
        <div class="card-box is-left">
                        <figure class="imagestyle">
                            <img src="assets/img/img22.jpg">
                        </figure>
                        <div class="container">
                            <div class="title "><h4>ขอแสดงความยินดีกับสถานประกอบการดีเด่น ผู้ปฏิบัติงานดีเด่น : นักวิจัยที่ปรึกษางานดีเด่น และอาจารย์นิเทศดีเด่น ในงานประกวดสหกิจศึกษาดีเด่น (ระดับมหาวิทยาลัย)ประจำปีการศึกษา 2563</h4></div>
                            <p class="tx-hide">We aim to drive society to the next level by using technology and innovation, and also 
                                further promote Thailand 4.0. The digital world will be built on campus networks, with the future defined by connections between all this.</p>
                        </div>
                    </div>
        </div>
      </div>
    </div>
    <div class="card-box-show carousel-item">
      <div class="row">
        <div class="col-md-4">
        <div class="card-box is-left">
                        <figure class="imagestyle">
                            <img src="assets/img/img22.jpg">
                        </figure>
                        <div class="container">
                            <div class="title "><h4>ขอแสดงความยินดีกับสถานประกอบการดีเด่น ผู้ปฏิบัติงานดีเด่น : นักวิจัยที่ปรึกษางานดีเด่น และอาจารย์นิเทศดีเด่น ในงานประกวดสหกิจศึกษาดีเด่น (ระดับมหาวิทยาลัย)ประจำปีการศึกษา 2563</h4></div>
                            <p class="tx-hide">We aim to drive society to the next level by using technology and innovation, and also 
                                further promote Thailand 4.0. The digital world will be built on campus networks, with the future defined by connections between all this.</p>
                        </div>
                    </div>
        </div>
        <div class="col-md-4">
        <div class="card-box is-left">
                        <figure class="imagestyle">
                            <img src="assets/img/img22.jpg">
                        </figure>
                        <div class="container">
                            <div class="title "><h4>ขอแสดงความยินดีกับสถานประกอบการดีเด่น ผู้ปฏิบัติงานดีเด่น : นักวิจัยที่ปรึกษางานดีเด่น และอาจารย์นิเทศดีเด่น ในงานประกวดสหกิจศึกษาดีเด่น (ระดับมหาวิทยาลัย)ประจำปีการศึกษา 2563</h4></div>
                            <p class="tx-hide">We aim to drive society to the next level by using technology and innovation, and also 
                                further promote Thailand 4.0. The digital world will be built on campus networks, with the future defined by connections between all this.</p>
                        </div>
                    </div>
        </div>
        <div class="col-md-4">
        <div class="card-box is-left">
                        <figure class="imagestyle">
                            <img src="assets/img/img22.jpg">
                        </figure>
                        <div class="container">
                            <div class="title "><h4>ขอแสดงความยินดีกับสถานประกอบการดีเด่น ผู้ปฏิบัติงานดีเด่น : นักวิจัยที่ปรึกษางานดีเด่น และอาจารย์นิเทศดีเด่น ในงานประกวดสหกิจศึกษาดีเด่น (ระดับมหาวิทยาลัย)ประจำปีการศึกษา 2563</h4></div>
                            <p class="tx-hide">We aim to drive society to the next level by using technology and innovation, and also 
                                further promote Thailand 4.0. The digital world will be built on campus networks, with the future defined by connections between all this.</p>
                        </div>
                    </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev bg-new-left" type="button" data-bs-target="#multi-item-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon text-black"></span>
                </button>
                <button class="carousel-control-next bg-new-right text-black" type="button" data-bs-target="#multi-item-carousel" data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right text-black" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                </button>
</div>

                </article>

                <div class="link-box"><a href="">ดูเพิ่มเติม</a></div>

                <!--News-->
                <article>
                    <h3>ข่าวประชาสัมพันธ์</h3>
                    <ul class="ul">
                        <li><a herf="">ค่าเป้าหมายตามมาตรฐานการศึกษาของสถานศึกษา 2562</a></li>
                        <li><a herf="">สารสนเทศ_2561</a></li>
                        <li><a herf="">สารสนเทศ_2560</a></li>
                        <li><a herf="">สารสนเทศ_2559</a></li>
                        <li><a herf="">สารสนเทศ_2558</a></li>
                        <li><a herf="">SAR_2561</a></li>
						<li><a herf="">SAR_2560</a></li>
						<li><a herf="">SAR_2559</a></li>
						<li><a herf="">Powerpointการดำเนินงานตามระบบประกันคุณภาพภายในของสถานศึกษา</a></li>
                    </ul>
                </article>
                
                <!--school-->
                <article>
                    <h3>กระบวนงานโรงเรียนตามพระราชบัญญัติการอำนวยความสะดวก พ.ศ. 2558</h3>
                    <ul class="ul">
						<li><a href="http://seekan.ac.th/data_jan/it_2561.pdf">การรับนักเรียนของโรงเรียนในสังกัด สพฐ</a></li>
						<li><a href="http://seekan.ac.th/data_jan/it_2561.pdf">การขอย้ายเข้าเรียนของโรงเรียนในสังกัด สพฐ</a></li>		
						<li><a href="http://seekan.ac.th/data_jan/it_2561.pdf">	การขอผ่อนผันให้เด็กเข้าเรียนก่อนหรือหลังตามเกณฑ์การศึกษาภาคบังคับของโรงเรียนในสังกัด สพฐ.</a></li>	
						<li><a href="http://seekan.ac.th/data_jan/it_2561.pdf">การขอลาออกของนักเรียนในโรงเรียนสังกัด สพฐ.</a></li>	
						<li><a href="http://seekan.ac.th/data_jan/it_2561.pdf">การขอเทียบโอนผลการเรียนของนักเรียนในโรงเรียนสังกัด สพฐ.</a></li>	
						<li><a href="http://seekan.ac.th/data_jan/it_2561.pdf">การขอใบแทนเอกสารทางการศึกษาของโรงเรียนสังกัด สพฐ.</a></li>
                        <li><a href="">การขอใช้อาคารสถานที่ของโรงเรียนสังกัด สพฐ.</a></li>
                    </ul>
                </article>
            </section>

           
            
            <!--pop up-->
             <!-- The Modal -->


        </div>
    </div>