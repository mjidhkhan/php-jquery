<?php
/*
 * Copyright (C) 2016 Muhammad
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
include '../template/header.php';
include '../template/side-menu.php';
?>
<div class="row content">
    <div class=" row col-md-12 bg-infp">
        <h4 class="text-red">This is the place where you can create test views and write code </h4>
        <em> Use HTML, PHP in this file.</em><br>
        <hr>                                      
        <div class="row content">
            <div class=" col-md-12">
                <h4>Note:</h4>
                <em class="text-danger"> <p> <strong>jQuery </strong></p> create java script file and <strong> connect </strong> with <strong> this </strong> file and you are good to go.</em><br>
                <em class="text-danger"> Found a simple  <strong> Form Input </strong> sample   below.</em>
                <hr>
                <div class=" page-header"><h4 class="text-info">Response</h4></div>
                <div class="response"></div>
            </div>
        </div>                                   
    </div>               
    <div class=" row col-md-12">
        <div class=" page-header"></div>
        <div class=" col-md-2  form-group">
            <label>Table range</label>
            <input class="form-control" type="number" value="0" id="table">
            <br>
            <label >Table size</label>
            <input class="form-control" type="number" value="0" id="range">
            <br>
        </div>
    </div>
</div>
<script src="../public/phplearning/js/table.js" ></script>
    <?php include '../template/footer.php'; ?>