 <?php
 include"header.php";
 ?>


    <div class="container">

      <div class="row  d-flex align-items-center">
         <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
      <div class="card ">
    <div class="card-header">
     <b> Show And Remove  Text </b>
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      
      <p class="card-text" id="sh-rm-text">
        With supporting text below as a natural lead-in to
         additional content.With supporting text below as 
      </p>
      
      <button class="btn btn-primary " onclick="showText()">Show</button>
      <button class="btn btn-danger " onclick="removeText()">Remove</button>
    </div>
    </div>
         </div>

    <!-- 2nd card -->
      <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
      <div class="card   ">
    <div class="card-header">
       <b>Sum Of Values Of Fields </b>
    </div>
    <div class="card-body">
      <label ><b>First Number</b></label>
      <input type="number" id="first-num"  placeholder="Enter First No.">
      <label ><b>Second Number</b></label>
      <input type="number" id="second-num" placeholder="Enter Second  No.">
       <img style="width: 50px; height: 50px; object-fit: cover; display: none;" src="/images/3d-logo-loader.gif" id="loader">     
      <p id="sum-output"></p>
      <button class="btn btn-primary " onclick="getSum()">Sum</button>
      
      
    </div>
  </div>
  </div>

      <!--3rd card -->
       <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
      <div class="card ">
    <div class="card-header">
      <b>Sub of Values Of Fields </b>
    </div>
    <div class="card-body">
      <label ><b>First Number</b></label>
      <input type="number" id="first-sub" placeholder="Enter First No.">
      <label ><b>Second Number</b></label>
      <input type="number" id="second-sub"placeholder="Enter Second  No.">
      <p id="sub-output"></p>
      <button class="btn btn-primary " onclick="getSub()">Sub</button>
      
      
    </div>
  </div>
  </div>
        
      
   <!-- 4nd card -->
     <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
      <div class="card">
    <div class="card-header">
    <b>Multiple Of Values Of Fields </b>
    </div>
    <div class="card-body">
       <label ><b>First Number</b></label>
      <input type="number" id="first-mul" placeholder="Enter First No.">
      <label ><b>Second Number</b></label>
      <input type="number" id="second-mul" placeholder="Enter Second  No.">
      <p id="mul-output"></p>
      <button class="btn btn-primary " onclick="getMul()">Mul</button>
      
      
    </div>
  </div>
  </div>
  </div>


      <!--5th card -->
      <div class="container mt-3">

      <div class="row  d-flex align-items-center">
        
       <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
      <div class="card">
    <div class="card-header">
 <b>Division of Values Of Fields </b>
    </div>
    <div class="card-body">
       <label ><b>First Number</b></label>
      <input type="number" id="first-div" placeholder="Enter First No.">
      <label ><b>Second Number</b></label>
      <input type="number" id="second-div"placeholder="Enter Second  No.">
      <p id="div-output"></p>
      <button class="btn btn-primary " onclick="getDiv()">Div</button>
      
     </div> 
    </div>
  </div>


        <!-- back ground change -->
   <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
      <div class="card">
    <div class="card-header">
     <b> Bg Color Change Of Fields </b>
    </div>
    <div class="card-body">
       <label ><b>First Number</b></label>
      <input type="number" id="first-bg" placeholder="Enter First No.">
      <label ><b>Second Number</b></label>
      <input type="number" id="second-bg"placeholder="Enter Second  No.">
      <p id="bg-output"></p>
      <button class="btn btn-primary " onclick="getBg()">Color Change</button>
      <button class="btn btn-secondary " onclick="getBgReset()">Reset Color</button>
       <button class="btn btn-dark mt-2 " onclick="makeTable()">Create Table</button>
      
     </div> 
    </div>
  </div>



      <!--  Random Number -->
   <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
      <div class="card h-100 shadow" id="action-card">
    <div class="card-header">
 <b> Guess The Number Game  </b>
    </div>
    <div class="card-body">
       <label ><b>Guess The Number 0 To 20  </b></label>
      
     
      <input type="number" id="r-num" placeholder="Enter The Random No 0 to 20">
      
       <br> <br>
      <button class="btn btn-primary" onclick="randomNum()"> Submit</button>
      
      <p id="random-output"></p>
      
      
     </div> 
    </div>
  </div>
      

       




       <!-- 6th  card  Calculate Values-->
     <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
      <div class="card">
    <div class="card-header">
    <b>Calculate Values</b>
    </div>
    <div class="card-body">
       <label ><b>First Number</b></label>
      <input type="number" id="first-cal" placeholder="Enter First No.">
      <label ><b>Second Number</b></label>
      <input type="number" id="second-cal" placeholder="Enter Second  No.">
      <label ><b>Select Operator</b></label>
      <select id="operators" class="mt-1">
        <option value="sum">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="division">/</option>
      </select>
      <p id="cal-output"></p>
      <button class="btn btn-primary " onclick="getCal()">Calculate</button>
      
      
    </div>
  </div>

  </div>
  
<a href="add.php" class="btn btn-success mt-2">Add Employee</a>
    


  
  </div>

          
            <div class="container-fluid">
            <div class="row">

              <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
            <div class="card22" >
            <div class="card-header">
            Featured
            </div>
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
             <button class="btn btn-primary" onclick="handOtherCard()">Click Me</button>
             <button class="btn btn-secondary" onclick="resetOtherCard()">Reset</button>
            </div>
            </div>
            </div>    

              <div class="col-lg-3 col-md-3  col-sm-12 col-xsm-12 ">
            <div class="card22" >
            <div class="card-header">
            Featured
            </div>
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
           
            </div>
            </div>
            </div>

            </div>
            </div>   
</div>
</div>
</div>
            
        
         
         <?php 
         include"footer.php";
         ?>



    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/js/jquery.js"></script>
    <script>
      function  handOtherCard(){
     $("card22").css("background-color", "yellow");
      }
    </script>
    
    

    </body>
  </html>