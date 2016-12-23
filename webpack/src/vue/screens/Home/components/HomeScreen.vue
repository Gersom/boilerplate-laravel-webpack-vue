<template lang="pug">
  div
    h1 Boilerplate Vue v2 & Stylus-Bemit
    welcome()
</template>

<script>
  import Welcome from './Welcome.vue'
  export default {
    name: 'HomeScreen',
    components: {
      Welcome
    }
  }
</script>
