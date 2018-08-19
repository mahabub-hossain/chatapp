
require('./bootstrap');

window.Vue = require('vue');

//for view scroll system
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

Vue.component('message', require('./components/message.vue'));

const app = new Vue({
    el: '#app',
    data:{
    	message:'',
    	//chat object where we want to store all mssagers in message arry.

    	chat:{
             message:[]
    	}
    },
    methods:{
    	send(){
    		//checking if input fiels is not empty
    		if (this.message.leng != 0 ) {
                //pushing all message as object in chat
    			this.chat.message.push(this.message);
    			this.message='';
    			
    		} 
    		
    	}
    }

});
