<template>
<div class="my-3 col-lg-6 offset-lg-3">
    <form class="flex-center" @submit.prevent="submitComment">
        <fieldset style="width:100%">
            <div class="form-group">
                <h4>Laissez un commentaire !</h4>
                <label class="text-dark" for="titleComment">Titre de votre commentaire :</label>
                <input class="form-control" id="titleComment" type='text' v-model="title"><br>

                <label class="text-dark text-center" for="TextareaSeller">Votre commentaire :</label>
                <textarea class="form-control" id="TextareaSeller" rows="3" v-model="comment"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Commenter</button>
        </fieldset>
    </form>
</div> 
</template>

<script>
export default {
    props:[
        'userid',
        'sellerid',
    ],

    data(){
        return {
            comment : '',
            title : '',
        }
    },

    methods : {
        submitComment(){
            axios.post('/comments', {
                user : this.userid,
                seller : this.sellerid,
                title : this.title,
                content : this.comment,
            });
        },
       
    }
    
}
</script>
