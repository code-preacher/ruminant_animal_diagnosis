
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

if (isset($_POST['sub'])) {
$crud->addDiagnosis($_POST);
}
?>


<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">DIAGNOSIS</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Diagnosis</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="add-diagnose.php" method="POST">
                                     <div class="row p-t-20">


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f1" value="1" >Loss of Appetite: </label>
                                                     </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f2" value="1" >Diarrhea: </label>
                                                     </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f3" value="1" >Extreme Pain Leading to Lameness: </label>
                                                     </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f4" value="1" >Decreased Feed Intake: </label>
                                                     </div>
                                            </div>

                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f5" value="1" >Difficulty in Breath: </label>
                                                     </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f6" value="1" >Redness of Toes: </label>
                                                     </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f7" value="1" >Weakness / Fatique: </label>
                                                     </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f8" value="1" >High Temperature / Fever: </label>
                                                     </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Result :</label>
                                                  <input type="text" name="result" placeholder="Diagnosis Result" class="form-control" required="required" >
                                                     </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Diagnostic Advice :</label>
                                                  <input type="text" name="advice" placeholder="Diagnostic Advice" class="form-control" required="required" >
                                                     </div>
                                            </div>

                                            <div class="offset-sm-4 col-md-10">
                                                        <button type="submit" class="btn btn-success" name="sub"> <i class="ti-plus"></i> Add Diagnosis</button>
                                                       
                                                    </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
 <?php
include 'inc/footer.php';
?>
 
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>