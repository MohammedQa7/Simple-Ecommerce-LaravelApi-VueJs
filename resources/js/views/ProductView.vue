<template>
  <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
    <!-- <success-message
      v-if="Object.keys(productStore.successMessages).length > 0"
    ></success-message> -->
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
      <!-- Heading & Filters -->
      <div
        class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8"
      >
        <div>
          <!-- <nav class="flex" aria-label="Breadcrumb">
            <ol
              class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse"
            >
              <li class="inline-flex items-center">
                <a
                  href="#"
                  class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white"
                >
                  <svg
                    class="me-2.5 h-3 w-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                    />
                  </svg>
                  Home
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg
                    class="h-5 w-5 text-gray-400 rtl:rotate-180"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m9 5 7 7-7 7"
                    />
                  </svg>
                  <a
                    href="#"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white md:ms-2"
                    >Products</a
                  >
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg
                    class="h-5 w-5 text-gray-400 rtl:rotate-180"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m9 5 7 7-7 7"
                    />
                  </svg>
                  <span
                    class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2"
                    >Electronics</span
                  >
                </div>
              </li>
            </ol>
          </nav> -->
          <h2
            class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl"
          >
            Electronics
          </h2>
        </div>
        <div class="flex items-center space-x-4">
          <button
            id="sortDropdownButton1"
            data-dropdown-toggle="dropdownSort1"
            type="button"
            class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto"
          >
            <svg
              class="-ms-0.5 me-2 h-4 w-4"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M7 4v16M7 4l3 3M7 4 4 7m9-3h6l-6 6h6m-6.5 10 3.5-7 3.5 7M14 18h4"
              />
            </svg>
            Sort
            <svg
              class="-me-0.5 ms-2 h-4 w-4"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m19 9-7 7-7-7"
              />
            </svg>
          </button>
          <div
            id="dropdownSort1"
            class="z-50 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700"
            data-popper-placement="bottom"
          >
            <ul
              class="p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400"
              aria-labelledby="sortDropdownButton"
            >
              <li>
                <a
                  href="#"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                  The most popular
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                  Newest
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                  Increasing price
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                  Decreasing price
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                  No. reviews
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                  Discount %
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div
        class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4"
      >
        <product-skeleton v-if="productStore.isLoading"></product-skeleton>
        <!-- products -->
        <div
          v-else
          v-for="(product, index) in productStore.Products"
          :key="index"
          class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800"
        >
          <div class="h-56 w-full">
            <router-link
              :to="{ name: 'SingleProduct', params: { slug: product.slug } }"
            >
              <img
                class="mx-auto h-full"
                :src="product.images[0]?.ImagePath"
                alt=""
              />
            </router-link>
          </div>
          <div class="pt-6">
            <div class="mb-4 flex items-center justify-between gap-4">
              <span
                class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300"
              >
                Up to 35% off
              </span>

              <div class="flex items-center justify-end gap-1">
                <button
                  type="button"
                  data-tooltip-target="tooltip-quick-look"
                  class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                >
                  <span class="sr-only"> Quick look </span>
                  <svg
                    class="h-5 w-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-width="2"
                      d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"
                    />
                    <path
                      stroke="currentColor"
                      stroke-width="2"
                      d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                  </svg>
                </button>

                <button
                  @click.prevent="favorite(product.id)"
                  type="button"
                  data-tooltip-target="tooltip-add-to-favorites"
                  :class="isFavorited(product?.is_favorited).class"
                >
                  <!-- loading indicator visability -->
                  <loading-indicator
                    v-if="
                      productStore.isFavoriteLoading &&
                      favoritedProduct.id == product.id
                    "
                  ></loading-indicator>
                  <!-- favorite icon visability -->
                  <svg
                    v-else
                    class="h-5 w-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      :stroke="isFavorited(product?.is_favorited).stroke"
                      :fill="isFavorited(product?.is_favorited).icon"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z"
                    />
                  </svg>
                </button>
              </div>
            </div>

            <a
              href="#"
              class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white"
              >{{ product.name }}</a
            >

            <div class="mt-2 flex items-center gap-2">
              <div class="flex items-center">
                <svg
                  v-for="(singleStar, index) in reviewerStars"
                  :key="index"
                  class="h-4 w-4 text-yellow-300"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  :fill="
                    product.overall_rating?.overall >= singleStar
                      ? 'currentColor'
                      : 'gray'
                  "
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                  />
                </svg>
              </div>

              <p class="text-sm font-medium text-gray-900 dark:text-white">
                {{ product?.overall_rating?.overall }}
              </p>
              <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                ({{ product?.overall_rating?.ratingCount }})
              </p>
            </div>

            <ul class="mt-2 flex items-center gap-4">
              <li class="flex items-center gap-2">
                <svg
                  class="h-4 w-4 text-gray-500 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"
                  />
                </svg>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                  Fast Delivery
                </p>
              </li>

              <li class="flex items-center gap-2">
                <svg
                  class="h-4 w-4 text-gray-500 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="2"
                    d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                  />
                </svg>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                  Best Price
                </p>
              </li>
            </ul>

            <div class="mt-4 flex items-center justify-between gap-2 flex-wrap">
              <p
                class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white"
              >
                <!-- {{product.skus[0].price}} -->
                ${{
                  product?.skus[0]
                    ? product?.skus[0]?.price
                    : product.skus?.variant[0]?.subOptions[0]?.price
                }}
              </p>
              <div class="add-to-cart-holder flex justify-between gap-3">
                <button
                  @click.prevent="addToCart(product.id)"
                  type="button"
                  class="inline-flex items-center rounded-lg bg-gray-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-gray-700 dark:hover:border border-gray-100"
                >
                  <svg
                    class="-ms-2 me-2 h-5 w-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"
                    />
                  </svg>
                  Add to cart
                </button>
                <!-- Input Number -->
                <!-- Input Number -->
                <div
                  class="py-2 px-3 inline-block bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-neutral-700"
                >
                  <div class="flex items-center gap-x-1.5">
                    <button
                      @click.prevent="decrementQuantity(product.id)"
                      type="button"
                      class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                    >
                      <svg
                        class="flex-shrink-0 size-3.5"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M5 12h14"></path>
                      </svg>
                    </button>
                    <input
                      class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white"
                      type="text"
                      :value="
                        quantity.productId == product.id ? quantity.quantity : 1
                      "
                    />
                    <button
                      @click.prevent="incrementQuantity(product.id)"
                      type="button"
                      class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                    >
                      <svg
                        class="flex-shrink-0 size-3.5"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- End Input Number -->
                <!-- End Input Number -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full text-center">
        <button
          type="button"
          class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
        >
          Show more
        </button>
      </div>
    </div>
  </section>
