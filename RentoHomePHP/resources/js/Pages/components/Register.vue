<template>
    <section class="vh-auto pt-0" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11 my-5">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <!-- <div class="mt-2 mb-6 text-sm text-red-600">
                                        <strong>Error!</strong> There was an error sending your message
                                        <span class="mail-error-message text-1 d-block"></span>
                                    </div> -->
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" @submit.prevent="form.post('Register')">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model="form.name" type="text" name="name" id="name"
                                                    class="form-control" />
                                                <label class="form-label" for="name">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model="form.email" name="email" id="email" type="email"
                                                    class="form-control" />
                                                <label class="form-label" for="email">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa-solid fa-phone fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model="form.phone" name="phone" id="phone" type="text"
                                                    class="form-control" />
                                                <label class="form-label" for="phone">Your Phone Number</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model="form.password" name="password" id="password"
                                                    type="password" class="form-control" />
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model="form.password_confirmation" name="password_confirmation"
                                                    id="password_confirmation" type="password" class="form-control" />
                                                <label class="form-label" for="password_confirmation">Repeat your
                                                    password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
// import Layout from "../../Layout/App.vue";
import { Link, useForm } from "@inertiajs/vue3";
import axios from "axios";

export default {
    components: {
        // Layout,
        Link,
    },
    props: {
        errors: Object,
    },
    setup() {
        const form = useForm({
            name: "",
            email: "",
            phone: "",
            password: "",
            password_confirmation: "",
        });



        return {
            form
        };
    },

};
</script>

<style scoped></style>
