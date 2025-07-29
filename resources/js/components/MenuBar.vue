<template>
  <div>
    <div class="topnav">
              <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <router-link class="nav-link dropdown-toggle arrow-none" :to="{ name: 'dashboard' }" id="topnav-dashboard"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-home-circle icon"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                      </router-link>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle arrow-none active" href="#" id="topnav-dashboard"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-cart icon"></i>
                            <span data-key="t-dashboard">POS</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                        <i class="bx bx-customize icon"></i>
                        <span data-key="t-apps">Inventory</span>
                        <div class="arrow-down"></div>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="topnav-pages">

                    

                        <div class="dropdown">
                          <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                            role="button">
                            <span data-key="t-ecommerce">Ecommerce</span>
                            <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                            <a href="ecommerce-products.html" class="dropdown-item" data-key="t-products">Product List</a>
                            <a href="ecommerce-product-detail.html" class="dropdown-item"
                              data-key="t-product-detail">Product New</a>
                          </div>
                        </div>

                     

                        <a href="apps-gallery.html" class="dropdown-item" data-key="t-gallery">Gallery</a>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                        <i class="bx bx-layer icon"></i>
                        <span data-key="t-components">HRM</span>
                        <div class="arrow-down"></div>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="topnav-components">
                        <div class="dropdown">
                          <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button">
                            <span data-key="t-forms">Employee</span>
                            <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-form">
                            <a href="form-elements.html" class="dropdown-item" data-key="t-basic-elements">Employee List</a>
                            <a href="form-validation.html" class="dropdown-item" data-key="t-validation">Employee New</a>
                          </div>
                        </div>     
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                        <i class="bx bx-file icon"></i>
                        <span data-key="t-pages">CRM</span>
                        <div class="arrow-down"></div>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="topnav-more">
                        <div class="dropdown">
                          <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-pricing"
                            role="button">
                            <span data-key="t-pricing">Supplier</span>
                            <div class="arrow-down"></div>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="topnav-pricing">
                            <a href="pricing-basic.html" class="dropdown-item" data-key="t-basic">Supplier List</a>
                            <a href="pricing-table.html" class="dropdown-item" data-key="t-table">Supplier New</a>
                          </div>
                        </div>
                      </div>
                    </li>

                  </ul>
                </div>
              </nav>
            </div>
  </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>
