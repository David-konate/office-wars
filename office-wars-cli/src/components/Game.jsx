import {
  Box,
  Container,
  Typography,
  RadioGroup,
  FormControlLabel,
  Radio,
  Paper,
  Hidden,
} from "@mui/material";
import React, { useEffect, useState } from "react";

import {
  QUESTION_TIMER_DURATION,
  convertToRoman,
  displayImage,
} from "../utils";
import { useQuestionContext } from "../context/QuestionProvider";
import WhiteButton from "./buttons/WhiteButton";
import ConfirmationDialog from "./message/messageValidate";
import MessageDialog from "./message/MessageDialog";
import LightSideCompletionMessage from "./message/LightSideCompletionMessage ";

const Game = (rute) => {
  const {
    questions,
    setSelectedAnswer,
    selectedAnswer,
    isQuizFinished,
    currentQuestion,
    setCurrentQuestion,
    onCalculPoint,
    timeRemaining,
    setTimeRemaining,
    setCheater,
  } = useQuestionContext();

  // en secondes
  const [isTimeUpDialogOpen, setIsTimeUpDialogOpen] = useState(false);
  let intervalId; // Déclaration en dehors de l'effet
  const stopTimer = () => {
    clearInterval(intervalId);
  };

  const intervalIdRef = useState(null);

  useEffect(() => {
    // Réinitialiser le chronomètre à la valeur initiale
    setTimeRemaining(QUESTION_TIMER_DURATION / 1000);

    // Nettoie le minuteur lors du clic sur le bouton ou lorsque 'questions' change
    return () => clearInterval(intervalIdRef.current);
  }, [currentQuestion]);

  useEffect(() => {
    // Si le temps restant atteint 0, afficher le message et arrêter le chronomètre
    if (timeRemaining === 0) {
      setIsTimeUpDialogOpen(true);
      clearInterval(intervalIdRef.current); // Arrêter le chronomètre
    }

    // Décrémente le temps restant toutes les secondes
    intervalIdRef.current = setInterval(() => {
      setTimeRemaining((prevTime) => Math.max(prevTime - 1, 0));
    }, 1000);

    // Nettoie le minuteur lors du clic sur le bouton ou lorsque 'questions' change
    return () => clearInterval(intervalIdRef.current);
  }, [questions, timeRemaining]);
  const handleAnswerChange = (event) => {
    setSelectedAnswer(event.target.value);
  };

  const handleConfirmClick = () => {
    // Réinitialiser le chronomètre à la valeur initiale lors du clic sur le bouton
    stopTimer();

    setTimeRemaining(timeRemaining);

    // Appeler setCurrentAnswer avec la réponse sélectionnée
    setSelectedAnswer(selectedAnswer);
    onCalculPoint();
  };

  const handleTimeUpDialogClose = () => {
    setIsTimeUpDialogOpen(false);
  };

  const [showLeavePageDialog, setShowLeavePageDialog] = useState(false);

  useEffect(() => {
    const handleBeforeUnload = (event) => {
      const message = "Vous avez quitter la page !";
      setShowLeavePageDialog(true);
      event.returnValue = message; // Standard pour la plupart des navigateurs
      return message; // Nécessaire pour certains navigateurs
    };

    window.addEventListener("beforeunload", handleBeforeUnload);

    return () => {
      window.removeEventListener("beforeunload", handleBeforeUnload);
    };
  }, []);

  useEffect(() => {
    const handleVisibilityChange = () => {
      if (document.hidden) {
        // L'utilisateur est revenu sur la page
        const message =
          "La Force est puissante en toi, mais trop jeune en elle tu es... ^^";
        console.log(message);
        setTimeRemaining(3);
        setCheater(true);
      } else {
        // L'utilisateur n'est pas revenu sur la page
      }
    };

    document.addEventListener("visibilitychange", handleVisibilityChange);

    return () => {
      document.removeEventListener("visibilitychange", handleVisibilityChange);
    };
  }, [setTimeRemaining]);

  return (
    <Container sx={{ backgroundColor: "transparent" }}>
      <Box
        display={{ xs: "block", sm: "flex" }}
        justifyContent="space-between"
        alignItems="flex-start" // Aligner les éléments en haut sur les écrans plus petits
      >
        <Box
          width={{ xs: "100%", sm: "100%", md: "40%", lg: "40%", xl: "35%" }}
        >
          <Box
            sx={{
              marginTop: 3,
              width: "100%", // Ajustement pour prendre 100% de la largeur sur xs et sm
              border: "1px solid  var(--bg-primary-color)",
              borderRadius: 2,
              overflow: "hidden",
              background: "transparent",
              boxShadow: "0 0 20px var(--bg-other-color)",
            }}
            className="custom-box"
          >
            <Typography
              variant="h6"
              sx={{
                backgroundColor: "transparent",

                padding: "4px 12px",
                textAlign: "center",
                borderRadius: 2,
                border: "1px solid var(--black-color)",
                color: "var(--text-color)",
                boxShadow: "0 0 10px var(--other-color)",
              }}
            >
              {questions[currentQuestion].categoryName}
            </Typography>
            <Paper
              sx={{
                marginTop: 3,
                backgroundColor: "transparent",
                padding: "20px",
                marginLeft: "10px",
                marginRight: "10px",
                borderRadius: 2,
                border: "1px solid var(-other-card)",
              }}
              className="box-body-question"
            >
              <Hidden smDown>
                <Box
                  sx={{
                    width: "100%", // ou utilisez un pourcentage approprié
                    height: "auto", // Pour maintenir le ratio hauteur/largeur de l'image
                    borderRadius: 5,
                    marginBottom: "10px",
                    boxShadow: "0 0 10px var(--bg-img-card)",
                  }}
                  className="box-hero-index"
                >
                  <img
                    src={displayImage(questions[currentQuestion].imageQuestion)}
                    alt=""
                    style={{
                      objectFit: "cover",
                      width: "100%", // ou utilisez un pourcentage approprié
                      height: "auto",
                    }}
                  />
                </Box>
              </Hidden>
              <Box
                sx={{
                  fontSize: "1.5em",
                  marginBottom: "10px",
                  backgroundColor: "transparent",
                  color: "#fff",
                  padding: "0px 12px",
                  textAlign: "center",
                  borderRadius: 10,
                  color: "var(--text-color)",
                  marginTop: 2,
                  border: "1px solid var(--other-color)",
                  boxShadow: "0 0 10px #472b3b",
                }}
                className="box-section mt-2 mb-2"
              >
                {convertToRoman(questions[currentQuestion].level)}
              </Box>
              <Box>
                <Typography
                  variant="h5"
                  textAlign={"center"}
                  component="div"
                  mt={2}
                  mb={2}
                >
                  {questions[currentQuestion].questionTitle}
                </Typography>
                <div className="mb-3 ms-4"></div>
              </Box>
            </Paper>
          </Box>
        </Box>
        <Box
          width={{ xs: "100%", sm: "100%", md: "55%", lg: "55%", xl: "60%" }}
          sx={{
            display: "flex",
            flexDirection: "column",
            alignItems: "center",
          }}
        >
          <Box
            marginTop={5}
            sx={{
              width: "80%",
              overflow: "hidden",
              background: "transparent",
              padding: "13px",
              display: "flex",
              flexDirection: "column",
              alignItems: "center",
              justifyContent: "center",
            }}
            className="custom-box"
          >
            <RadioGroup value={selectedAnswer} onChange={handleAnswerChange}>
              {questions[currentQuestion].answers.map((answer, index) => (
                <FormControlLabel
                  key={index}
                  value={answer.id}
                  control={<Radio />}
                  label={answer.answerText}
                  sx={{
                    marginBottom: 5, // Ajuster cette valeur selon votre préférence
                    borderRadius: "8px",
                    boxShadow: "0 0 10px var(--other-color)",
                    padding: "16px",
                    background: "var(--bg-primary-color)",
                    color: "#fff",
                    textAlign: "center",
                    cursor: "pointer",
                    transition: "background 0.3s ease",
                    "&:hover": {
                      background: "var(--other-color)",
                    },
                  }}
                />
              ))}
            </RadioGroup>
          </Box>
          <Box
            mt={2}
            sx={{
              display: "flex",
              justifyContent: "flex-end",
              width: "80%",
            }}
          >
            <WhiteButton onClick={handleConfirmClick}>Confirmez</WhiteButton>
          </Box>
          <Typography variant="h6" mt={2}>
            Temps restant : {timeRemaining} secondes
          </Typography>
        </Box>
      </Box>
      <LightSideCompletionMessage
        open={isQuizFinished}
        onClose={() => setShowLeavePageDialog(false)}
      />
      <MessageDialog
        open={showLeavePageDialog}
        onClose={() => setShowLeavePageDialog(false)}
        title="Vous quittez la page"
        message="Vôtre maitrise de la force laisse à désiré"
      />
      <ConfirmationDialog
        open={isTimeUpDialogOpen}
        onClose={handleTimeUpDialogClose}
        title="Temps écoulé"
        message="Le temps imparti est écoulé. Veuillez passer à la question suivante."
      />
    </Container>
  );
};

export default Game;
