<?php
include '../template/header.php'; 
include '../template/side-menu.php'; ?>

<!-- Calculator section here -->
                    <h4 class="text-red">Calculator using PHP, jQuery and CSS(bootstrap) </h4>
                    <em> Windows  style Simple Calculator [Basic funcionality].</em><br>
                    <hr>
                    <div class=" alert alert-info col-sm-3">
                        <em><i class="fa fa-windows"> Calculator</i></em> 
                        <div>
                            <input type="text" id="ans1" class="col-sm-12 bg-info" value="0" style="text-align: right;"><br>
                        </div>
                        <hr>
                        <div class="row calculator">
                        <button class="col-xs-3 btn btn-md btn-grayw" id="wClear" onclick="w('C')">C</button> 
                        <button class="col-xs-3 btn btn-md btn-grayw" onclick="w('|')">+|-</button> 
                        <button class="col-xs-3 btn btn-md btn-grayw" onclick="w('%')">%</button>
                        <button class="col-xs-3 btn btn-md btn-info" onclick="w('/')">/</button> 
                        
                         </div>
                        <div class="row calculator"> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(7)">7</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(8)">8</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(9)">9</button> 
                        <button class="col-xs-3 btn btn-md btn-info" onclick="w('x')">x</button> 
                        
                         </div>
                        <div class="row calculator">
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(4)">4</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(5)">5</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(6)">6</button> 
                        <button class="col-xs-3 btn btn-md btn-info" onclick="w('-')">-</button> 
                        
                         </div>
                        <div class="row calculator">
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(1)">1</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(2)">2</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w(3)">3</button> 
                        <button class="col-xs-3 btn btn-md btn-info" onclick="w('+')">+</button>
                         </div>
                        <div class="row calculator">
                        <button class="col-xs-6 btn btn-md btn-default" onclick="w(0)">0</li> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="w('.')">.</button> 
                        <button class="col-xs-3 btn btn-md btn-info" id="wEqual" onclick="w('=')">=</button> 
                        </div>
                    </div>
                
                <!-- Calculator section End -->
                 
    <script src="../public/phplearning/js/windows.js" ></script>
<?php include '../template/footer.php'; ?>