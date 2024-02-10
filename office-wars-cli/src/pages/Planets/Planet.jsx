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
import { firstLetterUppercase } from "../../utils";

import CelebrationIcon from "@mui/icons-material/Celebration";
import FlareIcon from "@mui/icons-material/Flare";
import VisibilityIcon from "@mui/icons-material/Visibility";
import moment from "moment";
const Planet = () => {
  const location = useLocation();
  const planetId = location.state ? location.state.planetId : null;
  const [isBusy, setIsBusy] = useState(true);

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
            {planet.events
              .sort((a, b) => new Date(a.dateTime) - new Date(b.dateTime))
              .map((event, index) => (
                <Box
                  mt={1}
                  key={index}
                  sx={{
                    width: "70%",
                  }}
                >
                  <Box mt={3} display={"flex"}>
                    <Box width={"25%"}>
                      <Typography
                        sx={{
                          fontWeight: "bold",
                        }}
                      >
                        {firstLetterUppercase(event.eventName)}
                      </Typography>
                    </Box>
                    <Box width={"50%"}>
                      {moment(event.dateTime).format("Do MMMM YYYY")}
                    </Box>
                    <Box
                      width={"25%"}
                      sx={{
                        display: "flex",
                        alignItems: "center",
                        "&:hover": {
                          cursor: "pointer",
                          color: "var(--primary-color)",
                        },
                      }}
                    >
                      <VisibilityIcon />
                    </Box>
                  </Box>
                  <Box>
                    <Typography
                      sx={{
                        mt: 1,
                        overflow: "hidden",
                        textOverflow: "ellipsis",
                        whiteSpace: "nowrap",
                      }}
                    >
                      {event.eventDescription}
                    </Typography>
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
