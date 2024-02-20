// index.js

export const IMAGE_PATH = process.env.REACT_APP_BASE_URL + "/storage/images/";

export const BASE_URL = process.env.REACT_APP_BASE_URL;

export const BASE_URL_API = process.env.REACT_APP_BASE_URL_API;
// Durée du timer pour chaque question (en secondes)
export const QUESTION_TIMER_DURATION = 25000;

// Délai avant de commencer à déduire des points (en secondes)
export const POINTS_DEDUCTION_DELAY = 5000;

// Niveaux de réponse et leurs points respectifs
export const LEVELS = {
  1: 2,
  2: 4,
  3: 6,
};

// Fonction pour calculer les points en fonction du temps
export const calculatePoints = (userTime, userLevel) => {
  // Vérifier si le temps mis par l'utilisateur est supérieur à la durée POINTS_DEDUCTION_DELAY
  if (userTime > POINTS_DEDUCTION_DELAY) {
    // Calculer la durée de déduction en soustrayant le délai de déduction du temps total
    const deductionTime = userTime - POINTS_DEDUCTION_DELAY;

    // Calculer le nombre de points maximum en fonction du niveau de réponse
    const maxPoints = LEVELS[userLevel];

    // Calculer le taux de décroissance des points par seconde
    const decayRate =
      maxPoints / (QUESTION_TIMER_DURATION - POINTS_DEDUCTION_DELAY);

    // Calculer le nombre de points après déduction
    const deductedPoints = maxPoints - decayRate * deductionTime;

    // Assurer que le nombre de points ne devient pas négatif
    return Math.max(deductedPoints, 0);
  } else {
    // Si le temps est inférieur à POINTS_DEDUCTION_DELAY, attribuer le nombre maximum de points
    return LEVELS[userLevel];
  }
};

export const calculatePercentage = (currentPoints, totalPoints) => {
  // Calculer le pourcentage en fonction du nombre de points actuel et du nombre total de points
  const percentage = (currentPoints / totalPoints) * 100;

  // Arrondir le pourcentage à deux décimales
  const roundedPercentage = Math.round(percentage * 100) / 100;

  // Assurer que le pourcentage est compris entre 0 et 100
  return Math.min(Math.max(roundedPercentage, 0), 100);
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
