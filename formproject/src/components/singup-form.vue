<template>
  <form @submit.prevent="handlesubmit">
    <label >Email:</label>
    <input type="Email" required v-model="email">
    <label >Password:</label>
    <input type="Password" required v-model="password">
    <label >Role:</label>
   <select v-model="role">
    <option value="developer">Web Developer</option>
    <option value="designer">Web Designer</option>
   </select>
   <label>Text Box</label>
   <input type="text" v-model="textbox" @keyup.enter="addtext">
   <div class="terms">
   <input type="checkbox" required>
   <label>Accept terms and conditions</label>
   </div>
   <div class="submit">
    <button>Gönder</button>
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
        terms:'false',
        textbox:''
    }
},
methods: {
    addtext() {
      console.log(this.textbox);
    },
    handlesubmit(){
     console.log('form gönderildi')
    }
  }
}
</script>
<style>
input[type="checkbox"]{
    display:inline-block;
}
button{
  background:rgb(41, 151, 255);
  border:0;
  padding: 10px 20px;
  margin-top:20px;
  color:white;
  border-radius: 20px;
}
</style>