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

    <div id="app">



    <input v-model="max" type="number" class="form-control" id="max-price" aria-describedby="maxH" />      
    <div id="maxHelp" class="form-text">Set the maximum price to: {{maximus}}</div>


    <input type="range" class="form-range" min="1" max="150" v-model="max">
  
    <textarea v-model="maximus"></textarea>

    <input type="checkbox" class="form-check-input" v-model="maximus" true-value="15" false-value="0">

    <input type="checkbox" class="form-check-input" v-model="checking">

    <input type="checkbox" class="form-check-input" v-model="withValue" true-value="One" false-value="Two">
    <div class="form-text">{{withValue}}</div>

    <input type="checkbox" value="first" class="form-check-input" v-model="myCheckboxes">
    <input type="checkbox" value="second" class="form-check-input" v-model="myCheckboxes">
    <input type="checkbox" value="third" class="form-check-input" v-model="myCheckboxes">
    <div class="form-text">{{myCheckboxes}}</div>

      <template v-for="(item, myIndex) in products">
        <div v-if="item.price < Number(max)" id="display-list" class="row d-flex mb-3 align-items-center" :key="item.id">
          <div class="col-sm-4">
            <img class="img-fluid d-block" :src="item.image" alt="name">
          </div>
          <div class="col">
            <p>{{myIndex + 1}}</p>
            <h3 class="text-info">{{item.name}}</h3>
            <p class="mb-0">{{item.description}}</p>
            <div class="h5 float-right">{{item.price}}</div>     
            </div>
          </div>
        </div>
      </template>
   


    <script>

        const App = {
          data() {
            return {
              checking:true,
              withValue: null,
              myCheckboxes: [],
              maximus:5,
              max: 20,
              message: 'Bamboo Thermal Ski Coat',
              description: 'Hello my freind',
              imgSrc: 'test.png',
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
          }
        }

       
      Vue.createApp(App).mount('#app')


</script>

</body>
</html>