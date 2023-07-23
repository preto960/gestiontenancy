import axios from 'axios';
import $ from 'jquery';

async function getConfig() {
    try {
      const response = await axios.get('api/config');
      const config = [];
      $.each(response.data.data, (key, value) => {
        const name = value.name;
        const val = value.value;
        config.push([name,val]);
      });
      return config;
    } catch (error) {
      console.error(error);
    }
  }
  
const dynamicConfig = await getConfig();
const config = dynamicConfig.reduce((result, currentArray) => {
    const [key, value] = currentArray;
    result[key] = value;
    return result;
  }, {});
  
export const $themeConfig = config/* {
    lang: 'fr', // en, da, de, el, es, fr, hu, it, ja, pl, pt, ru, sv, tr, zh
    theme: 'dark', // light, dark, system
    navigation: 'horizontal', // vertical, collapsible-vertical, horizontal
    layout: 'full' // full, boxed-layout, large-boxed-layout
} */;
