<template>
            <div class="card">
                <div class="card-header">CRUD DE PRODUCTOS</div>

                <div class="card-body">
                    <!-- <form v-el:custom @submit.prevent="nuevoProducto"> -->
                        <div class="form-group">
                            <label for="nombre">Ingrese Producto</label>
                            <input type="text" class="form-control" name="nombre" v-model="descripcion">
                        </div>
                        <button class="btn btn-primary" v-on:click="capturar">
                            Enviar
                        </button>
                    <!-- </form> -->
                </div>
            </div>
</template>

<script>
    export default {
        data(){
            return {
                descripcion:''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            // nuevoProducto(){
            //     alert(this.descripcion);
            // }
            capturar: function () {
                alert('${this.descripcion}');
		    }
        }
    }
</script>
