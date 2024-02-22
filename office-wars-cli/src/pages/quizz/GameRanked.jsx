import { Container, Button, CircularProgress } from "@mui/material";

import { useEffect, useState } from "react";
import { useQuestionContext } from "../../context/QuestionProvider";
import { Box } from "@mui/system";
// import { useFilterContext } from "../../context/FilterProvider";
import Game from "../../components/Game";

const GameRanked = () => {
  const [isBusy, setIsBusy] = useState(true);
  const {
    getCurrentQuestion,
    setCurrentQuestion,
    questions,
    currentQuestion,
    setCurrentLevel,
  } = useQuestionContext();

  useEffect(() => {
    setCurrentLevel("level3"); // Déplacer cet appel à l'intérieur de useEffect
    setIsBusy(false);
  }, []);

  const handleNextQuestion = () => {
    const nextQuestionIndex = currentQuestion + 1;
    if (nextQuestionIndex < questions.length) {
      setCurrentQuestion(nextQuestionIndex);
    }
  };

  return (
    <Container>
      {
        <div>
          <Game />
        </div>
      }
    </Container>
  );
};

export default GameRanked;
