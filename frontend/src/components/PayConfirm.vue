<template>
      <section class="Pay_confirm">
        <section>
              <div class="card mx-xl-5">
                <div class="card-body">
                    <p class="h4 text-center py-4">Confirmation of the payment</p>
                    <div v-if="name">
                    <h1>Total payment : RM {{ parseFloat(name.order[0].total_amount).toFixed(2) }}</h1>
                    </div>
                    <p>Do you want to confirm the payment?</p>
                    <div v-if="name2">
                    <p>Total wallet balance : RM {{ parseFloat(name2.test.amount).toFixed(2) }}</p>
                    </div>
                    <br>
                    <div>
                      <mdb-btn size="lg" @click="calculate" color="primary">Yes</mdb-btn>                                                       
                      <mdb-btn size="lg" @click="logout" color="default">No</mdb-btn>
                    </div>
                </div>
              </div>
        </section>
      </section>
</template>

<script>

import { mdbBtn } from 'mdbvue';
import axios from 'axios';

export default {
  name: 'Pay_confirm',
        data () {
            return {
                email: 0,
                name: null,
                name2: null,
            }
        },
        components: {
            mdbBtn
        },
  mounted : function() {
    this.getData();
    this.getUser();
  },
  methods: {
    logout() {
            localStorage.removeItem('token')
            this.$router.push('/form')
    },

    //this is where the calculation for if the user can successfully do the payment or otherwise
    calculate() {

          var that = this
          axios.get('http://localhost:9000/api/order/'+ this.$route.params.hash).then(function(response) {
          that.name = response.data
          axios.get('http://localhost:9000/api/me?token='+ localStorage.getItem('token')).then(function(response2) {
          that.name2 = response2.data
          if  (Number(response.data.order[0].total_amount) >= Number(response2.data.test.amount)) {

            window.alert("You don't have enough funds. Payment aborted");
            localStorage.removeItem('token')
            location.reload(); 
          }
          else {

            window.alert("Payment successful");
            localStorage.removeItem('token')
            location.reload(); 

          }
          })          
          })        
    },
    //this is where we fetch the data for the order payment
    getData() {
     var that = this
     axios.get('http://localhost:9000/api/order/'+ this.$route.params.hash).then(function(response) {
     that.name = response.data
    })
    },
    //this is where we fetch the data for user
    getUser() {
     var that = this
    axios.get('http://localhost:9000/api/me?token='+ localStorage.getItem('token')).then(function(response2) {
     that.name2 = response2.data
    })
   },
   updated () {
     this.checkCurrentLogin()
   },
   checkCurrentLogin () {
     if (!localStorage.token) {   
       this.$router.push('/form')
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