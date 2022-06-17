<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="https://kit.fontawesome.com/373c4ab039.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue@3"></script>
<title>Welcome to Vue</title>
</head>

<body class="container mt-5">

<section class="container" id="app">
  <div v-for="item of products" id="display-list" class="row d-flex mb-3 align-items-center">
   <div class="col-sm-4">
    <img class="img-fluid d-block" :src="item.image" alt="name">
   </div>
   <div class="col">
     <h3 class="text-info">{{item.name}}</h3>
     <p class="mb-0">description</p>
     <div class="h5 float-right">$price</div>     
    </div>
  </div>
</section>


   

    <script>

var data = {
 products : [
  {
    "id": "532",
    "name": "Slicker Jacket",
    "description": "Wind and rain are no match for our organic bamboo slicker jacket for men and women. Triple stitched seams, zippered pockets, and a stay-tight hood are just a few features of our best-selling jacket.",
    "price": "125",
    "image_title": "slicker-jacket_lynda_29941",
    "image": "https://hplussport.com/wp-content/uploads/2016/12/slicker-jacket_LYNDA_29941.jpg"
  },
  {
    "id": "530",
    "name": "Bamboo Thermal Ski Coat",
    "description": "You'll be the most environmentally conscious skier on the slopes - and the most stylish - wearing our fitted bamboo thermal ski coat, made from organic bamboo with recycled plastic down filling.",
    "price": "99",
    "image": "https://hplussport.com/wp-content/uploads/2016/12/ski-coat_LYNDA_29940.jpg"
  },
  {
    "id": "516",
    "name": "Unisex Thermal Vest",
    "description": "Our thermal vest, made from organic bamboo with recycled plastic down filling, is a favorite of both men and women. You'll help the environment, and have a wear-easy piece for many occasions.",
    "price": "95",
    "image": "https://hplussport.com/wp-content/uploads/2016/12/unisex-thermal-vest_LYNDA_29944.jpg"
  }
 ]
}

var app = new Vue({
 el: '#app',
 data: data
});


</script>

</body>
</html>