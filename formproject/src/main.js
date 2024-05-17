import { createApp } from 'vue';
import singupform from './components/singupform.vue';

const app = createApp({
  components: {
    singupform
  }
});

app.mount('#app');
