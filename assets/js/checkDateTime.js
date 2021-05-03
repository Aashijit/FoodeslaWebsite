 

 
 
 //Minimun date selection
 var t = new Date();
 var today = "";
   

 var dd = t.getDate();
 var mm = t.getMonth()+1; //January is 0 so need to add 1 to make it 1!
 var yyyy = t.getFullYear();
 if(dd<10){
   dd='0'+dd
 } 
 if(mm<10){
   mm='0'+mm
 } 

 today = yyyy+'-'+mm+'-'+dd;
 document.getElementById("book-date").setAttribute("min", today);

 function checkDate() {
    console.log(document.getElementById("book-date").value);

    if(today === document.getElementById("book-date").value ) {
        disableTime();
    } else {
        // location.reload();
        enableTime();

    }

}

 //Minimum time
 function disableTime() {
   var currentHours = parseInt(t.getHours()*60 + t.getMinutes());

   //Check for 10
   var time10 = document.getElementById("book-time10").value;
   var time10 = time10.split(":");
   var check10 = parseInt(parseInt(time10[0]*60) + parseInt(time10[1]));

   if(currentHours > check10) {
     document.getElementById("book-time10").disabled = true;
   }
   

   //Check for 10:30
   var time1030 = document.getElementById("book-time10:30").value;
   var time1030 = time1030.split(":");
   var check1030 = parseInt(parseInt(time1030[0]*60) + parseInt(time1030[1]));

   if(currentHours > check1030) {
     document.getElementById("book-time10:30").disabled = true;
   }

   //Check for 11
   var time11 = document.getElementById("book-time11").value;
   var time11 = time11.split(":");
   var check11 = parseInt(parseInt(time11[0]*60) + parseInt(time11[1]));

   if(currentHours > check11) {
       
     document.getElementById("book-time11").disabled = true;
   }

   //Check for 11:30
   var time1130 = document.getElementById("book-time11:30").value;
   var time1130 = time1130.split(":");
   var check1130 = parseInt(parseInt(time1130[0]*60) + parseInt(time1130[1]));

   if(currentHours > check1130) {
     document.getElementById("book-time11:30").disabled = true;
   }

   //Check for 12
   var time12 = document.getElementById("book-time12").value;
   var time12 = time12.split(":");
   var check12 = parseInt(parseInt(time12[0]*60) + parseInt(time12[1]));

   if(currentHours > check12) {
       
     document.getElementById("book-time12").disabled = true;
   }

   
   //Check for 11:30
   var time1230 = document.getElementById("book-time12:30").value;
   var time1230 = time1230.split(":");
   var check1230 = parseInt(parseInt(time1230[0]*60) + parseInt(time1230[1]));

   if(currentHours > check1230) {
       
     document.getElementById("book-time12:30").disabled = true;
   }

   
   //Check for 1
   var time1 = document.getElementById("book-time1").value;
   var time1 = time1.split(":");
   var check1 = parseInt(parseInt(time1[0]*60) + parseInt(time1[1]));

   if(currentHours > check1) {
       
     document.getElementById("book-time1").disabled = true;
   }

   //Check for 1:30
   var time0130 = document.getElementById("book-time1:30").value;
   var time0130 = time0130.split(":");
   var check0130 = parseInt(parseInt(time0130[0]*60) + parseInt(time0130[1]));

   if(currentHours > check0130) {
       
     document.getElementById("book-time1:30").disabled = true;
   }

   //Check for 1
   var time2 = document.getElementById("book-time2").value;
   var time2 = time2.split(":");
   var check2 = parseInt(parseInt(time2[0]*60) + parseInt(time2[1]));

   if(currentHours > check2) {
       
     document.getElementById("book-time2").disabled = true;
   }

   //Check for 1:30
   var time0230 = document.getElementById("book-time2:30").value;
   var time0230 = time0230.split(":");
   var check0230 = parseInt(parseInt(time0230[0]*60) + parseInt(time0230[1]));

   if(currentHours > check0230) {
       
     document.getElementById("book-time2:30").disabled = true;
   }

   
   //Check for 3
   var time3 = document.getElementById("book-time3").value;
   var time3 = time3.split(":");
   var check3 = parseInt(parseInt(time3[0]*60) + parseInt(time3[1]));

   if(currentHours > check3) {
       
     document.getElementById("book-time3").disabled = true;
   }

   //Check for 3:30
   var time0330 = document.getElementById("book-time3:30").value;
   var time0330 = time0330.split(":");
   var check0330 = parseInt(parseInt(time0330[0]*60) + parseInt(time0330[1]));

   if(currentHours > check0330) {
       
     document.getElementById("book-time3:30").disabled = true;
   }

   //Check for 4
   var time4 = document.getElementById("book-time4").value;
   var time4 = time4.split(":");
   var check4 = parseInt(parseInt(time4[0]*60) + parseInt(time4[1]));

   if(currentHours > check4) {
       
     document.getElementById("book-time4").disabled = true;
   }

   //Check for 5
   var time5 = document.getElementById("book-time5").value;
   var time5 = time5.split(":");
   var check5 = parseInt(parseInt(time5[0]*60) + parseInt(time5[1]));

   if(currentHours > check5) {
       
     document.getElementById("book-time5").disabled = true;
   }

   


   // return null;
 }


 function enableTime() {
    document.getElementById("book-time10").disabled = false;
    document.getElementById("book-time10:30").disabled = false;
    document.getElementById("book-time11").disabled = false;
    document.getElementById("book-time11:30").disabled = false;
    document.getElementById("book-time12").disabled = false;
    document.getElementById("book-time12:30").disabled = false;
    document.getElementById("book-time1").disabled = false;
    document.getElementById("book-time1:30").disabled = false;
    document.getElementById("book-time2").disabled = false;
    document.getElementById("book-time2:30").disabled = false;
    document.getElementById("book-time3").disabled = false;
    document.getElementById("book-time3:30").disabled = false;
    document.getElementById("book-time4").disabled = false;
    document.getElementById("book-time5").disabled = false;

 }

