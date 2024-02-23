// CustomThemeProvider.jsx
import React, {
  createContext,
  useContext,
  useEffect,
  useMemo,
  useState,
} from "react";
import axios from "axios";
import { useLocation } from "react-router-dom";
import { calculatePercentage, calculatePoints } from "../utils";
import MessageDialog from "../components/message/MessageDialog";
import { QUESTION_TIMER_DURATION } from "../utils";
const QuestionContext = createContext({});

export const QuestionProvider = ({ children }) => {
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
  const [points, setPoints] = useState(0);
  const [pointsMax, setPointsMax] = useState(0);
  const [resultat, setResultat] = useState(0);
  const [time, setTime] = useState();
  const [isBusy, setIsBusy] = useState(false);
  const [cheater, setCheater] = useState(false);
  const location = useLocation();
  const [level, setLevel] = useState({
    level3: {
      un: 7,
      deux: 7,
      trois: 6,
    },
    level2: {
      un: 10,
      deux: 10,
      trois: 0,
    },
    level1: {
      un: 10,
      deux: 0,
      trois: 0,
    },
  });

  // const currentAnswer = useMemo(() => {
  //   if (selectedAnswer) {
  //     const answers = questions.answers;
  //     return answers.find((answer) => answer.id === selectedAnswer);
  //   }
  //   return null;
  // }, []);

  useEffect(() => {
    fetchData();
  }, [location.search]);

  const fetchData = async () => {
    try {
      setIsBusy(true);
      const res = await axios.get(`new-game`);
      setQuestions(res.data);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };

  const onCalculPoint = () => {
    const currentQuestionData = questions[currentQuestion];
    const answers = currentQuestionData.answers;

    const currentAnswer =
      selectedAnswer && answers.find((answer) => answer.id == selectedAnswer);

    if (currentAnswer && currentAnswer?.isCorrect === 1 && timeRemaining > 0) {
      console.log(" tu as suivi la voie de la Force! Bonne réponse !");
      switch (currentQuestionData.level_id) {
        case 1:
          setCount(count + 1);
          const res1 = calculatePoints(timeRemaining, 1);
          setPoints((prevPoints) => prevPoints + res1);
          setPointsMax((prevPointsMax) => prevPointsMax + 1);
          break;
        case 2:
          setCount(count + 1);
          const res2 = calculatePoints(timeRemaining, 2);
          setPoints((prevPoints) => prevPoints + res2);
          setPointsMax((prevPointsMax) => prevPointsMax + 4);
          break;
        default:
          setCount(count + 1);
          const res3 = calculatePoints(timeRemaining, 3);
          setPoints((prevPoints) => prevPoints + res3);
          setPointsMax((prevPointsMax) => prevPointsMax + 6);
          break;
      }
    } else {
      setBadAnswers((prevBadAnswers) => [
        ...prevBadAnswers,
        {
          question: currentQuestionData,
          answer: currentAnswer,
          goodAnswer: currentQuestionData.answers,
        },
      ]);

      setPointsMax(
        (prevPointsMax) => prevPointsMax + currentQuestionData.level_id * 2
      );

      console.log(
        "Le côté obscur vous a dominé ! Mauvaise réponse / Temps dépassé  !"
      );
      setCount(count + 1);
    }

    // Vérifie si toutes les questions ont été répondues
    if (count + 1 === 10) {
      // Si oui, définissez setIsQuizFinished(true)
      setIsQuizFinished(true);
    }
  };

  useEffect(() => {
    setResultat(calculatePercentage(points, pointsMax));
    console.log("total points", points + " / " + pointsMax);
    console.log("total : ", resultat, "%");
  }, [points, pointsMax, resultat]); // Ajoutez 'resultat' comme dépendance

  // À l'extérieur du composant, définissez l'état pour contrôler l'affichage du MessageDialog
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
      {isBusy ? "chargement" : children}
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
