import React from "react";
import {
  Container,
  Typography,
  List,
  ListItem,
  ListItemText,
} from "@mui/material";
import { Box } from "@mui/system";

const RulesJedi = () => {
  return (
    <Container>
      <Box textAlign={"center"}>
        <Typography variant="h3" mt={2}>
          Conseil Jedi
        </Typography>
      </Box>

      <Typography variant="body1" mt={2}>
        Bienvenue, jeune Padawan, dans le quizz sur l'univers Star Wars.
      </Typography>
      <Typography variant="body1">
        Que la Force soit avec toi dans cette aventure de connaissances
        galactiques.
      </Typography>

      <Typography variant="h4" mt={3}>
        Thèmes:
      </Typography>
      <Typography variant="body1">
        Le quizz comprend trois thèmes principaux :
      </Typography>
      <List>
        <ListItem>
          <ListItemText primary="Histoire de Star Wars" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Personnages emblématiques" />
        </ListItem>
        <ListItem>
          <ListItemText primary="L'univers Star Wars" />
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
          <ListItemText primary="Niveau 1: 2 points" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Niveau 2: 4 points" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Niveau 3: 6 points" />
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
          <ListItemText primary="Réponse rapide: Bonus de points" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Réponse dans le temps imparti: Points complets" />
        </ListItem>
        <ListItem>
          <ListItemText primary="Dépassement du temps: Points réduits" />
        </ListItem>
      </List>

      <Typography variant="body1" mt={3}>
        Il est vivement déconseillé de tricher. La sagesse et la connaissance
        sont les clés du succès.
      </Typography>
    </Container>
  );
};

export default RulesJedi;
