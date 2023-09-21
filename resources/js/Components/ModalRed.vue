<script setup>
    import { useForm } from '@inertiajs/vue3';
    import TextInput from '@/Components/TextInput.vue';
    const props = defineProps({
        red:{type:Object,default:() => ({})},
        modal:String,title:String,op:String
    });
    const form = useForm({
        id:props.red.id,
        twitter:props.red.twitter,
        ig:props.red.ig,
        fb:props.red.fb

    });
    const save = () =>{
        form.post(route('red.store'),{
            onSuccess: () => cerrar()
        });
    }
    const update = () =>{
        var id = document.getElementById('id2').value;
        form.put(route('red.update',id),{
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
                        <span class="input-group-text"><i class="fa-solid fa-user"> Twitter</i></span>
                        <TextInput :id="'twitter'+op" class="form-control" type="url"
                        name="twitter" v-model="form.twitter" maxlength="150" placeholder="https://www.x.com"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.twitter" class="text-sm text-danger">
                        {{ form.errors.twitter }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user">Instagram</i></span>
                        <TextInput :id="'ig'+op" class="form-control" type="url"
                        name="ig" v-model="form.ig" maxlength="150" placeholder="https://www.instagram.com"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.ig" class="text-sm text-danger">
                        {{ form.errors.ig }}
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <TextInput :id="'fb'+op" class="form-control" type="url"
                        name="fb" v-model="form.fb" maxlength="150" placeholder="https://www.facebook.com"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.fb" class="text-sm text-danger">
                        {{ form.errors.fb }}
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