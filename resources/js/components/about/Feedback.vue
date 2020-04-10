<template>
    <div class="container">
        <div class="row"
            <form class="form" @submit.prevent="send"  method="POST" action="http://localhost/public/api/feedback">
                <div class="text-center mb-4 mt-4">
                    <h1 class="h3 mb-3 font-weight-normal">ОБРАТНАЯ СВЯЗЬ</h1>
                </div>
                <div class="form-label-group">
                    <label for="name">Имя</label>
                    <input v-model="name" type="text" id="name" class="form-control mb-2" placeholder="Введите имя" required autofocus>
                </div>
                <div class="form-label-group">
                    <label for="phone">Номер телефона</label>
                    <input v-model="phone" type="text" id="phone" class="form-control mb-2" placeholder="Введите номер телефона" required>
                </div>
                <div class="form-label-group">
                    <label for="message">Сообщение</label>
                    <textarea v-model="message" name="message" id="message" class="form-control mb-2" placeholder="Введите сообщение"></textarea>
                </div>
                <button class="btn btn-primary mt-3 mb-3" type="submit">ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>
</template>

<script>
  export default {
    name: "Feedback",
      data() {
        return {
            name: null,
            phone: null,
            message: null,
        }
      },
      methods: {
          send() {
              axios.post('http://localhost/public/api/feedback', {
                    name: this.name,
                    phone: this.phone,
                    message: this.message,
                })
                .then(function (response) {
                    console.log(response);
                    alert(response.data.message);
                })
                .catch(function (error) {
                    console.log(error);
                });
              this.name = '';
              this.phone = '';
              this.message = '';
          }
      },
  }
</script>

<style scoped>
    form {
        width: 100%;
    }
</style>
