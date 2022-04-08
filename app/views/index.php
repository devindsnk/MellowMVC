<!DOCTYPE html>
<html>

<head>
   <!--Meta-->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale = 1.0" />
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo URLROOT ?>/logo/icon.png">
   <title>Mellow MVC</title>

   <!--Style Sheets-->
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
</head>

<body id="home" class="landingPage customerPages">

   <div class="content">
      <div class="top-container">
         <img src="<?php echo URLROOT ?>/public/logo/logo_banner.png" alt="MellowMV Logo" class="logo">
         <span>A simple MVC based PHP framework with basic core classes and a SQL query builder.</span>
      </div>
      <div class="form-container sub-container">
         <h3>Sample form to post data</h3>
         <form action="<?php echo URLROOT; ?>/Pages/home" method="post">
            <div class="inner-container">
               <div class="textInput-group">
                  <label for="">First Name</label>
                  <input type="text" name="firstName" value="<?php echo $data['fName']; ?>">
                  <span class="error"><?php echo $data['fName_error']; ?></span>
               </div>
               <div class="textInput-group">
                  <label for="">Last Name</label>
                  <input type="text" name="lastName" value="<?php echo $data['lName']; ?>">
                  <span class="error"><?php echo $data['lName_error']; ?></span>
               </div>
               <div class="textInput-group">
                  <label for="">Age</label>
                  <input type="number" name="age" value="<?php echo $data['age']; ?>">
                  <span class="error"><?php echo $data['age_error']; ?></span>
               </div>
               <div class="btn-container">
                  <button class="btn btn-filled btn-theme-purple">Post</button>
               </div>

            </div>
         </form>
      </div>
      <div class="table-container sub-container">
         <h3>Sample table of posted data</h3>
         <table class="content-table">
            <thead>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Age (yrs)</th>
            </thead>
            <tbody>
               <tr>
                  <td> John </td>
                  <td> Snow </td>
                  <td> 35</td>
               </tr>
               <?php foreach ($data['userData'] as $user) : ?>
                  <tr>
                     <td> <?php echo $user->fName; ?></td>
                     <td> <?php echo $user->lName; ?></td>
                     <td> <?php echo $user->age; ?></td>
                  </tr>
               <?php endforeach; ?>

            </tbody>

         </table>
      </div>

   </div>

</body>
<footer>
   <P>© 2022 MellowMVC. Free to use. 😎 </P>
</footer>

<script src="<?php echo URLROOT ?>/public/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT ?>/public/js/home.js"></script>
<script src="<?php echo URLROOT ?>/public/js/fetchRequests/customerFetch.js"></script>

</html>
