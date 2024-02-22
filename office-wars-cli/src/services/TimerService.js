import { useEffect, useState } from "react";
import { QUESTION_TIMER_DURATION } from "../utils";
import { useQuestionContext } from "../context/QuestionProvider";

const TimerService = () => {
  const { questions, setTime, currentQuestion } = useQuestionContext();

  const [timeRemaining, setTimeRemaining] = useState(
    QUESTION_TIMER_DURATION / 1000
  ); // en secondes
  const [isTimeUpDialogOpen, setIsTimeUpDialogOpen] = useState(false);
  let intervalId; // Déclaration en dehors de l'effet
  const stopTimer = () => {
    clearInterval(intervalId);
  };

  const InitTimer = () => {
    useEffect(() => {
      // Réinitialiser le chronomètre à la valeur initiale
      setTimeRemaining(QUESTION_TIMER_DURATION / 1000);

      // Nettoie le minuteur lors du clic sur le bouton ou lorsque 'questions' change
      return () => clearInterval(intervalId);
    }, [currentQuestion]);
  };

  const gestionTimer = () => {};

  useEffect(() => {
    // Si le temps restant atteint 0, afficher le message et arrêter le chronomètre
    if (timeRemaining === 0) {
      setIsTimeUpDialogOpen(true);
      clearInterval(intervalId); // Arrêter le chronomètre
    }

    // Décrémente le temps restant toutes les secondes
    intervalId = setInterval(() => {
      setTimeRemaining((prevTime) => Math.max(prevTime - 1, 0));
    }, 1000);

    // Nettoie le minuteur lors du clic sur le bouton ou lorsque 'questions' change
    return () => clearInterval(intervalId);
  }, [questions, timeRemaining]);

  const stopTime = () => {
    stopTimer();
  };

  const setTimer = () => {
    setTime(Math.max(timeRemaining, 0));
  };
};
export default TimerService;
