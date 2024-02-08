import React from "react";
import { useEffect, useState } from "react";
import CircularProgress from "@mui/material/CircularProgress";
import { Link } from "react-router-dom";
import { Box, Typography, useMediaQuery, useTheme } from "@mui/material";
import { Container } from "@mui/system";
import { linksAcceuil } from "../utils";
import Logo from "../components/Logo";
import CardAcceuil from "../components/cards/CardAcceuil";
const Home = () => {
  const [isBusy, setIsBusy] = useState(true);
  const theme = useTheme();
  const isSmallScreen = useMediaQuery(theme.breakpoints.down("sm"));

  useEffect(() => {
    setIsBusy(false);
  }, []);

  return isBusy ? (
    <Container>
      <Box sx={{ display: "flex" }}>
        <CircularProgress />
      </Box>
    </Container>
  ) : (
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
          top: 0,
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
        <Typography mt={5} className="textAcceuil" variant="h3">
          Bienvenue !
        </Typography>
        <Typography mt={3} className="textAcceuil" variant="h3">
          Voyageons ensemble, dans une lointaine...
        </Typography>
        <Typography mt={1} className="textAcceuil" variant="h3">
          Très lointaine galaxie...
        </Typography>
      </Box>
      <Box
        mt={5}
        ml={5}
        sx={{
          display: "flex",
          justifyContent: "center",
          alignItems: isSmallScreen ? "center" : "flex-start",
          flexDirection: isSmallScreen ? "column" : "row",
        }}
      >
        {linksAcceuil.map((link, index) => (
          <Link key={index} to={link.path} style={{ textDecoration: "none" }}>
            <CardAcceuil label={link.label} path={link.path} src={link.src} />
          </Link>
        ))}
      </Box>
    </Box>
  );
};

export default Home;
