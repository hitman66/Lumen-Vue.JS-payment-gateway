<template>
      <section class="login">
              <div class="card mx-xl-5">
                <div class="card-body">
                  <div v-if="name">
                  <mdb-list-group>
                    <mdb-list-group-item>Order Number : {{ name.order[0].shipname }}</mdb-list-group-item>
                    <mdb-list-group-item>Order Date : {{ name.order[0].created_at }}</mdb-list-group-item>
                    <mdb-list-group-item>Merchant Name : {{ name.order[0].merchant_cred }} </mdb-list-group-item>
                    <mdb-list-group-item>Order Amount : {{ parseFloat(name.order[0].total_amount).toFixed(2)}}</mdb-list-group-item>
                  </mdb-list-group>       
                  </div>           
                  <form @submit.prevent="login">
                    <p class="h4 text-center py-4">Please login to continue the payment</p>   
                    <mdb-alert color="danger" v-if="error">
                      {{ error }}
                    </mdb-alert>           
                    <label htmlFor="defaultFormCardNameEx" class="grey-text font-weight-light">Your email</label>
                    <input v-model="email" type="text" id="defaultEmailCardNameEx" class="form-control" required/>
                    <br />
                    <label htmlFor="defaultFormCardEmailEx" class="grey-text font-weight-light">Your password</label>
                    <input v-model="password" type="password" id="defaultFormPasswordEx" class="form-control" required/>
                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-indigo" type="submit" >Login</button>
                    </div>
                  </form>
                </div>
              </div>
      </section>
</template>

<script>

import { mdbAlert, mdbListGroup, mdbListGroupItem } from 'mdbvue';
import axios from 'axios'

export default {
  name: 'login_view',
  data () {
    return {
      id: this.$route.params.hash,
      date: name.shipname,
      name: null,
      email: '',
      password: '',
      error: false
    }
  },
  mounted : function() {
    this.getData();
  },
  components: {
    mdbAlert,
    mdbListGroup,
    mdbListGroupItem    
  },  
  methods: {
     //this function will validate the login properties and token will be given (check store.js)
    login () {
            let email = this.email;
            let password = this.password;
            this.$store
              .dispatch("login", { email, password })
              .then(request => this.loginSuccessful(request))
              .catch(() => this.loginFailed())
  },
    //this function fetches the info that we registered beforehand
    getData() {
      var that = this
     axios.get('http://localhost:9000/api/order/'+ this.$route.params.hash).then(function(response) {
     that.name = response.data
     console.log(localStorage.getItem('token'));
    })
    },
    //if login sucessful
    loginSuccessful (req) {
     if (!req.data.token) {
       this.loginFailed()
       return
     }
   
     localStorage.token = req.data.token
     this.error = false
   
     this.$router.replace(this.$route.query.redirect || '/payment_confirmation/'+ this.$route.params.hash)
   },  

   //if login failed
   loginFailed () {
     this.error = 'Login failed!'
   },

   //checks the login status of the user 
   updated () {
     this.checkCurrentLogin()
   },

   //if the user is still login then the user will be redirected to payment page
   checkCurrentLogin () {
     if (localStorage.token) {
       this.$router.replace(this.$route.query.redirect || '/payment_confirmation/'+ this.$route.params.hash)
     }
   },
 }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  font-weight: normal;
  padding-top: 20px;
  padding-bottom: 30px;
}
p {
  color: #969696;
  margin-bottom: 0;
  font-size: 14px;
}

</style>
