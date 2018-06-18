<template>
            <div class="card">
                    <div class="card-header">Listado de Productos {{ producto.f_creacion}}</div>
    
                    <div class="card-body">
                            <div class="form-group">
                                <p> {{ producto.descripcion}}</p>
                            </div>
                    </div>
                    <div class="card-footer">
                            <button class="btn btn-default">Editar</button>
                            <button class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
</template>

<script>
    export default {
        props:['producto'],
        data(){
            return{
                producto:{
                    id:'',
                    descripcion:'',
                    f_creacion:''
                }
            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
