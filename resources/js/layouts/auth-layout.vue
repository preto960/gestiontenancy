<template>
    <router-view/>
</template>

<script setup>
    /* import Auth from "../components/auth/login.vue"; */
    /* import { onMounted, ref, reactive } from 'vue';
    import { useI18n } from 'vue-i18n';
    import { useStore } from 'vuex';
    import { $themeConfig } from "../theme.config";
    const store = useStore();

    const i18n = reactive(useI18n());
    const selectedLang = ref(null);

    const list = store.state.countryList;
    const item = list.find((item) => item.code === $themeConfig.lang);
    
    onMounted(() => {
        window.$appSetting.toggleLanguage(item);
    }); */
    
</script>