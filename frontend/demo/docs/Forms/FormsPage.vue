<template>
  <mdb-container>
    <mdb-row class="mt-5 align-items-center justify-content-start">
      <h4 class="demo-title"><strong>Forms</strong></h4>
      <a href="https://mdbootstrap.com/docs/vue/forms/basic/?utm_source=DemoApp&utm_medium=MDBVueFree" waves-fixed class="border grey-text px-2 border-light rounded ml-2" target="_blank"><mdb-icon icon="graduation-cap" class="mr-2"/>Docs</a>
    </mdb-row>
    <hr />
    <mdb-container>
      <section class="demo-section">
        <h4>Form login</h4>
        <section>
          <mdb-row>
            <mdb-col md="6">
              <form>
                <p class="h4 text-center mb-4">Sign in</p>
                <div class="grey-text">
                  <mdb-input label="Your email" icon="envelope" type="email"/>
                  <mdb-input label="Your password" icon="lock" type="password"/>
                </div>
                <div class="text-center">
                  <mdb-btn>Login</mdb-btn>
                </div>
              </form>
            </mdb-col>
            <mdb-col md="6">
              <form>
                <p class="h4 text-center mb-4">Sign in</p>
                <label for="defaultFormLoginEmailEx" class="grey-text">Your email</label>
                <input type="email" id="defaultFormLoginEmailEx" class="form-control"/>
                <br/>
                <label for="defaultFormLoginPasswordEx" class="grey-text">Your password</label>
                <input type="password" id="defaultFormLoginPasswordEx" class="form-control"/>
                <div class="text-center mt-4">
                  <button class="btn btn-indigo" type="submit">Login</button>
                </div>
              </form>
            </mdb-col>
          </mdb-row>
        </section>
      </section>
      <section class="demo-section">
        <h4>Form with icons</h4>
        <section>
          <mdb-row>
            <mdb-col md="6" class="pb-2">
              <mdb-card class="purple-text grey lighten-4">
                <mdb-card-header class="pt-4 white">
                  <mdb-card-title><strong>Reservation</strong></mdb-card-title>
                </mdb-card-header>
                <mdb-card-body>
                  <mdb-row>
                    <mdb-col>
                      <mdb-input label="name" far icon="user" placeholder="John Smith"/>
                      <mdb-input :min="2" :max="10" icon="edit" far type="number" label="guests" v-model="guests"/>
                      <mdb-textarea :rows="4" label="special requests" far icon="comment" placeholder="Vegetarian menu"/> 
                    </mdb-col>
                  </mdb-row>
                </mdb-card-body>
                <mdb-card-footer class="d-flex white justify-content-end">
                  <mdb-btn outline="purple" icon="paper-plane">Reserve table</mdb-btn>
                </mdb-card-footer>
              </mdb-card>
            </mdb-col>
            <mdb-col md="6">
              <mdb-card class="purple-text">
                <mdb-card-header class="pt-4 grey lighten-4">
                  <mdb-card-title><strong>Reservation</strong></mdb-card-title>
                </mdb-card-header>
                <mdb-card-body>
                  <mdb-row class="mb-4 pb-3">
                    <mdb-col>
                      <mdb-input outline label="name" icon="user"/>
                      <mdb-input outline :min="2" :max="10" icon="edit" type="number" label="guests"/>
                      <mdb-input type="textarea" outline :rows="4" label="special requests" icon="comment"/> 
                    </mdb-col>
                  </mdb-row>
                </mdb-card-body>
                <mdb-card-footer class="d-flex grey lighten-4 justify-content-end">
                  <mdb-btn outline="purple" icon="paper-plane">Reserve table</mdb-btn>
                </mdb-card-footer>
              </mdb-card>
            </mdb-col>
          </mdb-row>
        </section>
      </section>
      <section class="demo-section">
        <h4>Form register</h4>
        <section>
          <mdb-row>
            <mdb-col md="6">
              <form>
                <p class="h4 text-center mb-4">Sign up</p>
                <div class="grey-text">
                  <mdb-input label="Your name" icon="user" type="text"/>
                  <mdb-input label="Your email" icon="envelope" type="email"/>
                  <mdb-input label="Confirm your email" icon="exclamation-triangle" type="text"/>
                  <mdb-input label="Your password" icon="lock" type="password"/>
                </div>
                <div class="text-center">
                  <mdb-btn color="primary">Register</mdb-btn>
                </div>
              </form>
            </mdb-col>
            <mdb-col md="6">
              <form>
                <p class="h4 text-center mb-4">Sign up</p>
                <label for="defaultFormRegisterNameEx" class="grey-text">Your name</label>
                <input type="text" id="defaultFormRegisterNameEx" class="form-control"/>
                <br/>
                <label for="defaultFormRegisterEmailEx" class="grey-text">Your email</label>
                <input type="email" id="defaultFormRegisterEmailEx" class="form-control"/>
                <br/>
                <label for="defaultFormRegisterConfirmEx" class="grey-text">Confirm your email</label>
                <input type="email" id="defaultFormRegisterConfirmEx" class="form-control"/>
                <br/>
                <label for="defaultFormRegisterPasswordEx" class="grey-text">Your password</label>
                <input type="password" id="defaultFormRegisterPasswordEx" class="form-control"/>
                <div class="text-center mt-4">
                  <button class="btn btn-unique" type="submit">Register</button>
                </div>
              </form>
            </mdb-col>
          </mdb-row>
        </section>
      </section>
      <section class="demo-section">
        <h4>Form subscription</h4>
        <section>
          <mdb-row>
            <mdb-col md="6">
              <form>
                <p class="h5 text-center mb-4">Subscribe</p>
                <div class="grey-text">
                  <mdb-input label="Your name" icon="user" type="text"/>
                  <mdb-input label="Your email" icon="envelope" type="email"/>
                </div>
                <div class="text-center">
                  <mdb-btn outline="info">Send <mdb-icon icon="paper-plane-o" class="ml-1"/></mdb-btn>
                </div>
              </form>
            </mdb-col>
            <mdb-col md="6">
              <form>
                <p class="h4 text-center mb-4">Subscribe</p>
                <label for="defaultFormSubscriptionNameEx" class="grey-text">Your name</label>
                <input type="text" id="defaultFormSubscriptionNameEx" class="form-control"/>
                <br/>
                <label for="defaultFormSubscriptionEmailEx" class="grey-text">Your email</label>
                <input type="email" id="defaultFormSubscriptionEmailEx" class="form-control"/>
                <div class="text-center mt-4">
                  <button class="btn btn-outline-purple" type="submit">Send<i class="far fa-paper-plane ml-2"></i></button>
                </div>
              </form>
            </mdb-col>
          </mdb-row>
        </section>
      </section>
      <section class="demo-section">
        <h4>Form contact</h4>
        <section>
          <mdb-row>
            <mdb-col md="6">
              <form>
                <p class="h4 text-center mb-4">Write to us</p>
                <div class="grey-text">
                  <mdb-input label="Your name" icon="user" group type="text" validate error="wrong" success="right"/>
                  <mdb-input label="Your email" icon="envelope" group type="email" validate error="wrong" success="right"/>
                  <mdb-input label="Subject" icon="tag" group type="text" validate error="wrong" success="right"/>
                  <mdb-textarea :rows="2" label="Your message" icon="pencil-alt"/>
                </div>
                <div class="text-center">
                  <mdb-btn outline="secondary">Send <mdb-icon icon="paper-plane-o" class="ml-1"/></mdb-btn>
                </div>
              </form>
            </mdb-col>
            <mdb-col md="6">
              <form>
                <p class="h4 text-center mb-4">Write to us</p>
                <label for="defaultFormContactNameEx" class="grey-text">Your name</label>
                <input type="text" id="defaultFormContactNameEx" class="form-control"/>
                <br/>
                <label for="defaultFormContactEmailEx" class="grey-text">Your email</label>
                <input type="email" id="defaultFormContactEmailEx" class="form-control"/>
                <br/>
                <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
                <input type="text" id="defaultFormContactSubjectEx" class="form-control"/>
                <br/>
                <label for="defaultFormContactMessageEx" class="grey-text">Your message</label>
                <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3"></textarea>
                <div class="text-center mt-4">
                  <button class="btn btn-outline-warning" type="submit">Send<i class="far fa-paper-plane ml-2"></i></button>
                </div>
              </form>
            </mdb-col>
          </mdb-row>
        </section>
      </section>
      <section class="demo-section">
        <h4>A form within a card</h4>
        <section>
          <mdb-row>
            <mdb-col md="6">
              <mdb-card>
                <mdb-card-body>
                  <form>
                    <p class="h4 text-center py-4">Sign up</p>
                    <div class="grey-text">
                      <mdb-input label="Your name" icon="user" group type="text" validate error="wrong" success="right"/>
                      <mdb-input label="Your email" icon="envelope" group type="email" validate error="wrong" success="right"/>
                      <mdb-input label="Confirm your email" icon="exclamation-triangle" group type="text" validate error="wrong" success="right"/>
                      <mdb-input label="Your password" icon="lock" group type="password" validate/>
                    </div>
                    <div class="text-center py-4 mt-3">
                      <mdb-btn color="cyan" type="submit">Register</mdb-btn>
                    </div>
                  </form>
                </mdb-card-body>
              </mdb-card>
            </mdb-col>
            <mdb-col md="6">
              <div class="card mx-xl-5">
                <div class="card-body">
                  <form>
                    <p class="h4 text-center py-4">Subscribe</p>
                    <label htmlFor="defaultFormCardNameEx" class="grey-text font-weight-light">Your name</label>
                    <input type="text" id="defaultFormCardNameEx" class="form-control" />
                    <br />
                    <label htmlFor="defaultFormCardEmailEx" class="grey-text font-weight-light">Your email</label>
                    <input type="email" id="defaultFormCardEmailEx" class="form-control" />
                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-outline-purple" type="submit">Send<i class="far fa-paper-plane ml-2"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </mdb-col>
          </mdb-row>
        </section>
      </section>
      <section class="demo-section">
        <h4>A form within a modal</h4>
        <section>
          <mdb-row>
            <mdb-col size="12" class="text-center mb-5">
              <mdb-btn @click.native="showModal = true" color="info">Launch modal contact form</mdb-btn>
              <mdb-modal :show="showModal" @close="showModal = false" cascade class="text-left">
                <mdb-modal-header class="primary-color white-text">
                  <h4 class="title"><mdb-icon icon="pencil-alt" /> Contact form</h4>
                </mdb-modal-header>
                <mdb-modal-body class="grey-text">
                  <mdb-input size="sm" label="Your name" icon="user" group type="text" validate error="wrong" success="right"/>
                  <mdb-input size="sm" label="Your email" icon="envelope" group type="email" validate error="wrong" success="right"/>
                  <mdb-input size="sm" label="Subject" icon="tag" group type="text" validate error="wrong" success="right"/>
                  <mdb-textarea size="sm" :rows="2" label="Your message" icon="pencil-alt"/>
                </mdb-modal-body>
                <mdb-modal-footer>
                  <mdb-btn color="secondary" @click.native="showModal = false">Close</mdb-btn>
                  <mdb-btn color="primary">Save changes</mdb-btn>
                </mdb-modal-footer>
              </mdb-modal>
            </mdb-col>
          </mdb-row>
        </section>
      </section>
    </mdb-container>
  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbIcon, mdbCard, mdbCardHeader, mdbCardTitle, mdbCardFooter, mdbCardBody, mdbModal, mdbModalHeader, mdbModalBody, mdbModalFooter } from 'mdbvue';

