import './bootstrap';

import {createApp} from 'vue';
import CreateNotariusQueue from "@/Components/CreateNotariusQueue.vue";
import NotariusQueueList from "@/Components/NotariusQueueList.vue";

const app = createApp({
    components: {
        CreateNotariusQueue,
        NotariusQueueList
    }
})

app.mount('#app')
