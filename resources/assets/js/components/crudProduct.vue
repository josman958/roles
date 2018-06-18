<template>
        <div class="col-md-10">
                <form-product></form-product>
                <product v-for="producto in productos" :key="producto.id" :producto="producto">  </product>      
        </div>
</template>

<script>
    export default {
        data(){
            return {
                productos:[{
                    'id':1,
                    'descripcion':'132465798',
                    'f_creacion':'15/02/95' 
                }]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
