<!--
 * File : index.php (Home)
 * Developer : Agney Patel
 * Website : www.agney.vishwasetu.com
 * Copyright © Agney Patel 2016
 -->
<!DOCTYPE html>
<head>
   <title>Home</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <script language="javascript" type="text/javascript">
      function validateForm() {
          var firstname = document.forms["myForm"]["firstname"].value;
          var lastname = document.forms["myForm"]["lastname"].value;
          var age = document.forms["myForm"]["age"].value;
          var phone = document.forms["myForm"]["phone"].value;
          var phone = document.getElementById("phone");
          var phnchk = /^\d{10}$/;
          var gender = document.forms["myForm"]["gender"].value;
          var dob = document.forms["myForm"]["dob"].value;
          var comment = document.forms["myForm"]["comment"].value;

          if (firstname == "") {
              alert("First Name must be filled");
              return false;
          }
          else
          if (lastname == "") {
              alert("Last Name must be filled");
              return false;

          }
          else
          if (age == "") {
              alert("Age must be filled");
              return false;

          }
          else
          if (phone == "") {
              alert("Phone must be filled");
              return false;

          }
          if(!phnchk.test(phone.value)){
              alert("Enter 10 digit mobile number");
              return false;
          }
          else
          if (gender == "") {
              alert("Gender must be filled");
              return false;

          }
          else
          if (dob == "") {
              alert("Birthdate must be filled");
              return false;

          }
          else
          if (comment == "") {
              alert("Comment must be filled");
              return false;

          }
      }
   </script>
</head>
<body>
   <nav class="white" role="navigation">
      <div class="nav-wrapper container">
         <a id="logo-container" href="index.php" class="brand-logo">Web App</a>
         <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
         </ul>
         <ul id="nav-mobile" class="side-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
         </ul>
         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
   </nav>
   <div class="container">
      <div class="section">
         <div class="row">
            <div class="col s12 center">
               <h3><i class="mdi-content-send brown-text"></i></h3>
               <h4>User Details</h4>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="section">
         <div class="row">
            <div class="row">
               <form class="col s12" name="myForm" action="data.php" onsubmit="return validateForm()" method="POST">
                  <div class="row">
                     <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="firstname" type="text">
                        <label for="firstname">First Name</label>
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="lastname" type="text">
                        <label for="lastname">Last Name</label>
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">perm_identity</i>
                        <input name="age" type="text">
                        <label for="age">Age</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field col s4">
                        <i class="material-icons prefix">phone</i>
                        <input name="phone" id="phone" type="text" length="10">
                        <label for="phone">Phone</label>
                     </div>
                     <div class="input-field col s4">
                        <select name="gender" id="gender" class="browser-default">
                           <option value="" disabled selected>Gender</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">star</i>
                        <input name="dob" type="date" class="datepicker">
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field col s12">
                        <i class="material-icons prefix">chat_bubble_outline</i>
                        <input name="comment" type="text" length="100">
                        <label for="comment">Comments</label>
                     </div>
                  </div>
            </div>
            <center>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
            </button>
            </center>
            </form>
         </div>
      </div>
   </div>
   </div>
   <footer class="page-footer teal">
      <div class="container">
         <div class="row">
            <div class="col l6 s12">
               <h5 class="white-text">About</h5>
               <p class="grey-text text-lighten-4">This simple web app collects user data, stores in the database and can retrieve the data according to the user input.</p>
            </div>
            <div class="col l3 s12">
               <h5 class="white-text">Tech Specs</h5>
               <ul>
                  <li><a class="white-text">HTML</a></li>
                  <li><a class="white-text">CSS</a></li>
                  <li><a class="white-text">Javascript</a></li>
                  <li><a class="white-text">PHP</a></li>
               </ul>
            </div>
            <div class="col l3 s12">
               <h5 class="white-text">At a glance</h5>
               <ul>
                  <li><a class="white-text">Simplified web page</a></li>
                  <li><a class="white-text">Dynamic web site</a></li>
                  <li><a class="white-text">Responsive Design</a></li>
                  <li><a class="white-text">Built on Macintosh</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="footer-copyright">
         <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://agney.vishwasetu.com" target="blank">Agney Patel</a>
         </div>
      </div>
   </footer>
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="js/materialize.js"></script>
   <script src="js/init.js"></script>
</body>
</html>
