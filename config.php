<?php
/** 
 * MIX Theme, copyright 2023
 * File Description: This file contains the configuration settings for the theme.
 * 
 * @package MIX
 * @since MIX 2.0
 */

/*
    * ตั้งค่าเมนูนำทาง หน้าหลัก
*/
define('MENU',array(
    /*
        * วิธีใช้
        * 'ชื่อเมนู' => array(
        *   'title' => 'ชื่อเมนู',
        *   'link' => 'ลิงค์',
        *   'icon' => 'ไอคอน (ใช้ไอคอนของ bootstrap)',
        *   'target' => 'target ของลิงค์ (ใช้ target ของ html)',
        *   'modal' => 'ต้องการให้เปิดในโหมด modal ให้ใส่ค่า true ถ้าไม่ใช่ให้ใส่ค่า null'
    */
    'calendar_coop' => array(
        'title' => 'ปฏิทินฝึกประสบการณ์วิชาชีพ',
        'link' => 'https://coopsci.rmutt.ac.th/?page_id=2248',
        'icon' => 'bi bi-calendar4-week',
        'target' => '_blank',
        'modal' => null
    ),
    'download_coop' => array(
        'title' => 'ดาวน์โหลดเอกสาร',
        'link' => 'https://coopsci.rmutt.ac.th/?page_id=2250',
        'icon' => 'bi bi-download',
        'target' => '_blank',
        'modal' => null
    ),
    'guide_coop' => array(
        'title' => 'คู่มือนักศึกษา',
        'link' => 'https://coopsci.rmutt.ac.th/?page_id=2252',
        'icon' => 'bi bi-book',
        'target' => '_blank',
        'modal' => null
    ),
    'data_coop' => array(
        'title' => 'ฐานข้อมูลสถานประกอบการ',
        'link' => 'https://lookerstudio.google.com/s/uvbljH9fO_U',
        'icon' => 'bi bi-pie-chart-fill',
        'target' => '_blank',
        'modal' => null
    ),
    'e-porfolio' => array(
        'title' => 'E-Porfolio นักศึกษา',
        'link' => 'https://www.oreg.rmutt.ac.th/?page_id=9968',
        'icon' => 'bi bi-file-earmark-person-fill',
        'target' => '_blank',
        'modal' => null
    )   
));
/****************************************************************************************/
/*
    * ตั้งค่าเนื้อหาพิเศษ
    เพิ่มเนื้อหาพิเศษที่ต้องการแสดงในหน้าหลัก ซึ่งจะประกอบไปด้วย ภาพ หัวข้อ และรายละเอียดเล็กน้อย
*/
define('header_sp','CWIE (Cooperative and Work Integrated Education)');
define('detail_sp','คือ หลักสูตรการเรียนการสอนในลักษณะร่วมผลิตระหว่างสถาบันอุดมศึกษาและสถานประกอบการ (ภาครัฐ เอกชน ชุมชน) เพื่อให้บัณฑิตพร้อมสู่โลกแห่งการทำงานจริงได้ทันที มีสมรรถนะตรงกับความต้องการของตลาดงาน สามารถพัฒนาอาชีพในปัจจุบันและเตรียมพร้อมรองรับตำแหน่งงานในอนาคต');
define('link_sp','https://coopsci.rmutt.ac.th/?page_id=2533');
define('link_sp_name','อ่านเพิ่มเติม');
define('img_sp','https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/10606197_9814-scaled.jpg');
/****************************************************************************************/
/*
    * ตั้งค่าการแสดงผลข่าวสาร
*/

// carousel หน้าหลัก
define('CARO_name','carousel-news'); // ชื่อ carousel
define('CARO_CAT', 123);  // หมวดหมู่ข่าวสาร เลือกจากหมวดหมู่ข่าวสารที่มีอยู่ในเว็บไซต์ หากต้องการแสดงทุกหมวดหมู่ให้ใส่ค่า null
define('CARO_LIMIT',5); // จำนวน slider ที่ต้องการแสดง
define('CARO_DATE_AFTER','45 days ago'); // จำนวนวันที่ต้องการแสดงข่าวสาร หากต้องการแสดงทุกวันให้ใส่ค่า null

