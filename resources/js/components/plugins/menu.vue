<template>
    <li class="menu single-menu" v-for="item in menuItems" :key="item.id"><!--   -->
        <router-link href="javascript:;" :to="item.path" class="dropdown-toggle "><!-- autodroprown --><!--  -->
            <div class="">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-home"
                >
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>{{ $t((item.name).toLowerCase()) }}</span><!--  -->
            </div>
            <!-- <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-chevron-down"
            >
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg> -->
        </router-link>
        <!-- <ul class="collapse submenu list-unstyled">
            <li>
                <router-link to="/"> {{ $t('sales') }} </router-link>
            </li>
            <li>
                <router-link to="/index2">{{ $t('analytics') }}</router-link>
            </li>
        </ul> -->
    </li>
</template>

<script>
    import routesDinamyc from '../../router/dinamyc';
    const menuItems = (await routesDinamyc)[1];
    export default {
        data() {
            return {
                menuItems: menuItems
            };
        },
    };
</script>
