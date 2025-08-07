export default {
  appName: 'Inventory Management System',
  appVersion: '1.0.0',
  defaultDataLimit: 10,
  inventoryAPIHost: import.meta.env.VITE_API_URL,
  apiToken: localStorage.getItem('token') ,
  requestTimeOut: 5000
}
