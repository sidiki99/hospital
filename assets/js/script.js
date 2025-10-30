function  showText(){
        document.getElementById("sh-rm-text").innerHTML ="With supporting text below as a natural lead-in to additional content.";

      }
      function  removeText(){
        document.getElementById("sh-rm-text").innerHTML ="";

      }
      function  getSum(){
      let firstNumber = document.getElementById("first-num").value;
          let secondNumber = document.getElementById("second-num").value;
          let check = checkValue(firstNumber,secondNumber) ;
          document.getElementById("loader").style.display="09block";

          // if(check==1){
          //   let sum = parseInt(firstNumber)+ parseInt(secondNumber);
          //   document.getElementById("sum-output").innerHTML= "<b> Some of two value is :</b> "+ sum;

          // }
          // else{
          //   alert("Empty fields not allow");
          // }
            setTimeout(function(){
              document.getElementById("loader").style.display="none";

              let sum = parseInt(firstNumber)+ parseInt(secondNumber);
             document.getElementById("sum-output").innerHTML= "<b> Some of two value is :</b> "+ sum;

          },2000)
          
        
      
      }


      function  getSub(){
      let firstNumber = document.getElementById("first-sub").value;
          let secondNumber = document.getElementById("second-sub").value;
        let sub = parseInt(firstNumber)-parseInt(secondNumber);
        let check = checkValue(firstNumber,secondNumber) ;
       
      
         if(check==0){
          alert("not left field  empty");

         }
         else if (firstNumber >= secondNumber){
           document.getElementById("sub-output").innerHTML= "<b> Sub of two value is :</b> "+ sub;

         }
         else{
         
          alert("Second no.  should not be greater then first one");
          document.getElementById("first-sub").value="";
          document.getElementById("second-sub").value="";
          document.getElementById("sub-output").innerHTML="";
         
         }
        
      }



       

         function  getMul(){
      let firstNumber = document.getElementById("first-mul").value;
          let secondNumber = document.getElementById("second-mul").value;
        let sub = parseInt(firstNumber)*parseInt(secondNumber);
         let check = checkValue(firstNumber,secondNumber) ;
         if (check==1){
          document.getElementById("mul-output").innerHTML= "<b> Multiple  of two value is :</b> "+ sub;
         } else{
         
          alert("not left field  empty");      
         
          
         }
          
      
      }

         function  getDiv(){
      let firstNumber = document.getElementById("first-div").value;
          let secondNumber = document.getElementById("second-div").value;
        let sub = parseInt(firstNumber)/parseInt(secondNumber);
          let check = checkValue(firstNumber,secondNumber) ;
         if (check==1){
           document.getElementById("div-output").innerHTML= "<b> Division  of two value is :</b> "+ sub;
         } else{
         alert("not left field  empty");  
         
          
         }
          

         
      
      }
       function checkValue(num1,num2){
        if(num1!="" && num2!="" ){
          return 1;

        } else{
          return 0;
        }
        
       }

       function getCal(){
         let firstNum= document.getElementById("first-cal").value;
          let secondNum= document.getElementById("second-cal").value;
          let operator= document.getElementById("operators").value;
            let check = checkValue(firstNum,secondNum) ;
         if(check==0){
          alert("Please Enter Numbers In Input fields");

         }
          else if(operator == "sum" ){
         
             let sub = parseInt(firstNum)+parseInt(secondNum);
              document.getElementById("cal-output").innerHTML= "<b> Multiple  of two value is :</b> "+ sub;
          }

          else if(operator == "sub" ){
            if(firstNum < secondNum){
               alert("Second no.  should not be greater then first one");
          document.getElementById("first-cal").value="";
          document.getElementById("second-cal").value="";
          document.getElementById("cal-output").innerHTML="";


            }else{
            let sub = parseInt(firstNum)-parseInt(secondNum);
              document.getElementById("cal-output").innerHTML= "<b> Multiple  of two value is :</b>"+ sub; 

          }}

           else if(operator == "mul" ){
            let sub = parseInt(firstNum)*parseInt(secondNum);
              document.getElementById("cal-output").innerHTML= "<b> Multiple  of two value is :</b>"+ sub; 

          }
               else if(operator == "division" ){
            let sub = parseInt(firstNum)/parseInt(secondNum);
              document.getElementById("cal-output").innerHTML= "<b> Multiple  of two value is :</b> "+ sub;

          }
          else{
            Alter("Please Select Operators");
          }
       }


      


function getBg(){
    document.getElementById("first-bg").style.backgroundColor="lightblue";
    document.getElementById("second-bg").style.backgroundColor="lightblue";
 
}
function getBgReset(){
   document.getElementById("first-bg").style.backgroundColor="";
    document.getElementById("second-bg").style.backgroundColor="";
 
}

function makeTable() {
      const num = document.getElementById("first-bg").value;
      const resultDiv = document.getElementById("bg-output");

      if (num === "") {
        resultDiv.innerHTML = "<b>Please enter a number first!</b>";
        return;
      }

      let tableHTML = "<h3>Table of " + num + "</h3>";
      for (let i = 1; i <= 10; i++) {
        tableHTML += `${num} x ${i} = ${num * i} <br>`;
      }

      resultDiv.innerHTML = tableHTML;
    }

     function changeColor(){
      const card =document.getElementById("action-card").value;
      const Select = document.getElementById("cal-operation");

     } 


    let random = Math.random();
    let num= random*20;
    let round=Math.floor(num)+1;
    console.log(round);
        
     function randomNum(){
      let input = document.getElementById("r-num").value;
      let p = document.getElementById("random-output");
     
       if(round==input){
         p.innerHTML="Match Succfuly";

       } else if(round>input){
         p.innerHTML="Please Enter large No. then " + input;

       }
       else{
         p.innerHTML="Please Enter small No. then "+ input;

       }

     }

        
      function handOtherCard(){
        document.getElementsById("card1").style.backgroundColor="lightblue";
      }
      function resetOtherCard(){
        document.getElementById("card1").style.backgroundColor="";
        
      }

      
