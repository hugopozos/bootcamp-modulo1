<script>
import {defineComponent} from "vue";

export default defineComponent({
    name: "MathComponent",
    data() {
        return {
            contador: 1,
            datosAleatorios: [
                '20', '30', '80', '10'
            ]
        }
    },
    methods: {
        math() {
            this.contador++ // Agregarle el this toma en cuenta la variable contador en data()
        }
    }
})
</script>

<template>
    <div>
        <h1>MathComponent</h1>
        <p>{{ contador }}</p>
        <button @click="math">Incrementar</button>
        <br><br>

        <ul>
            <li v-for="datoAleatorio in datosAleatorios" :key="datoAleatorio">{{ datoAleatorio }}</li>
        </ul>

    </div>
</template>

<style scoped>

</style>>