/* banner หน้าหลัก 
 * หากต้องการแสดง banner ให้ใส่ค่า true หากไม่ต้องการให้ใส่ค่า null 
 * banner จะแสดงเมื่อไม่มีข่าวสารที่ต้องการแสด
*/
define('BANNER',true); // ตัวแปรสำหรับเปิดปิดการแสดง banner
define('BANNER_IMG','https://coopsci.rmutt.ac.th/wp-content/uploads/2023/11/banner.png'); // รูปภาพ banner
define('BANNER_LINK','#'); // ลิงค์ที่ต้องการเชื่อมโยง
define('BANNER_LINK_NAME','สหกิจคืออะไร'); // ข้อความลิงค์
define('BANNER_Header','สหกิจศึกษา<br>คณะวิทยาศาสตร์และเทคโนโลยี'); // หัวข้อ banner
define('BANNER_Detail','ส่งเสริมบัณฑิตให้เชี่ยวชาญ<br>สร้างความชำนาญจากการปฏิบัติ<br>บนพื้นฐานของวิทยาศาสตร์และเทคโนโลยี'); // รายละเอียด banner

// จำนวนข่าวสารที่ต้องการแสดง
define('NEWS_LIMIT',4);

define('CAT_NAME_PRIMATY','ข่าวประชาสัมพันธ์'); // ชื่อหมวดหมู่ข่าวสาร เลือกจากหมวดหมู่ข่าวสารที่มีอยู่ในเว็บไซต์

define('CAT_NAME_SECONDARY','ข่าวประชาสัมพันธ์'); // ชื่อหมวดหมู่ข่าวสาร เลือกจากหมวดหมู่ข่าวสารที่มีอยู่ในเว็บไซต์

/****************************************************************************************/
/*
    * ตั้งค่าลิงค์ที่เกี่ยวข้อง
*/
define('LINK',array(
    /*
        * วิธีใช้
        * 'ชื่อเมนู' => array(
        *   'title' => 'ชื่อเมนู',
        *   'link' => 'ลิงค์',
        *   'logo' => 'โลโก้',
        *   'target' => 'target ของลิงค์ (ใช้ target ของ html)'
    */
    'cwieMhesi' => array(
        'title' => 'สหกิจศึกษาและการศึกษาเชิงบูรณาการกับการทำงาน',
        'link' => '#',
        'logo' => 'assets/images/logo-cwie-mhesi.png',
        'target' => '_blank'
    )
));

/****************************************************************************************/
/*
    * ตั้งค่าวิธีการติดต่อ
*/
// ที่อยู่
define('CONTACT_ADDRESS','อาคาร 1 ชั้น 2 คณะวิทยาศาสตร์ มหาวิทยาลัยเทคโนโลยีมหานคร'); 
// ลิงค์ที่อยู่
define('CONTACT_ADDRESS_LINK','https://goo.gl/maps/6Z4Z9Z7Z7Z7Z7Z7Z7'); 
// เบอร์โทรศัพท์
define('CONTACT_PHONE','02-333-3700 ต่อ 3721'); 
// อีเมล์
define('CONTACT_EMAIL',array(
    'email1' => ''
)); // อีเมล์
define('CONTACT_SOCIAL',array(
    /*
        * วิธีใช้
        * 'ชื่อเมนู' => array(
        *   'title' => 'ชื่อเมนู',
        *   'link' => 'ลิงค์',
        *   'logo' => 'โลโก้',
        *   'target' => 'target ของลิงค์ (ใช้ target ของ html)'
    */
    'facebook' => array(
        'title' => 'Facebook',
        'link' => 'https://www.facebook.com/CoopSciRMUTT',
        'logo' => 'assets/images/logo-facebook.png',
        'target' => '_blank'
    ),
    'line' => array(
        'title' => 'Line',
        'link' => 'https://line.me/R/ti/p/%40coopsci',
        'logo' => 'assets/images/logo-line.png',
        'target' => '_blank'
    ),
    'youtube' => array(
        'title' => 'Youtube',
        'link' => ''
    )
));
?>