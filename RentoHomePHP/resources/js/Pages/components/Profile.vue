<template>
    <section style="background-color: #eee;">
      <div class="container pt-0 pb-2 mt-0">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">{{ user.name }}</h5>
                <p class="text-muted mb-1">Full Stack Developer</p>
                <p class="text-muted mb-4">RVT</p>
                <div class="d-flex justify-content-center mb-2">
                  <button @click="destroy(user.id)" type="submit" class="btn btn-danger d-block py-2 width-216 ms-1">
                    <i class="bi bi-trash-fill me-2"></i> Delete Account
                  </button>
                  <Link class="btn btn-warning d-block py-2 width-216 ms-1" :href="route('EditPage')">Edit Profile</Link>
                </div>
              </div>
            </div>
            <div class="card mb-4 mb-lg-0">
                <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                        <span class="icon me-2"><i class="fa-solid fa-face-smile text-yellow"></i></span>
                        <span class="label ">Name:</span>
                        </div>
                        <span class="value">{{ user.name }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                        <span class="icon me-2"><i class="fa-solid fa-envelope"></i></span>
                        <span class="label">Phone Number:</span>
                        </div>
                        <span class="value">{{ user.phone }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                        <span class="icon me-2"><i class="fa-solid fa-phone"></i></span>
                        <span class="label">Email:</span>
                        </div>
                        <span class="value">{{ user.email }}</span>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title mb-4">Rent History</h5>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Property</th>
                        <th>Status</th>
                        <th>Reserved</th>
                        <th>Planned Move-in Date</th>
                        <th>Overall Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>House</td>
                        <td><span class="badge bg-success">Reserved</span></td>
                        <td>June 15, 2024</td>
                        <td>July 1, 2024</td>
                        <td>$2000/month</td>
                      </tr>
                      <tr>
                        <td>Apartment</td>
                        <td><span class="badge bg-secondary">Not Reserved</span></td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>

  <script>
  import { Link } from "@inertiajs/vue3";
  import { router } from '@inertiajs/vue3';

  export default {
    components: {
      Link
    },
    props: {
      user: {
        type: Object,
        required: true,
      }
    },
    setup() {
      const destroy = (id) => {
        if (confirm("Are you sure?")) {
          router.delete(route("delete", id));
        }
      };

      return { destroy };
    },
  }
  </script>

  <style>
    section {
      padding: 50px 0;
    }

    .card {
      border: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-title {
      font-size: 1.5rem;
      color: #333;
      margin-bottom: 1.5rem;
    }

    .table {
      margin-bottom: 0;
    }

    .table th,
    .table td {
      padding: 1rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }

    .badge {
      font-size: 1rem;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
    }

  </style>
