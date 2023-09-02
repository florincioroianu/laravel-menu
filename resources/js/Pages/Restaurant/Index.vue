<template>
    <AuthenticatedLayout>

    </AuthenticatedLayout>
</template>

<script>

import {defineComponent} from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default defineComponent({
    components: {AuthenticatedLayout},
    props:{
        restaurants: Array
    },
    methods:{
    }
})
</script>
