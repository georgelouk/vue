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

<nav class="navbar navbar-light sticky-top mr-3">

<!--
    <input v-model="max" type="number" class="form-control" id="max-price" aria-describedby="maxH" />      
    <div id="maxHelp" class="form-text">Set the maximum price to: {{maximus}}</div>
    <textarea v-model="maximus"></textarea>

    <input type="checkbox" class="form-check-input" v-model="maximus" true-value="15" false-value="0">

    <input type="checkbox" class="form-check-input" v-model="checking">

    <input type="checkbox" class="form-check-input" v-model="withValue" true-value="One" false-value="Two">
    <div class="form-text">{{withValue}}</div>

    <input type="checkbox" value="first" class="form-check-input" v-model="myCheckboxes">
    <input type="checkbox" value="second" class="form-check-input" v-model="myCheckboxes">
    <input type="checkbox" value="third" class="form-check-input" v-model="myCheckboxes">
    <div class="form-text">{{myCheckboxes}}</div>
-->

    <span class="font-weight-bold" :class="totalColor">{{currency(cartTotal)}}</span>
    <button 
    :style="warningObject"
    class="btn ml-3"
      @click="displayCart = !displayCart"
      :class="cartBtn"
    id="cartDropdown"
    aria-haspopup="true"
    aria-expanded="false"
      >

    <i class="fas fa-shopping-cart mr-1"></i>
        {{cart.length}}
    </button>

    <div v-if="displayCart" class="list-group" aria-labelledby="cardDropdown">
      <div v-for="(item, index) in cart" :key="index" class="list-group-item d-flex justify-content-between">
        <div>{{item.name}}</div>
        <div class="ml-3 font-weight-bold">{{currency(item.price)}}</div>
      </div>
    </div>


    <input type="range" class="form-range" min="1" max="150" v-model.number="max">
    <div class="badge bg-success ml-3">results : {{FilteredProds.length}}</div>
</nav>

<btn label="Go" type="danger"></btn>
<btn label="Go2" type="danger"></btn>
<btn label="Go3" type="success"></btn>

      <template v-for="(item, myIndex) in FilteredProds">
        <!-- <div v-if="item.price < Number(max)" id="display-list" class="row d-flex mb-3 align-items-center" :key="item.id"> useless meta to filtro-->
          <div class="col-sm-4">
            <img class="img-fluid d-block" :src="item.image" alt="name">
          </div>
          <div class="col">
            <p>{{myIndex + 1}}</p>
            <button :style="borderStyle" @click="addToCart(item)" class="btn btn-success">+</button>
            <h3 class="text-info">{{item.name}}</h3>
            <p class="mb-0">{{item.description}}</p>
            <div class="h5 float-right">{{currency(item.price)}}</div>     
            </div>
          </div>
        <!-- </div> -->
      </template>
   


    <script>

        const App = {
          data() {
            return {
              show: true,
              btnColor: 'btn-success',
              totalColor: 'text-secondary',
              salesBtn: 'btn-secondary',
              warningObject: {
                backgroundColor: 'auto',
                border: 'transparent'
              },
              borderStyle: {
                borderRadius: '50%', 
                border: '3px solid darkgreen'
              },
              checking:true,
              withValue: null,
              myCheckboxes: [],
              maximus:5,
              max: 20,
              message: 'Bamboo Thermal Ski Coat',
              description: 'Hello my freind',
              imgSrc: 'test.png',
              products : [],
              cart: [],
              displayCart: false
            }
          },
          created() {
            fetch("https://hplussport.com/api/products/order/price").then(response => response.json()).then (data => { this.products = data;})
          },
          computed: {
            cartBtn() {
              return {
                'btn-secondary' : this.cartTotal <= 100,
                'btn-success' : this.cartTotal > 100,
                'btn-danger' : this.cartTotal > 200
              }
            },
            FilteredProds() {
              return this.products.filter( item => (item.price < this.max))
            },
            cartTotal() {
              return this.cart.reduce((inc, item) => Number(item.price) + inc, 0)
            }
          },
          methods: {
            transitionColor(el) {
              this.totalColor = 'text-danger';
            },
            resetColor() {
              this.totalColor = 'text-secondary'; 
            },
            addToCart(product) {
              this.cart.push(product);
              if (this.cartTotal >=100) {this.salesBtn = 'btn-success'}
            },
            currency(price) {
              return `$${Number.parseFloat(price).toFixed(2)}`;
            }
          }
          
        }

        app=Vue.createApp(App);

        app.component('btn', {
          props: ['label', 'type'],
          template: `<button :class="['btn','btn-' + (type || 'secondary')]">{{label}}</button>`
        });

        app.component('btnGroup', {
          props: ['label', 'type'],
          template: `<div class="btn-group" role="group" aria-label="label">
            <btn v-for="item in items" :label="item.label" :type="item.type"></btn>
          </div>`
        });
      
        app.mount('#app');

      
</script>

</body>
<style>
  .dropdown-enter-active, .dropdown-leave-active {
    transition: all, 5s ease-in-out;
  }
  .dropdown-enter-from, .dropdown-enter-to {
   opacity:0; transform(-100px);
  }
</style>
</html>