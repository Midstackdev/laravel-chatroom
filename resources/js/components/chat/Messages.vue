<template>
	<div class="chat__messages">
		<chat-message v-for="message in messages" :key="message.id" :message="message"></chat-message>
	</div>
</template>

<script>
	import ChatMessage from './Message'

	export default {
		data () {
			return {
				messages: []
			}
		},

		components: {
			ChatMessage
		},

		mounted () {
			axios.get('/chat/messages').then((response) => {
				this.messages = response.data
			})
		}
	}
</script>

<style lang="scss">
	.chat {
		&__messages {
			height: 400px;
			max-height: 400px;
			overflow-y: scroll;
		}
	}
</style>