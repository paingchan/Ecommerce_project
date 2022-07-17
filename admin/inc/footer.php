<?php

//require_once  './function/config.php';
//session_start();
if(!isset($_SESSION['ADMIN']))
    {
        header("location:../index.php");

    }




?>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="ml-25" href="https://facebook.com/paing3218" target="_blank">Paing Chan</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Made with<i data-feather="heart"></i> Paing Chan</span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script> 
    
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

    <!-- datatable -->
    
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    

    
  <!--  <script src="../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script> -->
    
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <script src="app-assets/js/scripts/forms/form-wizard.js"></script>
    <script src="app-assets/js/scripts/pages/app-user-list.js"></script>

    <script src="app-assets/js/scripts/forms/form-input-mask.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>


    <script src="app-assets/js/scripts/pages/app-ecommerce.js"></script>
    <script src="app-assets/vendors/js/extensions/wNumb.min.js"></script>
    <script src="app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>

    <script src="app-assets/js/scripts/pages/app-ecommerce-details.js"></script>

    <script src="app-assets/js/scripts/extensions/ext-component-media-player.js"></script>
    
    <script src="app-assets/js/scripts/pages/page-blog-edit.js"></script>
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/quill.min.js"></script>

    <script src="app-assets/js/scripts/forms/form-select2.js"></script>
    
    <!-- END: Page JS-->

     <script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script> 
    <script src="app-assets/js/scripts/pages/app-invoice-list.js"></script>



    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>