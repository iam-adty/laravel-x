<template>
  <InertiaLink :href="route(href)" :class="isActive">
    <slot></slot>
  </InertiaLink>
</template>

<script>
export default {
  name: "MenuItem",
  components: {},
  props: {
    href: {
      type: String,
      default: "/",
    },
    current: String,
  },

  computed: {
    isActive() {
      return route().current(this.current)
        ? "text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-indigo-700 hover:text-indigo-100 bg-indigo-700 text-indigo-100 border duration-200 ease-in-out border-indigo-600 transition mx-2"
        : "text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-indigo-700 hover:text-indigo-100 bg-indigo-100 text-indigo-700 border duration-200 ease-in-out border-indigo-600 transition mx-2";
    },
  },
};
</script>
