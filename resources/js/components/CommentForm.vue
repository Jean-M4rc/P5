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
    <ul class="list-unstyled col-lg-6 offset-lg-3">
        <li v-for="(comment, index) in comments" :key="index" class="media my-3 py-2 border border-primary rounded w-auto">
            <img class="flex-end ml-2" src="" width="100px" height="100px" alt="Photo de profil">
            <div class="media-body col-8 flex-start text-left">
                <h4 class="my-0">{{comment}}</h4>
                <small class="text-muted mt-0"> envoyé par {{comment}} le : {{comment}}</small>
                <p class="text-justify">{{comment.content}}</p>
            </div>
        </li>
    </ul>
</div> 
</template>

<script>
export default {
    props:[
        'userid',
        'sellerid',
        'comments',
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