</template>


<script setup>
import ProductSkeleton from "../components/ProductSkeleton.vue";
import LoadingIndicator from "../components/LoadingIndicator.vue";
import SuccessMessage from "../components/SuccessMessage.vue";
import { ref, onMounted, computed, watch } from "vue";
import { useRoute, useRouter } from "vue-router";
import { useAuthStore } from "../stores/auth.js";
import { useProductStore } from "../stores/products.js";
import { initFlowbite } from "flowbite";

const authUser = useAuthStore();
const productStore = useProductStore();
const router = useRouter();
const route = useRoute();
const favoritedProduct = ref("");
const isAddedToCart = ref(false);
const reviewerStars = ref([1, 2, 3, 4, 5]);
const quantity = ref({
  productId: null,
  quantity: 1,
});

function isFavorited(favoriteStatus) {
  if (favoriteStatus) {
    return {
      class:
        "rounded-lg p-2 bg-gray-700 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-500 dark:hover:text-white",
      stroke: "",
      icon: "red",
    };
  } else {
    return {
      class:
        "rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white",
      stroke: "currentColor",
      icon: "",
    };
  }
}

function favorite(productID) {
  if (authUser.user != null) {
    favoritedPro = productStore.favoriteProduct(productID);
  } else {
    router.push({ name: "Login" });
  }
}

function incrementQuantity(productID) {
  if (quantity.value.productId != productID) {
    quantity.value.productId = productID;
    quantity.value.quantity = 1;
    quantity.value.quantity++;
  } else {
    quantity.value.productId = productID;
    quantity.value.quantity++;
  }
}

function decrementQuantity(productID) {
  // let product = productStore.products.find((p) => p.id == productID);
  // console.log(product.skus);
  if (quantity.value.quantity > 1) {
    quantity.value.productId = productID;
    quantity.value.quantity--;
  }
}

function addToCart(productID, skuCode = null) {
  if (authUser.user != null) {
    if (!quantity.value.quantity <= 0) {
      quantity.value.productId = productID;
      productStore.AddToCart(quantity, skuCode);
    }
  } else {
    router.push({ name: "Login" });
  }
}

// returning only ONE sku code with variant and sub Options for that variant otherwise retunr all skus
function productPrice() {
  let product = productStore.products;
  for (let index = 0; index < product.length; index++) {
    for (let skuIndex = 0; skuIndex < product[index].skus.length; skuIndex++) {
      if (typeof product[index].skus[skuIndex].variant[0] !== "undefined") {
        if (product[index].skus[skuIndex].variant[0].subOptions.length > 0) {
          return (product[index].skus = product[index].skus[skuIndex]);
        }
      }
    }
  }
  return product;
}

onMounted(async () => {
  await productStore.getProducts();
  productPrice(); 
  initFlowbite();
  authUser.getUser();
});

// watching the url if changed do recall the getProducts , so we dont lost any data when the user hit the back button using the browser.
// watch(
//   ()=> route.fullPath,
//   async()=>{

//   },
//   {immediate : true},
//   )
</script>


<style scoped>
.cart-start-animation {
  width: 304px !important;
  background-color: red !important;
  transition: all 0.5s !important;
  padding: 20px !important;
}

.cart-end-animation {
  width: 200px !important;
  background-color: blue !important;
  transition: all 0.5s !important;
  padding: 10px !important;
}
</style>