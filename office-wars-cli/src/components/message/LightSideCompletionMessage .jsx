import React from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Button,
  Card,
  Typography,
  Box,
  Paper,
  CircularProgress,
} from "@mui/material";
import { useQuestionContext } from "../../context/QuestionProvider";
import { Container } from "@mui/system";
import { useState } from "react";

const LightSideCompletionMessage = ({ open, onClose }) => {
  const { resultat, badAnswers, isBusy } = useQuestionContext();
  const [showCorrection, setShowCorrection] = useState(false);
  const toggleCorrection = () => {
    setShowCorrection(!showCorrection);
  };

  // Fonction personnalisée pour la fermeture avec surcharge
  const handleCustomClose = () => {
    console.log("Merci d'avoir jouer a Holocron-Trivia");
    //appelez la fonction onClose fournie par les props pour fermer la boîte de dialogue
    onClose();
  };

  return isBusy ? (
    <Box>
      <CircularProgress></CircularProgress>
    </Box>
  ) : (
    <Container>
      <Dialog open={open} onClose={onClose}>
        <Card
          sx={{
            padding: 2,
            width: "500px",
            textAlign: "center",

            color: "#fff",
          }}
        >
          <Typography variant="h5">
            Holocron Trivia - Partie terminée
          </Typography>
          <Paper sx={{ p: 3 }}>
            Félicitations ! Vous avez terminé le quizz du Côté Lumineux de la
            Force. Vous avez répondu à toutes les questions sans tricher. Que la
            Force soit avec vous !
          </Paper>
          <Box
            display="flex"
            alignItems="center"
            justifyContent="center"
            mt={2}
          >
            <Typography variant="h6">Votre score est de :</Typography>
            <Box
              sx={{
                background: "var(--text-color)",
                borderRadius: 5,
                padding: "6px",
                boxShadow: "0 0 10px #472b3b",
                marginLeft: "auto",
                marginRight: "auto",
              }}
            >
              <Typography variant="h6">{resultat} %</Typography>
            </Box>
          </Box>

          <Box>
            <Box
              mt={2}
              style={{ display: "flex", justifyContent: "space-between" }}
            >
              <Button onClick={toggleCorrection}>Correction</Button>
              <Button onClick={handleCustomClose} color="primary" autoFocus>
                Fermer
              </Button>
            </Box>
          </Box>
        </Card>
        {showCorrection && (
          <Card
            sx={{
              margin: "auto",
              marginTop: 4,
              padding: 2,
              width: "400px",
              textAlign: "center",
              color: "#fff",
            }}
          >
            <Box maxHeight={"300px"}>
              <Card
                sx={{
                  borderRadius: 10,
                  overflowY: "auto",
                  maxHeight: "300px",
                  boxShadow: "0 0 20px var(--other-color)",
                  padding: "13px",
                  display: "flex",
                  flexDirection: "column",
                  alignItems: "center",

                  "&::-webkit-scrollbar": {
                    width: "12px",
                  },
                  "&::-webkit-scrollbar-thumb": {
                    backgroundColor: "var(--bg-other-color)", // Couleur de fond spécifiée
                    borderRadius: "6px",
                  },
                  "&::-webkit-scrollbar-track": {
                    backgroundColor: "var(--other-color)",
                  },
                }}
                className="custom-box"
              >
                <Typography>Correction</Typography>
                {badAnswers && badAnswers.length > 0 && (
                  <Box m={1}>
                    {badAnswers.map((badAnswer, index) => (
                      <Box
                        key={index}
                        sx={{
                          marginBottom: "8px",
                          borderRadius: "8px",
                          boxShadow: "0 0 10px #ffff",
                          padding: "16px",
                          background: "var(--bg-other-color)",
                          color: "#fff",
                          textAlign: "center",
                        }}
                      >
                        <Typography variant="body1">
                          {badAnswer.question.questionTitle}
                        </Typography>
                        <Box mt={1}>
                          <Typography mt={1} variant="body2">
                            Votre réponse: {badAnswer.answer.answerText}
                          </Typography>
                          <Typography
                            sx={{ boxShadow: "0 0 10px #ffff" }}
                            mt={2}
                            variant="body2"
                          >
                            Bonne réponse:{" "}
                            {
                              badAnswer.goodAnswer.find(
                                (answer) => answer.isCorrect === 1
                              )?.answerText
                            }
                          </Typography>
                        </Box>
                      </Box>
                    ))}
                  </Box>
                )}
              </Card>
            </Box>
          </Card>
        )}
      </Dialog>
    </Container>
  );
};

export default LightSideCompletionMessage;
