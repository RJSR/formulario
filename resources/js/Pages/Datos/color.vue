<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Swal from 'sweetalert2';
    import { Head } from '@inertiajs/vue3';
    import { useForm } from '@inertiajs/vue3';

    const props = defineProps({
            color:{type:Object,default:() => ({})},
            colors:{type:Object}

    });    
    const form = useForm({
        id:props.color.id,
        maincolor:props.color.maincolor,
        seccolor:props.color.seccolor,
        thirdcolor:props.color.thirdcolor,
        bgcolor:props.color.bgcolor,
        fontcolor:props.color.fontcolor,

    });



    const update = (id) =>{
        const swalWithBootstrapButtons = Swal.mixin({
        buttonsStyling:true
    })
    swalWithBootstrapButtons.fire({
        title: 'Seguro de guardar los colores? ',
        text: 'Se guardaran los colores',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText : '<i class = "fa-solid fa-check"  ></i> Si, guardar',
        cancelButtonText: '<i class = "fa-solid fa-ban"></i> Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            form.put(route('color.update',id));
        }
    })

        
    }

</script>

<template>
    <Head title="Colores"></Head>
    <AuthenticatedLayout>
        <div class="container form-container">
            <div class="row justify-content-center">
                <div class="col-md-12" v-for="color, i in colors" :key="color.id">

                    <div class="card" style="width: 18rem">

                        <div class="card-body">
                            <div class="barracolor" >
                                <div class="colores">
                                    <div class="box1" :style="{ backgroundColor: color.maincolor }"></div>
                                    <div class="box2" :style="{ backgroundColor: color.seccolor }"></div>
                                    <div class="box3" :style="{ backgroundColor: color.thirdcolor }"></div>
                                    <div class="box4" :style="{ backgroundColor: color.bgcolor }"></div>
                                    <div class="box5" :style="{ backgroundColor: color.fontcolor }"></div>
                                </div>
                          </div>
                        <!-- Formulario tipo color -->
                        <form @submit="(update(form.id))">
                            <div class="form-group row">
                                <label class="col-sm-8 col-form-label" for="form.maincolor"
                                    >Color Principal</label>
                                    <div class="col-sm-4">
                                        <input
                                            class="form-control"
                                            type="color"
                                            id="form.maincolor"
                                            name="maincolor"
                                            for="color.maincolor"
                                            v-model="form.maincolor"
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-8 col-form-label" for="color.seccolor"
                                    >Color Secundario</label>
                                    <div class="col-sm-4">
                                        <input
                                            class="form-control"
                                            type="color"
                                            id="color.seccolor"
                                            v-model="form.seccolor"
                                        />
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-8 col-form-label" for="color.thirdcolor"
                                >Color Terciario</label>
                                <div class="col-sm-4">
                                    <input
                                        class="form-control"
                                        type="color"
                                        id="color.thirdcolor"
                                        v-model="form.thirdcolor"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-8 col-form-label" for="color.bgcolor"
                                >Color del Fondo</label>
                                <div class="col-sm-4">
                                    <input
                                        class="form-control"
                                        type="color"
                                        id="color.bgcolor"
                                        v-model="form.bgcolor"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-8 col-form-label" for="color.fontcolor"
                                >Color de la fuente</label>
                                <div class="col-sm-4">
                                    <input
                                        class="form-control"
                                        type="color"
                                        id="color.fontcolor"
                                        v-model="form.fontcolor"
                                    />
                                </div>
                            </div>
                             <div class="d-grid mx-auto">
                                <button class="btn btn-success" 
                                    :disabled="form.processing"
                                    :style="{ backgroundColor: color.thirdcolor, color: color.fontcolor }">
                                    <i class="fa-solid fa-floppy-disk"></i> Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </AuthenticatedLayout>
</template>


<style>
    .form-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .colores{  
        border-radius: 4px;
        margin-bottom: 10px;
        overflow: hidden;
        width: 100%;
        display: flex;
    }

    .box1{
        width: 100%;
        min-height: 42px;
        position: relative;
        display: flex;   
    }
    .box2{
        width: 100%;
        min-height: 42px;
        position: relative;
        display: flex;        
    }
    .box3{
        width: 100%;
        min-height: 42px;
        position: relative;
        display: flex; 
    }
    .box4{
        width: 100%;
        min-height: 42px;
        position: relative;
        display: flex;    
    }
    .box5{
        width: 100%;
        min-height: 42px;
        position: relative;
        display: flex; 
            
    }

</style>