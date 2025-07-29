<script setup>
import Footer from '../components/Footer.vue';
import NavBar from '../components/NavBar.vue';

</script>

<template>
  <div>
    <!-- Begin page -->
    <div id="layout-wrapper">

      <NavBar />

      <div class="hori-overlay"></div>



      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        <div class="page-content">
            <router-view v-slot="{ Component, route }">
                <transition name="route" mode="out-in">
                    <div :key="route.name">
                        <component :is="Component" />
                    </div>
                </transition>
            </router-view>
        </div>
        <!-- End Page-content -->

        <!-- Start Footer -->
         <Footer />
        <!-- End Footer -->

        
      </div>
      <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

  </div>
</template>

<style>
.route-enter-from{
    opacity: 0;
    transform:  translateY(10px);
}

.route-enter-active,
.route-leave-active{
    transition: all 0.2s ease-out;
}

.route-leave-to{
    opacity: 0;
    transform:  translateY(10px);
}
</style>
