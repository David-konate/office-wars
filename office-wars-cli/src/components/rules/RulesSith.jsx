import React from "react";
import {
  Container,
  Typography,
  List,
  ListItem,
  ListItemText,
} from "@mui/material";
import { Box } from "@mui/system";

const RulesSith = () => {
  return (
    <Container>
      <Box textAlign={"center"}>
        <Typography variant="h3" mt={2}>
          Confrérie Sith
        </Typography>
      </Box>
      <Typography variant="body1" mt={2}>
        Bienvenue, acolyte, dans le quizz impitoyable sur l'univers Star Wars.
      </Typography>
      <Typography variant="body1">
        Que la haine et la puissance guident tes réponses dans cette épreuve de
        ténèbres.
      </Typography>

      <Typography variant="h4" mt={3}>
        Thèmes:
      </Typography>
      <Typography variant="body1">
        Le quizz comprend trois thèmes principaux :
      </Typography>
      <List>
        <ListItem>
          <ListItemText primary="L'Histoire tordue de Star Wars" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Personnages sournois" />
        </ListItem>
        <ListItem>
          <ListItemText primary="L'univers sombre de Star Wars" />
        </ListItem>
      </List>

      <Typography variant="h4" mt={3}>
        Niveaux de questions et Points:
      </Typography>
      <Typography variant="body1">
        Chaque question est classée en trois niveaux :
      </Typography>
      <List>
        <ListItem>
          <ListItemText primary="Niveau 1: 2 points (ne soyez pas trop faible)" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Niveau 2: 4 points (montrez votre ruse)" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Niveau 3: 6 points (dominez les connaissances)" />
        </ListItem>
      </List>

      <Typography variant="h4" mt={3}>
        Temps de Réponse:
      </Typography>
      <Typography variant="body1">
        Le total de points accordé dépend du temps pour répondre :
      </Typography>
      <List>
        <ListItem>
          <ListItemText primary="Réponse rapide: Bonus de points (la précipitation peut être récompensée)" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Réponse dans le temps imparti: Points complets (une efficacité redoutable)" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Dépassement du temps: Points réduits (l'échec est puni)" />
        </ListItem>
      </List>

      <Typography variant="body1" mt={3}>
        La triche pourrait être considérée comme une faiblesse. Choisissez vos
        réponses avec soin.
      </Typography>
    </Container>
  );
};

export default RulesSith;
