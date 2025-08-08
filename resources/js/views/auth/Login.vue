<template>
    <div class="auth-bg-basic d-flex align-items-center min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 py-5 px-3">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="text-center text-muted mb-2">
                            <div class="pb-3">
                                <a href="#">
                                    <span class="logo-lg">
                                        <img src="/assets/images/logo-sm.svg" alt="" height="24"> <span
                                            class="">Inventory</span>
                                    </span>
                                </a>
                                <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">User Experience &amp;
                                    Interface Design Strategy Saas Solution</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-transparent shadow-none border-0">
                            <div class="card-body">
                                <div class="py-3">
                                    <div class="text-center">
                                        <h5 class="mb-0">Welcome Back !</h5>
                                        <p class="text-muted mt-2">Sign in to continue to Inventory.</p>
                                    </div>
                                    <vee-form :validation-schema="schema" @submit="login" class="mt-4 pt-2">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <vee-field type="text" class="form-control" id="input-username"
                                                placeholder="Enter User Name" name="email" v-model="loginForm.email" />
                                            <label for="input-username">Username</label>
                                            <div class="form-floating-icon">
                                                <i class="uil uil-users-alt"></i>
                                            </div>
                                            <ErrorMessage class="text-danger" name="email" />
                                        </div>

                                        <div class="form-floating form-floating-custom mb-3 auth-pass-inputgroup">
                                            <vee-field type="password" class="form-control" id="password-input"
                                                placeholder="Enter Password" name="password" v-model="loginForm.password" />
                                            <button type="button"
                                                class="btn btn-link position-absolute h-100 end-0 top-0"
                                                id="password-addon">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="password-input">Password</label>
                                            <div class="form-floating-icon">
                                                <i class="uil uil-padlock"></i>
                                            </div>
                                            <ErrorMessage class="text-danger" name="passsword" />
                                        </div>

                                        <div class="form-check form-check-primary font-size-16 py-1">
                                            <vee-field class="form-check-input" type="checkbox" id="remember-check" name="remember" />

                                            <label class="form-check-label font-size-14" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100" type="submit">Log In</button>
                                        </div>
                                    </vee-form><!-- end form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div>
        </div>
        <!-- end container fluid -->
    </div>
    <!-- end authentication section -->
</template>

<script setup>
/* All Library Import */
import { ref, reactive, inject } from 'vue';
import { useAuthStore } from '@/stores/auth';
import { useRoute, useRouter } from 'vue-router';
import { ErrorMessage } from 'vee-validate';


/* All Instance */
const authStore = useAuthStore();
const router = useRouter();
const swal = inject('$swal');


/* All Variables */
const loginForm = reactive({
    email: null,
    password: null,
});

const schema = reactive({
    email: 'required|email',
    password: 'required|min:4|max:25'
});



/* All Methods */
const login = () => {
    authStore.login(loginForm, (status) => {
        if(status === 'success') {
            swal({
                icon: 'success',
                title: authStore.message,
                timer: 2000
            });
            router.push({ name: 'dashboard' })
        } else {
            swal({
                icon: 'error',
                title: authStore.message,
                timer: 2000
            })
            router.push({name: 'login'})
        }
    })
}


/* All Hooks and Computed */
</script>

<style scoped></style>
