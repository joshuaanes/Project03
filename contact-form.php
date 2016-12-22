<?php include "inc/top.inc"; ?>
 <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/menu-highlighter.js"></script>

  <script type="text/javascript">
   
      function validate()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
        
        if( document.myForm.phone.value == "" )
         {
            alert( "Please provide your phone number!" );
            document.myForm.phone.focus() ;
            return false;
         }
        
      }

</script>

<h1 class= "contactform">Contact Form</h1>

<form action="database-write.php" name="myForm" onsubmit="return(validate());" onsubmit="return(validateEmail());" method="post">


  <div class="box">
  <label for="name">Name: </label>
  <input type="text" name="name">
  </div>

  <div class="box">
  <label for="email">Email Address: </label>
  <input type="text" name="email">
  </div>

  <div class="box">
  <label for="phone">Phone Number: </label>
  <input type="text" name="phone">
  </div>

   <div class="box">
   <br>
   <label for="message">Message: </label>
   <br>
   <textarea name="message" id="message"></textarea>
   </div>


  <input type="submit" name="send">


 </form>


     <?php include "inc/footer.inc"; ?>
