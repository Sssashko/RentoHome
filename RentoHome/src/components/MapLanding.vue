<script setup >
import { ref } from "vue";

  const count = ref(0)

</script>

<template>
    <div class="main">
        <hr>
            <section class="p-5">
            <div class="container">
            <div class="row g-4">
            <div class="col-md">
            <h2 class="text-center mb-4">Contact Us</h2>
            <ul class="list-group list-group-flush lead">
            <li class="list-group-item">
            <span class="fw-bold">Main Location:</span> 50 Main st Boston MA
            </li>
            <li class="list-group-item">
            <span class="fw-bold">Enrollment Phone:</span> (555) 555-5555
            </li>
            <li class="list-group-item">
            <span class="fw-bold">Student Phone:</span> (333) 333-3333
            </li>
            <li class="list-group-item">
            <span class="fw-bold">Enrollment Email:</span> (555)
            enroll@frontendbc.test
            </li>
            <li class="list-group-item">
            <span class="fw-bold">Student Email:</span>
            student@frontendbc.test
            </li>
            </ul>
            </div>
                <div class="col-md">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2174.4475090017795!2d23.79506607695289!3d56.975395897167104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eedd1bb137b525%3A0xbb02f221692cab72!2sBaltic%20Beach%20Hotel%20%26%20SPA!5e0!3m2!1sru!2slv!4v1700815892117!5m2!1sru!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </div>
            </section>
            </div>
</template>

<style scoped>

.main {
    margin-bottom: 100px;
}

h2 {
    display: flex;
    justify-content: center;
    font-size: 38px;
}

hr {
    margin-top: 75px;
    width: 90%;
    margin: 75px auto;
}

.col-md {
    display: flex;
    flex-direction: column;
    align-items: center;
}

#map {
    border-radius: 10px;
}

</style>