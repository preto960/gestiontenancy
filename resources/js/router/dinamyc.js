import axios from 'axios';
import $ from 'jquery';

async function getRoutes() {
  try {
    const response = await axios.get('api/routes');
    const routes = [];
    $.each(response.data.data, (key, value) => {
      routes.push({
        name: value.name,
        path: value.path,
        component: value.component,
        meta: {
          layout: value.meta
        }
      });
    });
    return routes;
  } catch (error) {
    console.error(error);
  }
}

const dynamicRoutes = getRoutes();
export default dynamicRoutes;