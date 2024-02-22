// index.js

export const IMAGE_PATH = process.env.REACT_APP_BASE_URL + "/storage/images/";

export const BASE_URL = process.env.REACT_APP_BASE_URL;

export const BASE_URL_API = process.env.REACT_APP_BASE_URL_API;
// Durée du timer pour chaque question (en secondes)
export const QUESTION_TIMER_DURATION = 25000;

// Délai avant de commencer à déduire des points (en secondes)
export const LIMITE_ALL_POINT = QUESTION_TIMER_DURATION - 5000;

// Niveaux de réponse et leurs points respectifs
export const LEVELS = {
  1: 2,
  2: 4,
  3: 6,
};

// Fonction pour calculer les points en fonction du temps

export const calculatePoints = (userTime, userLevel) => {
  console.log(userTime);
  userTime = userTime * 1000;
  const pointsMax = LEVELS[userLevel];

  // Vérifier si le temps mis par l'utilisateur est inférieur à la durée LIMITE_ALL_POINT
  if (userTime < LIMITE_ALL_POINT) {
    const pointsPerdus =
      Math.round((pointsMax / userTime) * LIMITE_ALL_POINT * 0.1 * 100) / 100;
    console.log({ pointsPerdus });
    const points = pointsMax - pointsPerdus;
    return points;
  } else {
    console.log("full point", LEVELS[userLevel]);
    // Si le temps est supérieur à POINTS_LIMITE_ALL_POINT, attribuer le nombre maximum de points
    return pointsMax;
  }
};

export const calculatePercentage = (currentPoints, totalPoints) => {
  const percentage =
    totalPoints !== 0 ? (currentPoints / totalPoints) * 100 : 0;
  return parseFloat(percentage.toFixed(2));
};

// // Utilisation de la fonction
// const userTime = 15; // par exemple, l'utilisateur a mis 15 secondes
// const userLevel = 2; // par exemple, l'utilisateur a choisi le niveau 2

// const points = calculatePoints(userTime, userLevel);
// console.log('Points attribués:', points);

export const linksUserLoged = [
  {
    label: "planètes",
    path: "/planetes",
  },
  {
    label: "évènements",
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
    label: "planètes",
    path: "/planetes",
  },
  {
    label: "évènements",
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
    label: "planètes",
    path: "/planetes",
  },
  {
    label: "évènements",
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
    label: "Planètes",
    path: "/planetes",
    src: "/images/Naboo.jpg",
  },
  {
    label: "Sites",
    path: "/sites",
    src: "/images/pTheed.jpg",
  },
  {
    label: "Evénements",
    path: "/evenements",
    src: "/images/module.jpg",
  },
];
export const linksAcceuilQuiz = [
  {
    label: "Défie les joueurs",
    path: "/holocron-trivia/public",
    src: "/images/vasVsobi.jpg",
  },
  {
    label: "Partie entre amis",
    path: "/",
    src: "/images/friends.jpg",
  },
];

export const firstLetterUppercase = (value) => {
  return value.charAt(0).toUpperCase() + value.slice(1);
};

export const convertToRoman = (num) => {
  const romanNumerals = ["I", "II", "III"];
  const values = [1, 2, 3];

  let result = "";

  for (let i = values.length - 1; i >= 0; i--) {
    while (num >= values[i]) {
      result += romanNumerals[i];
      num -= values[i];
    }
  }

  return result;
};
