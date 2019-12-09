<template>
      <section class="form_req">
              <div class="card mx-xl-5">
                <div class="card-body">                
                  <form @submit.prevent="form_req">
                    <p class="h4 text-center py-4">Input data here</p>   
                    <mdb-alert color="danger" v-if="error">
                      {{ error }}
                    </mdb-alert>           
                    <label htmlFor="defaultFormCardNameEx" class="grey-text font-weight-light">Order ID</label>
                    <input v-model="order_id" type="text" id="defaultorderidCardNameEx" class="form-control" required/>
                    <br />
                    <label htmlFor="defaultFormCardEmailEx" class="grey-text font-weight-light">Amount</label>
                    <input v-model="amount" type="text" id="defaultFormamountEx" class="form-control" required/>
                    <br />
                    <label htmlFor="defaultFormCardNameEx" class="grey-text font-weight-light">Your email</label>
                    <input v-model="email" type="text" id="defaultEmailCardNameEx" class="form-control" required/>
                    <br />
                    <label htmlFor="defaultFormCardNameEx" class="grey-text font-weight-light">Telephone number</label>
                    <input v-model="telephone" type="text" id="defaultTelephoneCardNameEx" class="form-control" required/>
                    <br />
                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-indigo" type="submit" >Order</button>
                    </div>
                  </form>
                </div>
              </div>
      </section>
</template>


<script>

import { mdbAlert } from 'mdbvue';

export default {
  name: 'login_view',
  data () {
    return {
      order_id: '',
      amount: '',
      email: '',
      telephone: '',
      error: false
    }
  },
  components: {
    mdbAlert   
  },  


  methods: {

    //Processing the inputs from this page
    form_req() {
            let shipname = this.order_id;
            let amount = this.amount;
            let email = this.email;
            let telephone = this.telephone;
            let merchant_cred = "23123123";
            let merchant_id = "23123"
            let country = "MY";
            let api_key = "e368ed39-c033-4cde-8007-438265e1d7e5";
            let gst = "0.00";
            let svc = "0.00";
            let del = "0.00";
            this.$store
              .dispatch("form_req", { shipname, email, amount, country, telephone, merchant_cred, api_key, merchant_id, gst, svc, del})
              .then(() => this.passSuccessful())
              .catch(() => this.passFailed())

    },
   //The processing already been done in store.js (See )
   passSuccessful () {
   },  
   //It will parse an error from the API
   passFailed () {
     this.error = "error";
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
