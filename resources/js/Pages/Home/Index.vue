<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/inertia-vue3';
</script>

<template>

   <Head title="Home" />

   <AuthenticatedLayout>
      <template #header>
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Home
         </h2>
      </template>

      <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 bg-white border-b border-gray-200">
                  <pre>{{ $page.props.auth.role.includes('standard-user') }}</pre>                  
               </div>
            </div>
         </div>
      </div>
   </AuthenticatedLayout>
</template>
