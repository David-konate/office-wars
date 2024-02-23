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
} from "@mui/material";
import { useQuestionContext } from "../../context/QuestionProvider";
import BasAnswersList from "../lists/BadAnswersList";

const LightSideCompletionMessage = ({ open, onClose }) => {
  const { resultat } = useQuestionContext();

  return (
    <Dialog open={open} onClose={onClose}>
      <Card
        sx={{
          padding: 2,
          width: "400px",
          textAlign: "center",

          color: "#fff",
        }}
      >
        <Typography variant="h5">
          Holocron Trivia terminé - Partie terminée
        </Typography>
        <Paper sx={{ p: 3 }}>
          Félicitations ! Vous avez terminé le quizz du Côté Lumineux de la
          Force. Vous avez répondu à toutes les questions sans tricher. Que la
          Force soit avec vous !
        </Paper>
        <Box display="flex" alignItems="center" justifyContent="center" mt={2}>
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

        <DialogActions>
          <Button onClick={onClose} color="primary" autoFocus>
            Fermer
          </Button>
        </DialogActions>
      </Card>
      <BasAnswersList />
    </Dialog>
  );
};

export default LightSideCompletionMessage;
