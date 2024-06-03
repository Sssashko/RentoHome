<template>
    <div>
        <section>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <img src="https://img.freepik.com/free-vector/engineer-developer-with-laptop-tablet-code-cross-platform-development-cross-platform-operating-systems-software-environments-concept-bright-vibrant-violet-isolated-illustration_335657-312.jpg"
                            class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-6">
                        <form @submit.prevent="form.post('Login')" class="bg-light p-4 rounded shadow">
                            <!-- Email input -->
                            <div class="mb-4">
                                <label class="form-label" for="email">Email address</label>
                                <input v-model="form.email" type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter a valid email address">
                            </div>

                            <!-- Password input -->
                            <div class="mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input v-model="form.password" type="password" name="password" id="password"
                                    class="form-control" placeholder="Enter password">
                            </div>

                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>

                            <div class="text-center">
                                <button v-if="!isLoggedIn" @click="login" type="submit"
                                    class="btn btn-primary btn-lg px-5">Login</button>
                                <p class="small mt-3">Don't have an account?
                                    <Link :href="route('Register')" class="link-danger"> Register</Link>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
// import Layout from "../../Layout/App.vue";
import { Link, useForm } from "@inertiajs/vue3";

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
            email: "",
            password: "",
        });

        return { form };
    },

};

</script>

<style scoped>
section {
    margin-top: 30px;
    margin-bottom: 60px;
}
</style>
