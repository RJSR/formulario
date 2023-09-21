<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ModalRed from '@/Components/ModalRed.vue';
import Swal from 'sweetalert2';
import { Head } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const form = useForm({});
const props = defineProps({
    redes:{type:Object}
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
            form.delete(route('red.destroy',id));
        }
    })
};

const openModal = (red) => {
    document.getElementById('id2').value = red.id;
    document.getElementById('twitter2').value = red.twitter;
    document.getElementById('ig2').value = red.ig;
    document.getElementById('fb2').value = red.fb;

}

</script>
<template>
    <Head title="Redes"></Head>
    <AuthenticatedLayout>
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
                                        <th>#</th><th>TWITTER</th><th>INSTAGRAM</th><th>FACEBOOK</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="red, i in redes" :key="red.id">
                                        <td>{{ i+1 }}</td>
                                        <td>{{ red.twitter }}</td>
                                        <td>{{ red.ig }}</td>
                                        <td>{{ red.fb }}</td>

                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalEdit" @click="openModal(red)">
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
            <!-- <ModalRed :modal="'modalCreate'" :title="'Añadir Canción'" :op="'1'"></ModalRed> -->
            <ModalRed :modal="'modalEdit'" :title="'Editar Canción'" :op="'2'"></ModalRed>
        </template>
    </AuthenticatedLayout>

</template>