import React, { useEffect, useState } from "react";
import { useNavigate } from "react-router";
import {
  CircularProgress,
  Box,
  Breadcrumbs,
  Link,
  Typography,
  Grid,
  Container,
} from "@mui/material";
import EditIcon from "@mui/icons-material/Edit";
import { displayImage } from "../../utils";
import axios from "axios";
import ImagesHandle from "../../components/ImagesHandle";
import { useUserContext } from "../../context/UserProvider";
import UpdatePlanetForm from "../../components/forms/UpdatePlanetForm";

const IndexPlanets = () => {
  const navigate = useNavigate();
  const [isBusy, setIsBusy] = useState(true);
  const [planets, setPlanets] = useState([]);

  // Utilisez le contexte utilisateur pour obtenir les informations sur l'utilisateur

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`planets`);
      setPlanets(res.data);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };
  const { user } = useUserContext();
  console.log(user);

  // Vérifiez si l'utilisateur est un administrateur
  const isAdmin = user && user.role === "admin";

  const [isUpdateFormVisible, setIsUpdateFormVisible] = useState(false);
  const [selectedPlanetId, setSelectedPlanetId] = useState(null);
  const handleUpdateClick = (planetId) => {
    setIsUpdateFormVisible(true);
    setSelectedPlanetId(planetId);
  };

  const handleFormClose = () => {
    setIsUpdateFormVisible(false);
    setSelectedPlanetId(null);
  };
  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Box>
      <ImagesHandle route="images" customText="DE LOINTAINE PLANETES" />
      <Box ml={5} mr={5}>
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
        </Breadcrumbs>
        <Container>
          <Grid container mt={10} spacing={4} justifyContent={"center"}>
            {planets.map((planet, index) => (
              <Grid key={index} item md={4} xs={10}>
                <Box
                  className="Planete"
                  display="flex"
                  flexDirection="column"
                  alignItems="center"
                  justifyContent="center"
                >
                  <Typography variant="h4">{planet.planetName}</Typography>
                  <Box mt={3} className="img-planetes-index">
                    <img
                      style={{
                        borderRadius: "10px",
                        width: "auto",
                        height: "auto",
                        width: "250px",
                        height: "250px",
                      }}
                      src={displayImage(planet.imagePlanet)}
                      alt={planet.planetName}
                    />
                  </Box>

                  <Typography
                    pl={5}
                    pr={5}
                    pt={4}
                    textAlign={"center"}
                    sx={{
                      display: "-webkit-box",
                      WebkitBoxOrient: "vertical",
                      overflow: "hidden",
                      WebkitLineClamp: 3,
                      textOverflow: "ellipsis",
                      position: "relative",
                    }}
                  >
                    {planet.planetDescription}
                  </Typography>
                  <Box mt={1}>
                    <Link
                      className="custom-link"
                      component="button"
                      variant="body2"
                      onClick={() =>
                        navigate(`/planetes/${planet.slug}`, {
                          state: { planetId: planet.id },
                        })
                      }
                    >
                      {"EN SAVOIR PLUS"}
                    </Link>
                  </Box>
                  {isAdmin && (
                    <Link
                      className="custom-link"
                      component="button"
                      variant="body2"
                      onClick={() => handleUpdateClick(planet.id)}
                      sx={{
                        position: "absolute",
                        top: 0,
                        right: 0,
                        color: "var(--primary-color)",
                      }}
                    >
                      <EditIcon />
                    </Link>
                  )}
                </Box>
              </Grid>
            ))}
          </Grid>
        </Container>
      </Box>

      {/* Afficher le formulaire de mise à jour conditionnellement */}
      {isUpdateFormVisible && (
        <UpdatePlanetForm
          planetId={selectedPlanetId}
          handleClose={handleFormClose}
        />
      )}
    </Box>
  );
};

export default IndexPlanets;
