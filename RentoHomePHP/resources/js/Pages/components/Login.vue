<template>
  <div>
    <section>
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://img.freepik.com/free-vector/engineer-developer-with-laptop-tablet-code-cross-platform-development-cross-platform-operating-systems-software-environments-concept-bright-vibrant-violet-isolated-illustration_335657-312.jpg"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form @submit.prevent="form.post('Login')">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input
                v-model="form.email"
                type="email"
                name="email"
                id="email"
                class="email"
                placeholder="Enter a valid email address"/>
                <label class="form-label" for="email">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input
                v-model="form.password"
                type="password"
                name="password"
                id="password"
                class="password"
                placeholder="Enter password" />
                <label class="form-label" for="password">Password</label>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <!-- <Link :href="route('Register')" class="text-body">Forgot password?</Link> -->
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button v-if="!isLoggedIn" @click="login" type="submit" class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <Link :href="route('Register')" class="link-danger"> Register</Link> </p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div>
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
  margin-top: 200px;
  margin-bottom: 150px;
}

</style>
