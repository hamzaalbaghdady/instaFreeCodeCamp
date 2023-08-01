<template>
    <div>
        <button class="btn btn-primary btn-sm mx-3" style="height: fit-content;" @click="followUser" v-text="button_text"></button>
    </div>
</template>

<script>
    export default {
        props:['userId','follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function() {
            return{
                status:this.follows
            }
        },
        
        methods: {
            followUser(){
                axios.post('/follow/' + this.userId)
                .then(Response=>{
                    this.status=!this.status;
                    console.log(Response.data);
                })
                .catch(errors =>{
                    if(errors.response.status == 401){
                        window.location='/login';
                    }
                });
            }
        },
        computed:{
            button_text(){
                return (this.status)?"Unfollow":"Follow";
            }
        }
    }
</script>
