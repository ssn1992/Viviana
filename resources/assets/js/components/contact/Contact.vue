<style scoped lang="scss">

</style>
<template>
    <div id="contact">
        <!-- Modal Core -->
        <div class="modal fade" id="modal-response" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 v-if="success" class="modal-title text-center" id="myModalLabel">Obrigado</h4>
                        <h4 v-else class="modal-title text-center" id="myModalLabel">Erro</h4>
                    </div>
                    <div class="modal-body text-center">
                        <div v-if="success">
                            <p>Obrigado. Entrarei em contacto consigo em breve. </p>
                        </div>
                        <div v-else>
                            <p>Occoreu um erro. Por favor tente mais tarde. </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <!-- ==========================
        CONTACT SECTION
        =========================== -->
        <section class="text-center contact-wrap section-padding">
            <!-- To Top Button -->
            <div class="container">
                <!-- Headline -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="arrow">Entre em <span>contacto</span> comigo</h1>
                    </div>
                </div>

                <div class="row contact-details">
                    <!-- Adress Box -->
                    <div class="col-md-4" style="padding-bottom: 10px">
                        <div class="dark-box box-hover" style="min-height: 221px">
                            <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                            <p>Avenida de Dom Afonso Henriques 1196, sala 902
                                Matosinhos</p>
                        </div>
                    </div>
                    <!-- Phone Number Box -->
                    <div class="col-md-4" style="padding-bottom: 10px">
                        <div class="dark-box box-hover" style="min-height: 221px">
                            <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                            <p>+351 912 077 900</p>
                        </div>
                    </div>
                    <!-- E-Mail Box -->
                    <div class="col-md-4" style="padding-bottom: 10px">
                        <div class="dark-box box-hover" style="min-height: 221px">
                            <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                            <p><a href="mailto:geral@vivianamagalhaes.pt">geral@vivianamagalhaes.pt</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Google Maps (Change your Settings below) -->
                    <div class="col-md-6">
                        <div id="googlemaps"></div>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-md-6 contact">
                        <form @submit.prevent="validateBeforeSubmit()" id="form-section-projects" enctype='multipart/form-data'>
                            <!-- Name -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating" :class="{'has-error': errors.has(payload.name.value)}">
                                        <input placeholder="Your name" v-model="payload.name.post" :name=payload.name.value  v-validate :data-vv-rules=payload.name.rules :data-vv-validate-on="validateForm" type="text" class="input form-control">
                                        <span v-show="errors.has(payload.name.value)" class="form-control-feedback"></span>
                                    </div>
                                    <span v-show="errors.has(payload.name.value)" class="help-block text-danger text-center">
                                        <strong style="color: #ec1b33">{{ errors.first(payload.name.value) }}</strong>
                                    </span>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group label-floating" :class="{'has-error': errors.has(payload.email.value)}">
                                        <input placeholder="Email address" v-model="payload.email.post" :name=payload.email.value  v-validate :data-vv-rules=payload.email.rules :data-vv-validate-on="validateForm" type="text" class="input form-control">
                                        <span v-show="errors.has(payload.email.value)" class="form-control-feedback"></span>
                                    </div>
                                    <span v-show="errors.has(payload.email.value)" class="help-block text-danger text-center">
                                        <strong style="color: #ec1b33">{{ errors.first(payload.email.value) }}</strong>
                                    </span>
                                </div>
                            </div>
                            <!-- Message Area -->
                            <div class="form-group">
                                <div class="form-group label-floating" :class="{'has-error': errors.has(payload.text.value)}">
                                    <textarea style="height:176px;" placeholder="Write you message here..." v-model="payload.text.post" :name=payload.text.value  v-validate :data-vv-rules=payload.text.rules :data-vv-validate-on="validateForm" type="text" class="input form-control"></textarea>
                                    <span v-show="errors.has(payload.text.value)" class="form-control-feedback"></span>
                                </div>
                                <span v-show="errors.has(payload.text.value)" class="help-block text-danger text-center">
                                    <strong style="color: #ec1b33">{{ errors.first(payload.text.value) }}</strong>
                                </span>

                                <!-- Subtmit Button -->
                                <button style="width: 100%" type="submit" class="btn btn-send">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="social-buttons">
                            <li><a target="_blank" href="https://www.facebook.com/viviana.magalhaes.5" class="social-btn"><i class="fa fa-facebook"></i></a></li><!-- facebook -->
                            <li><a target="_blank" href="https://www.instagram.com/vivianamagalhaes/" class="social-btn"><i class="fa fa-instagram"></i></a></li><!-- instagram -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========================
        CONTACT SECTION END
        =========================== -->
    </div>
</template>

<script>
    // VeeValidate import
    import VeeValidate from 'vee-validate';
    Vue.use(VeeValidate);

    export default {
        data() {
            return {
                success: false,
                customError: null,
                processQueue: false,
                validateForm: 'none',
                payload: {
                    name         : {
                        fieldType: 'text-field',
                        label : 'Name',
                        value : 'name',
                        rules : 'required',
                        post  : null,
                    },
                    email         : {
                        fieldType: 'text-field',
                        label : 'Email',
                        value : 'email',
                        rules : 'email|required',
                        post  : null,
                    },
                    text         : {
                        fieldType: 'text-field',
                        label : 'Message',
                        value : 'text',
                        rules : 'required',
                        post  : null,
                    }
                }
            }
        },

        methods: {
            payloadMount () {
                let request = this.payload;
                let payload = {};

                // Add payload form inputs
                Object.keys(request).forEach(function (value) {
                    payload[value] = request[value].post;
                });

                return payload;
            },


            cleanForm () {
                let self = this;

                //Clean Form
                Object.keys(self.payload).forEach(function (value) {
                    self.payload[value].post = null
                });
            },

            validateBeforeSubmit() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        this.sendMessage();

                        console.log('Form Submitted!');
                    } else {
                        this.validateForm = null;
                        console.log('Correct them errors!');
                    }
                });
            },

            sendMessage () {
                let self = this;
                let payload = this.payloadMount();

                console.log(payload);

                // Send a POST request
                axios({
                    method: 'post',
                    url: 'send-message',
                    data: payload,
                })

                .then(function (response) {
                    self.success     = true;
                    self.customError = null;
                    $("#modal-response").modal();

                    // Clean Form after submit
                    self.cleanForm();


                })
                .catch(function (error) {
                    self.success = false;
                    $("#modal-response").modal();
                });
            },
        },



    }
</script>
