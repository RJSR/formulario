<script setup>
    import { useForm } from '@inertiajs/vue3';
    import TextInput from '@/Components/TextInput.vue';
    const props = defineProps({
        dato:{type:Object,default:() => ({})},
        modal:String,title:String,op:String
    });
    const form = useForm({
        id:props.dato.id,
        nombre:props.dato.nombre,
        rif:props.dato.rif,
        tlf1:props.dato.tlf1,
        tlf2:props.dato.tlf2,
        correo1:props.dato.correo1,
        correo2:props.dato.correo2,
        diredo:props.dato.diredo,
        dirpais:props.dato.dirpais
    });
    const save = () =>{
        form.post(route('dato.store'),{
            onSuccess: () => cerrar()
        });
    }
    const update = () =>{
        var id = document.getElementById('id2').value;
        form.put(route('dato.update',id),{
            onSuccess: () => cerrar()
        });
    }
    const cerrar = () =>{
        form.reset();
        document.querySelector('#cerrar'+props.op).click();
    };
</script>
<template>
    <div class="modal fade" :id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="h5">{{ title }}</label>
                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <form @submit.prevent="(op === '1' ? save() : update())">
                    <TextInput :id="'id'+op" type="hidden" name="id" v-model="form.id">
                    </TextInput>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"> Nombre</i></span>
                        <TextInput :id="'nombre'+op" class="form-control" type="text"
                        name="nombre" v-model="form.nombre" maxlength="120" placeholder="Nombre"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.nombre" class="text-sm text-danger">
                        {{ form.errors.nombre }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <TextInput :id="'rif'+op" class="form-control" type="text"
                        name="rif" v-model="form.rif" maxlength="100" placeholder="Rif"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.rif" class="text-sm text-danger">
                        {{ form.errors.rif }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <TextInput :id="'tlf1'+op" class="form-control" type="text"
                        name="tlf1" v-model="form.tlf1" maxlength="80" placeholder="Telefono 1"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.tlf1" class="text-sm text-danger">
                        {{ form.errors.tlf1 }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <TextInput :id="'tlf2'+op" class="form-control" type="text"
                        name="tlf2" v-model="form.tlf2" maxlength="80" placeholder="Telefono 2"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.tlf2" class="text-sm text-danger">
                        {{ form.errors.tlf2 }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <TextInput :id="'correo1'+op" class="form-control" type="text"
                        name="correo1" v-model="form.correo1" maxlength="80" placeholder="Correo 1"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.correo1" class="text-sm text-danger">
                        {{ form.errors.correo1 }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <TextInput :id="'correo2'+op" class="form-control" type="text"
                        name="correo2" v-model="form.correo2" maxlength="80" placeholder="Correo 2"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.correo2" class="text-sm text-danger">
                        {{ form.errors.correo2 }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <TextInput :id="'diredo'+op" class="form-control" type="text"
                        name="diredo" v-model="form.diredo" maxlength="80" placeholder="Dir Estado"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.diredo" class="text-sm text-danger">
                        {{ form.errors.diredo }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <TextInput :id="'dirpais'+op" class="form-control" type="text"
                        name="dirpais" v-model="form.dirpais" maxlength="80" placeholder="Dir Pais"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.dirpais" class="text-sm text-danger">
                        {{ form.errors.dirpais }}
                    </div>
                    <div class="d-grid mx-auto">
                        <button class="btn btn-success" :disabled="form.processing">
                        <i class="fa-solid fa-floppy-disk"></i> Guardar
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="submit" :id="'cerrar'+op" 
                data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
        </div>
    </div>
</template>