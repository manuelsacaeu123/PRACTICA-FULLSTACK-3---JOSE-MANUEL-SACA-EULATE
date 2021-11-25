const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') },
      { path: 'login', component: () => import('pages/Login.vue') },
      { path: 'secure', component: () => import('pages/Secure.vue') , meta: {requiresAuth: true}},
      { path: 'garaje', component: () => import('pages/Garaje.vue') , meta: {requiresAuth: true}},
      { path: 'rcliente', component: () => import('pages/Rcliente.vue') , meta: {requiresAuth: true}},
      { path: 'rauto', component: () => import('pages/Rauto.vue') , meta: {requiresAuth: true}},
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes