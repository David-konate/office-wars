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
  Divider,
} from "@mui/material";
import { displayImage, firstLetterUppercase, IMAGE_PATH } from "../../utils";

import CelebrationIcon from "@mui/icons-material/Celebration";
import FlareIcon from "@mui/icons-material/Flare";
import CastleIcon from "@mui/icons-material/Castle";
import VisibilityIcon from "@mui/icons-material/Visibility";
import FoodBankIcon from "@mui/icons-material/FoodBank";
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
          <Typography p={1} variant="h3" className="titre-detail">
            {planet.planetName}
          </Typography>
          <Box className="img-planet-detail">
            <img src={displayImage(planet.imagePlanet)} alt="" />
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
            <Box mb={3}>
              {planet.events_past.map((event, index) => (
                <Box
                  mt={1}
                  key={index}
                  sx={{
                    width: "70%",
                  }}
                >
                  <Box mt={3} display={"flex"}>
                    <Box width={"50%"}>
                      <Typography
                        sx={{
                          fontWeight: "bold",
                        }}
                      >
                        {firstLetterUppercase(event.eventName)}
                      </Typography>
                    </Box>
                    <Box width={"25%"}>
                      {moment(event.dateTime).format("Do MMMM YYYY")}
                    </Box>
                    <Box
                      width={"25%"}
                      sx={{
                        pb: 1,
                        display: "flex",
                        justifyContent: "flex-end",
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
            <Divider
              sx={{ my: 2, width: "40%", color: "var(--primary-color)" }}
            />
            <Box>
              {planet.events.map((event, index) => (
                <Box
                  key={index}
                  sx={{
                    width: "70%",
                  }}
                >
                  <Box mt={3} display={"flex"}>
                    <Box width={"50%"}>
                      <Typography
                        sx={{
                          fontWeight: "bold",
                        }}
                      >
                        {firstLetterUppercase(event.eventName)}
                      </Typography>
                    </Box>
                    <Box width={"25%"}>
                      {moment(event.dateTime).format("Do MMMM YYYY")}
                    </Box>
                    <Box
                      width={"25%"}
                      sx={{
                        pb: 1,
                        display: "flex",
                        justifyContent: "flex-end",
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
            <Box
              mt={4}
              display="flex"
              className="localisationPlanet"
              alignItems="center"
            >
              <CastleIcon sx={{ mt: 2 }} fontSize="large" />
              <Typography variant="h5" mt={3} marginLeft={1}>
                À la Découverte de :
              </Typography>
            </Box>
            <Box mt={5} mb={2}>
              {planet.sites.map((site, index) => (
                <Box
                  mt={1}
                  key={index}
                  sx={{
                    width: "70%",
                    display: "flex",
                    alignItems: "center", // Alignement des éléments sur la même ligne
                  }}
                >
                  {/* Ajout de l'image à gauche */}
                  <img
                    src="https://img1.starwars-holonet.com/holonet/dictionnaire/photos/lieu_theed_palais.jpg"
                    alt={site.siteName}
                    style={{
                      width: "10%",
                      marginRight: "10px",
                    }}
                  />

                  <Box ml={2} flex="1">
                    {/* Contenu à afficher à côté de l'image */}
                    <Box
                      display="flex"
                      justifyContent="space-between"
                      alignItems="center"
                    >
                      <Typography
                        sx={{
                          fontWeight: "bold",
                          width: "70%", // Ajustez la largeur selon vos besoins
                        }}
                      >
                        {firstLetterUppercase(site.siteName)}
                      </Typography>

                      <Box
                        width={"30%"}
                        sx={{
                          pb: 1,
                          display: "flex",
                          justifyContent: "flex-end",
                          "&:hover": {
                            cursor: "pointer",
                            color: "var(--primary-color)",
                          },
                        }}
                      >
                        <VisibilityIcon />
                      </Box>
                    </Box>

                    {/* Description en dessous */}
                    <Typography
                      sx={{
                        mt: 1,
                        overflow: "hidden",
                        textOverflow: "ellipsis",
                        whiteSpace: "nowrap",
                      }}
                    >
                      {site.siteDescription}
                    </Typography>
                  </Box>
                </Box>
              ))}
            </Box>
          </Box>
        </Box>
        <Box
          mt={4}
          display="flex"
          className="localisationPlanet"
          alignItems="center"
        >
          <FoodBankIcon sx={{ mt: 2 }} fontSize="large" />
          <Typography variant="h5" mt={3} marginLeft={1}>
            Repas & Repos :{" "}
          </Typography>
        </Box>
        <Box
          mt={2}
          className="event-planet"
          sx={{ display: "flex", flexDirection: "column" }}
        >
          <Box mb={3}>
            {planet.accommodations.map((accomodation, index) => (
              <Box
                mt={1}
                key={index}
                sx={{
                  width: "70%",
                }}
              >
                <Box mt={3} display={"flex"}>
                  <Box width={"50%"}>
                    <Typography
                      sx={{
                        fontWeight: "bold",
                      }}
                    >
                      {firstLetterUppercase(accomodation.accomodationName)}
                    </Typography>
                  </Box>
                  <Box width={"25%"}>Localisation : {accomodation.rates}</Box>
                  <Box
                    width={"25%"}
                    sx={{
                      pb: 1,
                      display: "flex",
                      justifyContent: "flex-end",
                      "&:hover": {
                        cursor: "pointer",
                        color: "var(--primary-color)",
                      },
                    }}
                  >
                    <VisibilityIcon />
                  </Box>
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
