<template>
  <DashboardLayout title="Setting" :menu="menu">
    <SettingLayout :menu="settingMenu"></SettingLayout>
  </DashboardLayout>
</template>

<script>
import DashboardLayout from "@Layouts/Dashboard";
import SettingLayout from "@Layouts/Dashboard/Setting";

export default {
  name: "Setting Dashboard Page",
  components: {
    DashboardLayout,
    SettingLayout,
  },
  props: {
    menu: Object,
  },
  computed: {
    settingMenu() {
      return this.menu["setting"]["child"];
    },
  },
};
</script>
