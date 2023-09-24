<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ModalDato from '@/Components/ModalDato.vue';
import Swal from 'sweetalert2';
import { Head } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const form = useForm({});
const props = defineProps({
    datos:{type:Object}
});

const eliminar = (id,name) =>{
    const swalWithBootstrapButtons = Swal.mixin({
        buttonsStyling:true
    })
    swalWithBootstrapButtons.fire({
        title:'Seguro de eliminar la canción '+name,
        text: 'Se perderá la canción',
        icon:'question',
        showCancelButton:true,
        confirmButtonText:'<i class = "fa-solid fa-check"></i> Si, eliminar',
        cancelButtonText:'<i class = "fa-solid fa-ban"></i> Cancelar'
    }).then((result) => {
        if(result.isConfirmed){
            form.delete(route('dato.destroy',id));
        }
    })
};

const openModal = (dato) => {
    document.getElementById('id2').value = dato.id;
    document.getElementById('nombre2').value = dato.nombre;
    document.getElementById('rif2').value = dato.rif;
    document.getElementById('tlf12').value = dato.tlf1;
    document.getElementById('tlf22').value = dato.tlf2;
    document.getElementById('correo12').value = dato.correo1;
    document.getElementById('correo22').value = dato.correo2;
    document.getElementById('diredo2').value = dato.diredo;
    document.getElementById('dirpais2').value = dato.dirpais;
}

</script>
<template>
    <Head title="Datos"></Head>
    <AuthenticatedLayout >
        <template #header>
            <div class="container-fluid mt-3 bg-white">
                <div class="row mt-3">
                    <div class="col-md-4 offset-md-4">
                        <div class="d-grid mx-auto">

                        </div>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-md-10 offset-md-1">
                        <div class="table-responsive">
                            <table class="table table-stripeted table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th><th>NOMBRE</th><th>RIF</th><th>TLF 1</th><th>TLF 2</th>
                                        <th>CORREO 1</th><th>CORREO 2</th><th>ESTADO</th><th>PAIS</th><th></th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="dato, i in datos" :key="dato.id">
                                        <td>{{ i+1 }}</td>
                                        <td>{{ dato.nombre }}</td>
                                        <td>{{ dato.rif }}</td>
                                        <td>{{ dato.tlf1 }}</td>
                                        <td>{{ dato.tlf2 }}</td>
                                        <td>{{ dato.correo1 }}</td>
                                        <td>{{ dato.correo2 }}</td>
                                        <td>{{ dato.diredo }}</td>
                                        <td>{{ dato.dirpais }}</td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalEdit" @click="openModal(dato)">
                                            <i class="fa-solid fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <ModalDato :modal="'modalCreate'" :title="'Añadir Canción'" :op="'1'"></ModalDato> -->
            <ModalDato :modal="'modalEdit'" :title="'Editar Canción'" :op="'2'"></ModalDato>
        </template>
    </AuthenticatedLayout>

</template>