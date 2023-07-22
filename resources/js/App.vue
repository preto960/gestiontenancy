<template>
    <div>
        <component v-bind:is="layout"></component>
    </div>
</template>
<script setup>
    import { computed } from "vue";

    import "./assets/sass/app.scss";

    import { useMeta } from "./composables/use-meta";
    import { useStore } from "vuex";

    useMeta({ title: "Sales Admin" });

    const store = useStore();

    const layout = computed(() => {
        return store.getters.layout;
    });
</script>
<script>
    // layouts
    import appLayout from "./layouts/app-layout.vue";
    import authLayout from "./layouts/auth-layout.vue";
    import inicLayout from "./layouts/inic-layout.vue";
    
    export default {
        components: {
            app: appLayout,
            auth: authLayout,
            inic: inicLayout,
        },
    };
</script>
