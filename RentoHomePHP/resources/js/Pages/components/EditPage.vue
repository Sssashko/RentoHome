<template>
    <div class="container p-5" id="container">
        <form @submit.prevent="form.post('EditPage')">

        <!-- Name -->
    <div class="form-group mt-2">
        <label class="form-label" for="name">Your Name</label>
        <input
        v-model="form.name"
            type="text"
            name="name"
            id="name"
            class="form-control"
            placeholder="Enter Name" />
    </div>

        <!-- Email -->
    <div class="form-group mt-2">
        <label for="exampleInputEmail1">Email address</label>
        <input v-model="form.email"
                name="email"
                id="email"
                type="email"
                class="form-control"
                aria-describedby="emailHelp"
                placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else(maybe).</small>
    </div>

      <!-- Phone Number -->
      <div class="form-group mt-2">
        <label for="exampleInputPassword1">Phone Number</label>
        <input v-model="form.phone"
                type="phone"
                name="phone"
                id="phone"
                class="form-control"
                placeholder="Phone Number">
      </div>

      <!-- Password -->
      <!-- <div class="form-group mt-2">
        <label for="exampleInputPassword1">Password</label>
        <input v-model="form.password"
                name="password"
                id="password"
                type="password"
                class="form-control"
                placeholder="Password">
      </div> -->
      <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
    </div>
</template>

<script>
import { Link, useForm } from "@inertiajs/vue3";

export default {
    components: {
        // Layout,
        Link,
    },
    props: {
        errors: Object,
        user:{
            type:Object,
            required:true,
        },
    },
    setup(props) {
        const form = useForm({
            name: props.user.name,
            email: props.user.email,
            phone: props.user.phone,
            // password: props.user.password,
        });

        return { form };
    },
};

</script>

<style>
#container{
    margin-top: 75px;
}
</style>
