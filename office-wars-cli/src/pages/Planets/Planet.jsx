import axios from "axios";
import React, { useEffect, useState } from "react";
import { useParams, useLocation } from "react-router-dom";
import {
  CircularProgress,
  Box,
  Breadcrumbs,
  Link,
  Container,
  Typography,
} from "@mui/material";
import CelebrationIcon from "@mui/icons-material/Celebration";
import FlareIcon from "@mui/icons-material/Flare";
import VisibilityIcon from "@mui/icons-material/Visibility";
const Planet = () => {
  const location = useLocation();
  const planetId = location.state ? location.state.planetId : null;
  const [isBusy, setIsBusy] = useState(true);

  const [events, setEvents] = useState();
  const [planet, setPlanet] = useState([]);
  const { slug } = useParams();

  useEffect(() => {
    fetchData();
  }, [slug]); // Ajouter slug dans la liste de dépendances pour recharger les données lorsque le slug change

  const fetchData = async () => {
    try {
      const res = await axios.get(`planets/${planetId}`);
      setPlanet(res.data.data);
      console.log(res.data.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container>
      <Box mt={5}>
        <Breadcrumbs aria-label="breadcrumb">
          <Link underline="hover" color="inherit" href="/">
            {"Home"}
          </Link>
          <Link
            underline="hover"
            color="inherit"
            href="/planetes"
            style={{ color: "var(--primary-color)" }}
          >
            {"Planetes"}
          </Link>
          <Link
            underline="hover"
            color="inherit"
            style={{ color: "var(--primary-color)" }}
          >
            {planet.planetName}
          </Link>
        </Breadcrumbs>
        <Box mt={5}>
          <Typography p={1} variant="h3" className="titre-planet-detail">
            {planet.planetName}
          </Typography>
          <Box className="img-planet-detail">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Coruscant.jpg"
              alt=""
            />
          </Box>
          <Box mt={2} width={"80%"}>
            <Typography>{planet.planetDescription}</Typography>
          </Box>
          <Box
            mt={4}
            display="flex"
            className="localisationPlanet"
            alignItems="center"
          >
            <FlareIcon sx={{ mt: 2 }} fontSize="large" />
            <Typography variant="h5" mt={3} marginLeft={1}>
              Coordonnées Galactique :{" "}
            </Typography>
            <Typography ml={3} mt={3.5}>
              {planet.galacticCoordinates}
            </Typography>
          </Box>
          <Box
            mt={4}
            display="flex"
            className="localisationPlanet"
            alignItems="center"
          >
            <CelebrationIcon sx={{ mt: 2 }} fontSize="large" />
            <Typography variant="h5" mt={3} marginLeft={1}>
              Evénements planétaires :{" "}
            </Typography>
          </Box>
          <Box
            mt={2}
            className="event-planet"
            sx={{ display: "flex", flexDirection: "column" }}
          >
            {planet.events.map((event, index) => (
              <Box
                mt={1}
                key={index}
                sx={{
                  display: "flex",
                  alignItems: "center",
                  marginBottom: "10px",
                }}
              >
                <Typography
                  variant="h6"
                  sx={{ flex: "15%", marginRight: "10px" }}
                >
                  - {event.eventName}
                </Typography>
                <Typography
                  sx={{
                    flex: "60%",
                    overflow: "hidden",
                    textOverflow: "ellipsis",
                    whiteSpace: "nowrap",
                    marginRight: "10px",
                  }}
                >
                  {event.eventDescription}
                </Typography>
                <Box
                  sx={{
                    flex: "15%",
                    display: "flex",
                    justifyContent: "flex-end",
                    alignItems: "center",
                  }}
                >
                  <Typography ml={2}>{event.dateTime}</Typography>
                  <VisibilityIcon /> {/* Icône d'œil navigant */}
                </Box>
              </Box>
            ))}
          </Box>
        </Box>
      </Box>
    </Container>
  );
};

export default Planet;
