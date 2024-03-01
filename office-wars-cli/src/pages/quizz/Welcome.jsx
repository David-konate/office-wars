import React from "react";
import { useEffect, useState } from "react";
import CircularProgress from "@mui/material/CircularProgress";
import { Link } from "react-router-dom";
import { Box, Grid, Typography, useMediaQuery, useTheme } from "@mui/material";
import { Container } from "@mui/system";
import { linksAcceuilQuiz } from "../../utils";
import CardAcceuil from "../../components/cards/CardAcceuil";

import { useQuestionContext } from "../../context/QuestionProvider";
import axios from "axios";
const Welcome = () => {
  const theme = useTheme();
  const isSmallScreen = useMediaQuery(theme.breakpoints.down("sm"));

  useEffect(() => {}, []);

  return (
    <Box
      sx={{
        position: "relative",
        overflow: "hidden",
        minHeight: "100vh",
        width: "100%", // Utilise "100vw" pour spécifier 100% de la largeur de la vue
      }}
    >
      <Box
        sx={{
          padding: 5,
          position: "absolute",
          top: 5,
          left: 0,
          width: "100%",
          height: "100%",
          backgroundImage: "url(/images/cantaopaysage2.jpg)",
          backgroundSize: "cover",
          filter: "blur(5px) brightness(1)",
          zIndex: -1,
        }}
      />

      <Box
        mt={5}
        sx={{
          ml: "20%",
          maxWidth: "80%", // Choisir la largeur maximale souhaitée
        }}
      >
        <Typography
          color={"#ffe436"}
          mt={5}
          className="textAcceuil"
          variant="h2"
        >
          Holocron Trivia
        </Typography>
        <Typography
          color={"#ffe436"}
          mt={5}
          className="textAcceuil"
          variant="h3"
        >
          Alliance des Connaissances : Maîtrisez-vous la force ?
        </Typography>
      </Box>

      <Grid container mt={10} gap={20} justifyContent={"center"}>
        {linksAcceuilQuiz.map((link, index) => (
          <Grid item key={index} md={2} xs={6}>
            <Link key={index} to={link.path} style={{ textDecoration: "none" }}>
              <CardAcceuil label={link.label} path={link.path} src={link.src} />
            </Link>
          </Grid>
        ))}
      </Grid>
    </Box>
  );
};

export default Welcome;
