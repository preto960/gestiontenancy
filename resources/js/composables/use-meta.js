import { useHead } from '@vueuse/head';
import { unref, computed } from 'vue';
import { $themeConfig } from "../theme.config";

let siteTitle = 'hello';
let separator = '|';

export const usePageTitle = (pageTitle) =>
    useHead(
        computed(() => ({
            title: `${unref(pageTitle)} ${separator} ${siteTitle}`,
        }))
    );

export const useMeta = (data) => {
    return useHead({ ...data, title: `${data.title} | ${$themeConfig.name}` });
};
