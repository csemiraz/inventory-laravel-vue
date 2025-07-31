<template>
 
    <div class="container-fluid">
      Dashboard -
      {{ store.name }}
    </div>
 
</template>

<script setup>
import { useAuthStore } from '../stores/auth';
const store = useAuthStore();
</script>

<style scoped>

</style>
