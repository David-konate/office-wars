// index.js

export const IMAGE_PATH = process.env.REACT_APP_BASE_URL + "/storage/images/";

export const BASE_URL = process.env.REACT_APP_BASE_URL;
export const BASE_URL_API = process.env.REACT_APP_BASE_URL_API;

export const links = [
  {
    label: "Home",
    path: "/",
  },
  {
    label: "planetes",
    path: "/planetes",
  },
  {
    label: "festivals",
    path: "/festivals",
  },
  {
    label: "profil",
    path: "/profil",
  },
];

export const firstLetterUppercase = (value) => {
  return value.charAt(0).toUpperCase() + value.slice(1);
};
