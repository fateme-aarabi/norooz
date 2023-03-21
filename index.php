<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php require 'colorpallete.php';  ?>
  <style>
    <?php require __DIR__ . '/styles/index.css'; ?>
  </style>


</head>

<body>
  <?php require 'navbar.php';  ?>
  <div class="bd-filter-listing">
    <input class="bd-filter-listing_input" type="text" placeholder="Find a Listing">
    <div class="bd-icon-container">
      <svg class="bd-filter-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21v-7m0-4V3m8 18v-9m0-4V3m8 18v-5m0-4V3M1 14h6m2-6h6m2 8h6" />
      </svg>
      <svg class="bd-search-icon" xmlns="http://www.w3.org/2000/svg" width="65" height="56" fill="none" viewBox="0 0 65 56">
        <rect width="65" height="56" fill="#569AF6" rx="4" />
        <rect width="64" height="55" x=".5" y=".5" stroke="#3F4B5B" stroke-opacity=".2" rx="3.5" />
        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M34 35a8 8 0 1 1 0-16 8 8 0 0 1 0 16Zm-10 2 4.35-4.35" />
      </svg>

    </div>
  </div>


  <button class="btn-first" >GET BUSINESS DIRECTORY</button>

  <div class="grid category-grid">
    <div class="grid-item"> 
        <img src="styles/images/library-img.jpg" alt="libraries">
    <div class="category-title">
        <h3 class="category-title--main"> Cafes </h3>
        <span class="category-title--sub"> 123 Listing </span>
            </div>
     </div>
   
     <div class="grid-item"> 
        <img src="styles/images/library-img.jpg" alt="libraries">
        <div class="category-title">
        <h3 class="category-title--main"> Cafes </h3>
        <span class="category-title--sub"> 123 Listing </span>
            </div>
     </div>
   
     <div class="grid-item"> 
        <img src="styles/images/library-img.jpg" alt="libraries">
        <div class="category-title">
        <h3 class="category-title--main"> Cafes </h3>
        <span class="category-title--sub"> 123 Listing </span>
            </div>
     
      </div>
    
      <div class="grid-item">
        <img src="styles/images/library-img.jpg" alt="libraries">
        <div class="category-title">
        <h3 class="category-title--main"> Cafes </h3>
        <span class="category-title--sub"> 123 Listing </span>
            </div>
      </div>
  </div>






  <div class="grid price-grid">
    <div class="grid-item"> 

    <div class="price-icon"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
<path d="M9 12H4.6C4.03995 12 3.75992 12 3.54601 12.109C3.35785 12.2049 3.20487 12.3578 3.10899 12.546C3 12.7599 3 13.0399 3 13.6V19.4C3 19.9601 3 20.2401 3.10899 20.454C3.20487 20.6422 3.35785 20.7951 3.54601 20.891C3.75992 21 4.03995 21 4.6 21H9M9 21H15M9 21L9 8.6C9 8.03995 9 7.75992 9.10899 7.54601C9.20487 7.35785 9.35785 7.20487 9.54601 7.10899C9.75992 7 10.0399 7 10.6 7H13.4C13.9601 7 14.2401 7 14.454 7.10899C14.6422 7.20487 14.7951 7.35785 14.891 7.54601C15 7.75992 15 8.03995 15 8.6V21M15 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7951 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V4.6C21 4.03995 21 3.75992 20.891 3.54601C20.7951 3.35785 20.6422 3.20487 20.454 3.10899C20.2401 3 19.9601 3 19.4 3H16.6C16.0399 3 15.7599 3 15.546 3.10899C15.3578 3.20487 15.2049 3.35785 15.109 3.54601C15 3.75992 15 4.03995 15 4.6V8" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
    </div>
    <div class="category-title">
        <h3 class="category-title--main"> Cafes </h3>
        <span class="category-title--sub"> 123 Listing </span>
            </div>

     </div>
   
     <div class="grid-item"> 
        <img src="styles/images/library-img.jpg" alt="libraries">
        <div class="category-title">
        <h3 class="category-title--main"> Cafes </h3>
        <span class="category-title--sub"> 123 Listing </span>
            </div>
     </div>
   
     <div class="grid-item"> 
        <img src="styles/images/library-img.jpg" alt="libraries">
        <div class="category-title">
        <h3 class="category-title--main"> Cafes </h3>
        <span class="category-title--sub"> 123 Listing </span>
            </div>
     
      </div>
    
      <div class="grid-item">
        <img src="styles/images/library-img.jpg" alt="libraries">
        <div class="category-title">
        <h3 class="category-title--main"> Cafes </h3>
        <span class="category-title--sub"> 123 Listing </span>
            </div>
      </div>
  </div>





</body>

</html>