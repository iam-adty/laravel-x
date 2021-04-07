<template>
  <div class="pt-3">
    <div class="flex justify-center items-baseline flex-wrap">
      <div class="flex m-2">
        <MenuItem
          v-for="(item, index) in menu"
          :key="index"
          :href="item.route"
          :current="item.current"
        >
          {{ item.label }}
        </MenuItem>
      </div>
    </div>
  </div>
</template>

<script>
import MenuItem from "./Menu/Item";

export default {
  name: "Menu",
  components: {
    MenuItem,
  },

  props: {
    menu: Object,
  },
};
</script>
