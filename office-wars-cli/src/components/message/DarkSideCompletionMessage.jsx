import React from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Button,
} from "@mui/material";

const DarkSideCompletionMessage = ({ open, onClose }) => {
  return (
    <Dialog open={open} onClose={onClose}>
      <DialogTitle>Holocron Trivia terminé</DialogTitle>
      <DialogContent>
        Vous avez terminé le quizz en empruntant le Côté Obscur de la Force. Il
        semble que vous ayez utilisé des méthodes peu orthodoxes pour obtenir
        vos réponses. Méfiez-vous, car le Côté Obscur peut avoir des
        conséquences. Vous devrez faire face à votre destin.
      </DialogContent>
      <DialogActions>
        <Button onClick={onClose} color="primary" autoFocus>
          Fermer
        </Button>
      </DialogActions>
    </Dialog>
  );
};

export default DarkSideCompletionMessage;
