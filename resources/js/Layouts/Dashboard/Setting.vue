<template>
  <Menu :menu="menu"></Menu>
  <div class="py-3">
    <slot></slot>
  </div>
</template>

<script>
import Menu from "@Layouts/Dashboard/Menu";

export default {
  name: "Setting Layout",
  components: {
    Menu,
  },
  props: {
    menu: Object,
  },
};
</script>
