<template>
<div>
    <input class="form-control" id="InputPassword1" name="password" placeholder="Mot de passe" :type="show ? 'text' : 'password'" required>
    <small id="passwordHelp" class="form-text text-muted">Minimum 6 caractères. Voir mon mot de passe : <input class="align-middle" type="checkbox" v-model="show"></small>
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
