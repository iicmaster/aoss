<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agel Independent</title>
<?php echo css_asset('layout.css'); ?>
<?php echo css_asset('style.css'); ?>
<?php echo css_asset($themeName.'/'.$themeName.'.css', 'site'); ?>
<?php echo css_asset($themeName.'/product.css', 'site'); ?>
<style type="text/css"></style>
</head>

<body>
<div id="container" >
  <div class="row">
    <div id="header" class="column grid_16">
      <div class="row"> <img id="logo" class="column grid_5" src="../../../../../assets/modules/site/image/deepEmotion/bg_logo.png" alt="Agel Independent" />
        <div id="navigator" class="column grid_11">
          <ul>
            <li style="margin-left: 80px;"><a href="#" class="active">หน้าแรก</a></li>
            <li><a href="#">ธุรกิจ Agel</a></li>
            <li><a href="#">ผลิตภัณฑ์ Agel</a></li>
            <li><a href="#">ทีมงานของเรา</a></li>
            <li><a href="#">ติดต่อเรา</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="column grid_5">
      <div id="product">
        <h2><?php echo image_asset($themeName.'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Agel core</h2>
        <ul>
          <li>MIN</li>
          <li>UMI</li>
          <li>EXO</li>
        </ul>
        <h2><?php echo image_asset($themeName.'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Agel Active</h2>
        <ul>
          <li>OHM</li>
          <li>SLM / FIT</li>
        </ul>
        <h2><?php echo image_asset($themeName.'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Agel Trive</h2>
        <ul>
          <li>HRT</li>
          <li>CAL</li>
          <li>FLX</li>
          <li>GRN</li>
        </ul>
        <h2><?php echo image_asset($themeName.'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Agel Body</h2>
        <ul>
          <li>GLO</li>
          <li>UMI</li>
          <li>EXO</li>
        </ul>
      </div>
      <div id="contact">
        <h2><?php echo image_asset($themeName.'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?><?php echo image_asset($themeName.'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Get Free Product</h2>
        <form action="" method="post">
          <label for="name">ชื่อ - นามสกุล</label>
          <input name="name" type="text" id="name" maxlength="100" />
          <label for="tel">เบอร์โทรศัพท์</label>
          <input name="tel" type="text" id="tel" maxlength="12" />
          <label for="email">อีเมลล์</label>
          <input type="text" name="email" id="email" />
          <label for="message">ข้อความ</label>
          <textarea name="message" rows="2" id="message" cols="1"></textarea>
          <input type="submit" name="Submit" id="Submit" value="Submit" />
        </form>
      </div>
    </div>
    <div class="column grid_11">
      <div id="vdo">
        <h2><?php echo image_asset($themeName.'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>VDO</h2>
        <div>
          <img src="../../../../assets/image/img_vdo_rec_w.png" width="550" height="415" alt="VDO" />
        </div>
      </div>
      <div id="testimonial">
        <h2>Testimonial</h2>
        <ul>
          <li><img src="../../../../assets/image/img_img_squ_w.png" width="100" height="100" alt="Image" />Overview</li>
          <li><img src="../../../../assets/image/img_img_squ_w.png" width="100" height="100" alt="Image" />บุคลากรทางการแพทย์</li>
          <li><img src="../../../../assets/image/img_img_squ_w.png" width="100" height="100" alt="Image" />ประสบการณ์ผู้ใช้</li>
          <li><img src="../../../../assets/image/img_img_squ_w.png" width="100" height="100" alt="Image" />Why Agel?</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div id="footer" class="column grid_16">
      <p>เว็บไซด์นี้จัดทำโดยนักธุรกิจอิสระ นาย / นางสาว / นาง	................. รหัสสมาชิก ..............</p>
      <p>&quot;ผลิตภัณฑ์เอเจล เป็นผลิตภัณฑ์สำหรับเสริมอาหาร ไม่มีผลในป้องกันหรือรักษาโรค , ควรกินอาหารหลากหลายครบทั้ง 5 หมู่	ในสัดส่วนที่เหมาะสมเป็นประจำ&quot;</p>
    </div>
  </div>
  <div class="clear"></div>
</div>
</body>
</html>