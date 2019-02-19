<?php
include '../template/header.php';
include '../template/side-menu.php';
?>
<div class="row content">
    <div class=" row col-md-12 bg-infp">
        <h4 class="text-red">Create tables like shown below using PHP, jQuery and CSS(bootstrap) </h4>
        <em> This is what we created using HTML and we want to make it programmatically using PHP.</em><br>
        <hr>
        <div class=" alert alert-info col-md-2">
            <h4> Table of 2 </h4>
            <hr>
            2 x 1 = 2   <br>
            2 x 2 = 4   <br>
            2 x 3 = 6   <br>
            2 x 4 = 8   <br>
            2 x 5 = 10  <br>  
        </div>
        <!--div class=" alert alert-info col-md-2">
            <h4> Table of 3 </h4>
            <hr>
            3 x 1 = 3   <br>
            3 x 2 = 6   <br>
            3 x 3 = 9   <br>
            3 x 4 = 12  <br>
            3 x 5 = 15  <br>  
        </div>
        <div class=" alert alert-info col-md-2">
            <h4> Table of 4 </h4>
            <hr>
            4 x 1 = 4   <br>
            4 x 2 = 8   <br>
            4 x 3 = 12  <br>
            4 x 4 = 16  <br>
            4 x 5 = 20  <br>  
        </div>
        <div class=" alert alert-info col-md-2">
            <h4> Table of 5 </h4>
            <hr>
            5 x 1 = 5   <br>
            5 x 2 = 10  <br>
            5 x 3 = 15  <br>
            5 x 4 = 20  <br>
            5 x 5 = 25  <br>  
        </div>
        <div class=" alert alert-info col-md-2">
            <h4> Table of 6 </h4>
            <hr>
            6 x 1 = 6   <br>
            6 x 2 = 12  <br>
            6 x 3 = 18  <br>
            6 x 4 = 24  <br>
            6 x 5 = 30  <br>  
        </div>
        <div class=" alert alert-info col-md-2">
            <h4> Table of 7 </h4>
            <hr>
            7 x 1 = 7   <br>
            7 x 2 = 14  <br>
            7 x 3 = 21  <br>
            7 x 4 = 28  <br>
            7 x 5 = 35  <br>  
        </div -->
    <!--/div>

    </div>
    <div class=" row col-md-12">
        <div class=" page-header"></div-->
        <div class=" col-md-2  form-group col-xs-offset-1">
            <label>Table range</label>
            <input class="form-control" type="number"  value="0"id="table">
            <br>
            <label >Table size</label>
            <input class="form-control" type="number" value="0" id="range">
            <br>
        </div>
        <div class="col-md-6 col-xs-offset-1">
            <h4>Notes:</h4>
                <em class="text-danger"> If you add <strong> 7 </strong> in Table range and <strong> 5 </strong> in Table size it would create same output as hard coded above.</em><br>
                <em class="text-danger"> If you add <strong> less then 2 </strong> in Table range and <strong> any number </strong> in Table size it must not produce anything.</em>
                
        </div>
        
                <div class="row content">
            <div class=" col-md-12">
                <hr>
                <div class=" page-header"><h4 class="text-info">Response</h4></div>
                <div class="response"></div>
            </div>
        </div>
    </div>
<script src="../public/phplearning/js/table.js" ></script>
<?php include '../template/footer.php'; ?>