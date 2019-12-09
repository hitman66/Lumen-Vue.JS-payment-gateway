<template>
  <div class="Login">
    <Login msg="Welcome to my payment gateway"/>
  </div>
</template>

<script>
// @ is an alias to /src

import Login from '@/components/Login.vue';

export default {
  name: 'Login_view',
  components: {
    Login
  }
}

</script>
