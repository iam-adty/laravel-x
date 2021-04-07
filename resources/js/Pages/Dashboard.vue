<template>
  <DashboardLayout :menu="menu">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"></div>
      </div>
    </div>
  </DashboardLayout>
</template>

<script>
import DashboardLayout from "@/Layouts/Dashboard";

export default {
  name: "Dashboard Page",
  components: {
    DashboardLayout,
  },

  props: {
    menu: Object,
  },
};
</script>
