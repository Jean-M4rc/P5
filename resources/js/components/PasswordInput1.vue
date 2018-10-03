<template>
<div class="form-group">
    <div class="input-group">
        <input class="form-control" id="InputPassword1" name="password" placeholder="Mot de passe" :type="show ? 'text' : 'password'" required>
        <div class="input-group-append">
            <button type="button" class="input-group-text btn" @click="show = !show"><i v-show="!show" class="far fa-eye"></i><i v-show="show" class="far fa-eye-slash"></i></button>
        </div>
    </div>
    <small id="passwordHelp" class="form-text text-muted">Minimum 6 caractères.</small>
</div>
</template>                         

<script>
export default {
    data(){
        return {
            show : false,
        }
    }
    
}
</script>
