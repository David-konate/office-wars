// CustomThemeProvider.jsx
import React, { createContext, useContext, useEffect, useState } from "react";
import axios from "axios";
import { useLocation, useNavigate } from "react-router-dom";
import { calculatePercentage, calculatePoints } from "../utils";
import MessageDialog from "../components/message/MessageDialog";
import { QUESTION_TIMER_DURATION } from "../utils";
import { useUserContext } from "./UserProvider";

const QuestionContext = createContext({});

export const QuestionProvider = ({ children }) => {
  const { user } = useUserContext();
  const [questions, setQuestions] = useState();
  const [currentQuestion, setCurrentQuestion] = useState(0);
  const [currentLevel, setCurrentLevel] = useState(3);
  const [selectedAnswer, setSelectedAnswer] = useState("");
  const [badAnswers, setBadAnswers] = useState([]);
  const [count, setCount] = useState(0);
  const [isQuizFinished, setIsQuizFinished] = useState(false);
  const [timeRemaining, setTimeRemaining] = useState(
    QUESTION_TIMER_DURATION / 1000
  );
  const [questionsCount, setQuestionsCount] = useState(0);
  const navigate = useNavigate();

  const [points, setPoints] = useState(0);
  const [pointsMax, setPointsMax] = useState(0);
  const [resultat, setResultat] = useState(0);
  const [time, setTime] = useState();
  const [isBusy, setIsBusy] = useState(false);
  const [cheater, setCheater] = useState(false);
  const location = useLocation();
  const [totalTime, setTotalTime] = useState(0);

  useEffect(() => {
    fetchData();
  }, [location.search, currentLevel]);

  const fetchData = async () => {
    try {
      setIsBusy(true);
      console.log({ currentLevel });
      const res = await axios.get(`/new-game/${currentLevel}`);
      console.log(res.data);
      setQuestions(res.data);
      setQuestionsCount(res.data.length);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };

  const gameFinished = async () => {
    try {
      setIsBusy(true);
      //Vérification d'une partie level 3 (classé )
      if (currentLevel === 3) {
        await axios.post(`rankings`, {
          resultQuizz: resultat,
          timeQuizz: totalTime,
          user_id: user.id,
        });
      }
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
      navigate("/holocron-trivia/public");
      resetGame();
    }
  };

  const resetGame = () => {
    setCurrentQuestion(0);
    setIsQuizFinished(false);
    setBadAnswers([]);
    setTimeRemaining(QUESTION_TIMER_DURATION / 1000);
    setQuestions();
    fetchData();
  };

  const onCalculPoint = () => {
    const currentQuestionData = questions[currentQuestion];
    const answers = currentQuestionData.answers;

    const currentAnswer =
      selectedAnswer && answers.find((answer) => answer.id == selectedAnswer);

    if (currentAnswer && currentAnswer?.isCorrect === 1 && timeRemaining > 0) {
      console.log("Tu as suivi la voie de la Force! Bonne réponse!");
      let res;
      switch (currentQuestionData.level_id) {
        case 1:
          res = calculatePoints(timeRemaining, 1);
          break;
        case 2:
          res = calculatePoints(timeRemaining, 2);
          break;
        default:
          res = calculatePoints(timeRemaining, 3);
          break;
      }

      // Mise à jour des points et pointsMax
      setCount((prevCount) => prevCount + 1);
      setPoints((prevPoints) => prevPoints + res);
      setPointsMax(
        (prevPointsMax) => prevPointsMax + currentQuestionData.level_id * 2
      );

      // Ajoutez le temps écoulé au temps total
      setTotalTime(
        (prevTotalTime) =>
          prevTotalTime + (QUESTION_TIMER_DURATION / 1000 - timeRemaining)
      );
    } else {
      setBadAnswers((prevBadAnswers) => [
        ...prevBadAnswers,
        {
          question: currentQuestionData,
          answer: currentAnswer,
          goodAnswer: currentQuestionData.answers,
        },
      ]);

      // Ajoutez le temps écoulé au temps total
      setTotalTime(
        (prevTotalTime) =>
          prevTotalTime + (QUESTION_TIMER_DURATION / 1000 - timeRemaining)
      );

      setPointsMax(
        (prevPointsMax) => prevPointsMax + currentQuestionData.level_id * 2
      );

      console.log(
        "Le côté obscur vous a dominé ! Mauvaise réponse / Temps dépassé!"
      );
      setCount((prevCount) => prevCount + 1);
    }

    // Vérifie si toutes les questions ont été répondues
    if (currentQuestion + 1 < questionsCount) {
      // Si oui, passez à la question suivante
      setCurrentQuestion((prevQuestion) => prevQuestion + 1);
    } else {
      // Si non, définissez setIsQuizFinished(true)
      setIsQuizFinished(true);
    }
  };

  useEffect(() => {
    setResultat(calculatePercentage(points, pointsMax));
    console.log("Total points", points + " / " + pointsMax);
    console.log("Total : ", resultat, "%");
  }, [points, pointsMax, resultat]);

  const [showAllQuestionsAnsweredDialog, setShowAllQuestionsAnsweredDialog] =
    useState(false);

  return (
    <QuestionContext.Provider
      value={{
        questions,
        currentLevel,
        currentQuestion,
        selectedAnswer,
        timeRemaining,
        isQuizFinished,
        resultat,
        badAnswers,
        gameFinished,
        setTimeRemaining,
        setCurrentLevel,
        setCurrentQuestion,
        setSelectedAnswer,
        setTime,
        onCalculPoint,
        setCheater,
        setIsQuizFinished,
      }}
    >
      {isBusy ? "Chargement..." : children}
      <MessageDialog
        open={showAllQuestionsAnsweredDialog}
        onClose={() => setShowAllQuestionsAnsweredDialog(false)}
        title="Toutes les questions ont été répondues"
        message="Félicitations ! Vous avez répondu à toutes les questions."
      />
    </QuestionContext.Provider>
  );
};

export const useQuestionContext = () => useContext(QuestionContext);
