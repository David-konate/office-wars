import { Container } from "@mui/material";

import { useEffect, useState } from "react";
import { useQuestionContext } from "../../context/QuestionProvider";
// import { useFilterContext } from "../../context/FilterProvider";
import Game from "../../components/Game";

const GameRanked = () => {
  const [isBusy, setIsBusy] = useState(true);
  const { setCurrentLevel } = useQuestionContext();

  useEffect(() => {
    setCurrentLevel("level3"); // Déplacer cet appel à l'intérieur de useEffect
    setIsBusy(false);
  }, []);

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
