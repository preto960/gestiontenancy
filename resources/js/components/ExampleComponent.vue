<template>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="panel br-4">
                    <div class="panel-body">
                        <h6>Kick Start you new project with ease!</h6>
                        <p class="mb-0 mt-3">
                            With CORK starter kit, you can begin your work without any hassle. The starter page is highly optimized which gives you freedom to start with minimal code and add only the desired components and plugins required
                            for your project.
                        </p>
                        <div v-if="auth">
                            <router-link to="/dashboard">dashboard</router-link>
                        </div>
                        <div v-else>
                            <router-link to="/login">login</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
    .layout-px-spacing {
        min-height: calc(100vh - 170px) !important;
    }
</style>

<script setup>
    import { ref } from 'vue';
    import { useStore } from 'vuex';
    
    import { useI18n } from 'vue-i18n';
    const { t } = useI18n();

    import { useMeta } from "../composables/use-meta";
    useMeta({ title: t('index') });

    const store = useStore();
    const auth = ref(false);

    if(store.state.userData != null){
        auth.value = true;
    }
</script>
