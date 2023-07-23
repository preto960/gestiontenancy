import axios from 'axios';
import $ from 'jquery';
import { defineAsyncComponent } from 'vue';

async function getRoutes() {
  try {
    const response = await axios.get('api/routes');
    const routes = [];
    const menus = [];
    $.each(response.data.data, (key, value) => {
      const asyncComponent = defineAsyncComponent(() => import(value.component));
      routes.push({
        name: value.name,
        path: value.path,
        component: asyncComponent,
        meta: {
          layout: value.meta
        },
      });

      menus.push({
        id: value.id,
        name: value.name,
        path: value.path,
        type: value.type,
        parent_id: value.parent_id,
        position: value.position,
      });
    });
    return [routes,menus];
  } catch (error) {
    console.error(error);
  }
}

const dynamicRoutes = getRoutes();
export default dynamicRoutes;