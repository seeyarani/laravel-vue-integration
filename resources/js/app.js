import './bootstrap';

// // import Alpine from 'alpinejs';

// // window.Alpine = Alpine;

// // Alpine.start();

import { createApp } from 'vue';
import Example from './components/Example.vue';
import Home from './components/Home.vue';

const app = createApp({
    components:{
        Example,
        Home
    }
})


app.mount('#app');
