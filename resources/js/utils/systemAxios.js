import axios from "axios";
import config from "./config";

const baseClient = axios.create({
  baseURL: config.inventoryAPIHost,
  headers: {
    "accept": 'application/json',
    "Content-Type": 'application/json',
    "X-Requested-With": 'XMLHttpRequest'
  }
});

const inventoryAxiosClient = axios.create({
  baseURL: config.inventoryAPIHost+'/api',
  headers: {
    "accept": 'application/json',
    "Content-Type": 'application/json',
    "X-Requested-With": 'XMLHttpRequest',
    "Authorization": 'Bearer '+config.apiToken
  }
});

export {
  baseClient,
  inventoryAxiosClient
}


