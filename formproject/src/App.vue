<template>
  <singupform/>
</template>

<script>

import singupform from "./components/singupform.vue"

export default {
  name: 'App',
  components:{singupform}
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
body{
  background:black;
}
</style>
