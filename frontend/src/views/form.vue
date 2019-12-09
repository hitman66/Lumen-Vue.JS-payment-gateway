<template>
  <div class="form">
    <form_component msg="Put the info here"/>
  </div>
</template>

<script>
// @ is an alias to /src

import form_component from '@/components/form_component.vue';

export default {
  name: 'form_view',
  components: {
  form_component
  }
}

</script>
