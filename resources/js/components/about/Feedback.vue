<template>
    <div class="container">
        <ul v-if="errors" class="alert-danger font-weight-bold">
            <li v-for="error in errors">{{ error }}</li>
        </ul>
        <div class="row">
            <form class="form col-12" @submit.prevent="send" method="POST" action="http://localhost/pic/api/feedback">
                <div class="text-center mb-4 mt-4">
                    <h1 class="h3 mb-3 font-weight-normal">ОБРАТНАЯ СВЯЗЬ</h1>
                </div>
                <div class="form-label-group">
                    <label for="name">Имя</label>
                    <input v-model="name" type="text" id="name" class="form-control mb-2" placeholder="Введите имя" required autofocus/>
                </div>
                <div class="form-label-group">
                    <label for="phone">Номер телефона</label>
                    <input type="tel"
                           v-model="phone"
                           name="phone"
                           id="phone"
                           placeholder="(xxx) xxx-xxxx"
                           autocomplete="tel"
                           maxlength="14"
                           class="form-control"
                           v-phone
                           pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" required />
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
    Vue.directive('phone', {
        bind(el) {
            el.oninput = function(e) {
                if (!e.isTrusted) {
                    return;
                }
                let x = this.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
                this.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
                el.dispatchEvent(new Event('input'));
            }
        }
    });
    export default {
        name: "Feedback",
        data() {
            return {
                name: null,
                phone: null,
                message: null,
                errors: [],
            }
        },
        methods: {
            send() {
                if (this.name && this.phone) {
                    axios.post(document.location.protocol+'//'+document.location.host+'/public/api/feedback', {
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
                else {
                    this.errors = [];
                    if (!this.name) {
                        this.errors.push('Требуется указать имя');
                    }
                    if (!this.phone) {
                        this.errors.push('Требуется указать номер телефона');
                    }
                }
            }
        },
    }
</script>

<style scoped>
    form {
        width: 100%;
    }
    textarea {
        resize: none;
    }
</style>
