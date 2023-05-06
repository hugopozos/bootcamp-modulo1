<script>
import {defineComponent} from "vue";

export default defineComponent({
    name: "TestComponent",
    data() {
        return {
            something: 'Probando'
        }
    }
})
</script>

<template>
  <div>
      <h1>Test Component</h1>
      <p>{{ something }}</p>
  </div>
</template>

<style scoped>

</style>