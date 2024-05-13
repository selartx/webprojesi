new Vue({
    el: '#app',
    data: {
      formData: {
        name: '',
        email: '',
        message: ''
      }
    },
    methods: {
      clearForm() {
        this.formData.name = '';
        this.formData.email = '';
        this.formData.message = '';
      },
      submitForm() {
       
        if (!this.formData.name.trim() || !this.formData.message.trim()) {
          alert('Lütfen adınızı ve mesajınızı girin.');
          return;
        }
  
     
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(this.formData.email)) {
          alert('Lütfen geçerli bir e-posta adresi girin.');
          return;
        }
        var formattedData = JSON.stringify(this.formData, null, 2);
        localStorage.setItem('formData', formattedData);
        window.location.href = 'submitted.html';
      }
    }
  });
  