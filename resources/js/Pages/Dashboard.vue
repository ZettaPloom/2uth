<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="float-left bg-white overflow-show sm:rounded-lg">
          <inertia-link :href="route('folders.index')">
            <jet-secondary-button> Folders </jet-secondary-button>
          </inertia-link>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";

export default {
  components: {
    AppLayout,
    JetSecondaryButton,
  },
};
</script>
