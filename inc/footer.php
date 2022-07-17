<footer id="footer" class="footer color-bg">
<?php require_once  'functions/config.php'; ?>
<?php require_once  'functions/functions.php'; ?>

<?php $setting = setting();
$row=mysqli_fetch_assoc($setting);
 ?>

  <div class="copyright-bar">
    <div class="container">
      <div class="col-xs-12 col-sm-4 no-padding social">
        <ul class="link">
          <li class="fb pull-left"><a target="_blank" rel="nofollow" href="<?php echo $row['Link'] ?>" title="Facebook"></a></li>
          
        </ul>
      </div>
      <div class="col-xs-80 col-sm-4 no-padding copyright"><a target="_blank" href="<?php echo $row['Link'] ?>"><?php echo $row['footer_name'] ?></a> </div>
      <div class="col-xs-12 col-sm-4 no-padding">
        <div class="clearfix payment-methods">
          <ul>
            <li><img src="assets/images/payments/kbz.png" alt=""></li>
            <li><img src="assets/images/payments/Aya.png" alt=""></li>
            <li><img src="assets/images/payments/yoma.jpg" alt=""></li>
            <li><img src="assets/images/payments/cb.jpg" alt=""></li>
            <li><img src="assets/images/payments/kbz_pay.png" alt=""></li>
          </ul>
        </div>
        <!-- /.payment-methods --> 
      </div>
    </div>
  </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="assets/js/jquery-1.11.1.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/echo.min.js"></script> 
<script src="assets/js/jquery.easing-1.3.min.js"></script> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/jquery.rateit.min.js"></script> 
<script src="assets/js/lightbox.min.js"></script> 
<script src="assets/js/bootstrap-select.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/scripts.js"></script>
<script src="assets/js/jquery.js"></script>

</body>

</html>