export default {
  name: 'FormsPage',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbInput,
    mdbTextarea,
    mdbBtn,
    mdbIcon,
    mdbCard,
    mdbCardBody,
    mdbModal,
    mdbModalHeader,
    mdbModalBody,
    mdbModalFooter,
    mdbCardHeader,
    mdbCardFooter,
    mdbCardTitle
  },
  data() {
    return {
      showModal: false,
      guests: 4
    };
  }
};

function validateForm() {
var name = document.getElementById('defaultFormPasswordEx').value;
if (name == "") {
    document.getElementById('status').innerHTML = "Password cannot be empty";
    return false;
}
var email = document.getElementById('defaultEmailCardNameEx').value;
if (email == "") {
    document.getElementById('status').innerHTML = "Email cannot be empty";
    return false;
} else {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(email)){
        document.getElementById('status').innerHTML = "Email format invalid";
        return false;
    }
}
var subject =  document.getElementById('subject').value;
if (subject == "") {
    document.getElementById('status').innerHTML = "Subject cannot be empty";
    return false;
}
var message =  document.getElementById('message').value;
if (message == "") {
    document.getElementById('status').innerHTML = "Message cannot be empty";
    return false;
}
document.getElementById('status').innerHTML = "Sending...";
document.getElementById('contact-form').submit();

}

</script>

<style scoped>
</style>
