 <style>
   #errorMessage,
   #successMessage {
    display: none;
}
  </style>
 <div class="container">
    <div class="main a">
        <h3>เลือกห้องเรียนของคุณ</h3>
        <form>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">ข้าพเจ้า(ผู้ปกครอง)</span>
              </div>
              <input type="text" class="form-control" placeholder="ชื่อ">
              <input type="text" class="form-control" placeholder="นามสกุล">
            </div>

            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4">เลขบัตรประชาชน</label>
                <input class="form-control" id="citizenid" type="tel" name="citizeniid" placeholder="X-XXXX-XXXXX-XX-X" autocomplete="off" autofocus title="National ID input" aria-labelledby="InputLabel" aria-invalid aria-repuired="true" required tabindex="1"/>
                
            <div class="text error" id="errorMessage" aria-hidden="true" aria-label="Invalid ID" role="alert">
              <p>Invalid ID Format</p>
            </div>
            <div class="text success" id="successMessage" aria-hidden="true" aria-label="Valid ID" role="alert">
              <p>Valid ID Format</p>
            </div>
              </div>

              <div class="form-group col-md-1">
                <label for="inputZip">หมู่เลือด</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">อาชีพ</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-5">
                <label for="inputemail">อีเมล</label>
                <input type="text" class="form-control" id="inputemail"> 
              </div>
              <div class="form-group col-md-5">
                <label for="inputZip">สถานที่ทำงาน</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-2">
                <label for="inputHousenumber">บ้านเลขที่</label>
                <input type="text" class="form-control" id="inputHousenumber"> 
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">ซอย</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">ถนน</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-4">
                <label for="inputZip">แขวง</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-4">
                <label for="inputZip">เขต</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-4">
                <label for="inputZip">จังหวัด</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="inputZip"> 
              </div>
              <div class="form-group col-md-3">
                <label for="inputtele">โทรศัพท์บ้าน</label>
                <input type="text" class="form-control" id="inputtele"> 
              </div>
              <div class="form-group col-md-3">
                <label for="inputphone">โทรศัพท์มือถือ</label>
                <input type="text" class="form-control" id="inputphone"> 
              </div>
            </div>
           

      <button type="submit" id="button" value="confirm" tabindex="2" aria-label="Submit" disabled>Submit</button>
          </form>
    </div>
</div>
<script src="index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.3.0/imask.min.js"></script>