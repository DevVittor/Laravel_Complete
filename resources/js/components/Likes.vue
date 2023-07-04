<template>
    <button @click="count++">
        <i class="bi bi-heart-fill text-red-600"></i> {{ count }}
    </button>
</template>
<script>
import { ref } from "vue";

export default {
    data() {
        return {
            count: ref(0),
        };
    },
};
</script>
