<template>
  <form>
    <label >Email:</label>
    <input type="Email" required v-model="email">
    <label >Password:</label>
    <input type="Email" required v-model="password">
    <label >Role:</label>
   <select v-model="role">
    <option value="developer">Web Developer</option>
    <option value="designer">Web Designer</option>
   </select>
   <div class="terms">
   <input type="checkbox" required>
   <label>Accept terms and conditions</label>
   </div>
  </form>
</template>

<script>
export default {
data(){
    return{
        email:'',
        password:'',
        role:'',
        terms:'false'
    }
}
}
</script>

<style>
input[type="checkbox"]{
    display:inline-block;
}
</style>