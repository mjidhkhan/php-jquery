<?php
include '../template/header.php'; 
include '../template/side-menu.php'; ?>

<!-- Calculator section here -->
                    <h4 class="text-red">Calculator using PHP, jQuery and CSS(bootstrap) </h4>
                    <em> Apple style Simple Calculator [Basic funcionality].</em><br>
                    <hr>
                  
                     <div class=" alert alert-warning col-sm-3 col-sm-offset-1">
                        <em><i class="fa fa-apple"> Calculator</i></em> 
                        <div>
                        <input type="text" id="ans2" class=" col-sm-12   bg-warning" value="0" style="text-align: right;" > <br>
                        </div>
                        <hr>
                        <div class="row calculator">
                        <button class="col-xs-3 btn btn-md btn-graya " id="aClear" onclick="a('C')">C</button> 
                        <button class="col-xs-3 btn btn-md btn-graya" onclick="a('|')">+|-</button> 
                        <button class="col-xs-3 btn btn-md btn-graya" onclick="a('%')">%</button>
                        <button class="col-xs-3 btn btn-md btn-warning" onclick="a('/')">/</button> 
                        
                         </div>
                        <div class="row calculator"> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(7)">7</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(8)">8</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(9)">9</button> 
                        <button class="col-xs-3 btn btn-md btn-warning" onclick="a('x')">x</button> 
                        
                         </div>
                        <div class="row calculator">
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(4)">4</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(5)">5</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(6)">6</button> 
                        <button class="col-xs-3 btn btn-md btn-warning"onclick="a('-')">-</button> 
                        
                         </div>
                        <div class="row calculator">
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(1)">1</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(2)">2</button> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a(3)">3</button> 
                        <button class="col-xs-3 btn btn-md btn-warning" onclick="a('+')">+</button>
                         </div>
                        <div class="row calculator">
                        <button class="col-xs-6 btn btn-md btn-default" onclick="a(0)">0</li> 
                        <button class="col-xs-3 btn btn-md btn-default" onclick="a('.')">.</button> 
                        <button class="col-xs-3 btn btn-md btn-warning" id="aEqual" onclick="a('=')">=</button> 
                        </div>
                    </div>
                
                <!-- Calculator section End -->
                 <script src="../public/phplearning/js/apple.js" ></script>
    
<?php include '../template/footer.php'; ?>