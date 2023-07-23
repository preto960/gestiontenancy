import { createI18n } from "vue-i18n";
import messages from "@intlify/vite-plugin-vue-i18n/messages";
import { $themeConfig } from "./theme.config";

export default createI18n({
    legacy: false,
    allowComposition: true,
    locale: $themeConfig.lang,
    globalInjection: true,
    fallbackLocale: $themeConfig.lang,
    messages,
});
