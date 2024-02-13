// index.js

export const IMAGE_PATH = process.env.REACT_APP_BASE_URL + "/storage/images/";

export const BASE_URL = process.env.REACT_APP_BASE_URL;
export const BASE_URL_API = process.env.REACT_APP_BASE_URL_API;

export const linksUserLoged = [
  {
    label: "planetes",
    path: "/planetes",
  },
  {
    label: "évenements",
    path: "/evenements",
  },
  {
    label: "sites",
    path: "/sites",
  },
  {
    label: "profil",
    path: "/profil",
  },
  {
    label: "login",
    path: "/login",
  },
  {
    label: "logout",
    path: "/logout",
  },
];
export const linksLogged = [
  {
    label: "planetes",
    path: "/planetes",
  },
  {
    label: "évenements",
    path: "/evenements",
  },
  {
    label: "sites",
    path: "/sites",
  },
  {
    label: "profil",
    path: "/profil",
  },
  {
    label: "logout",
    path: "/logout",
  },
];
export const linksUnlogged = [
  {
    label: "planetes",
    path: "/planetes",
  },
  {
    label: "évenements",
    path: "/evenements",
  },
  {
    label: "sites",
    path: "/sites",
  },
  {
    label: "login",
    path: "/login",
  },
];

export const linksAcceuil = [
  {
    label: "Planetes",
    path: "/planetes",
    src: "/images/Naboo.jpg",
  },
  {
    label: "Sites",
    path: "/sites",
    src: "/images/pTheed.jpg",
  },
  {
    label: "Evenements",
    path: "/evenements",
    src: "/images/module.jpg",
  },
];

export const firstLetterUppercase = (value) => {
  return value.charAt(0).toUpperCase() + value.slice(1);
};
