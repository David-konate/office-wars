// Profil.jsx
import React, { useEffect, useState } from "react";
import { useUserContext } from "../../context/UserProvider";
import {
  CircularProgress,
  Typography,
  Paper,
  Container,
  Rating,
} from "@mui/material";
import CalendarMonthIcon from "@mui/icons-material/CalendarMonth";
import SellIcon from "@mui/icons-material/Sell";
import FormatListNumberedIcon from "@mui/icons-material/FormatListNumbered";
import AssessmentIcon from "@mui/icons-material/Assessment";
import DateRangeIcon from "@mui/icons-material/DateRange";
import { useNavigate } from "react-router-dom";
import { Box } from "@mui/system";
import moment from "moment";
import axios from "axios";

const Profil = () => {
  const [isBusy, setIsBusy] = useState(true);

  const {
    userRankingsCount,
    userTopRankings,
    userRankings,
    authentification,
    user,
  } = useUserContext();

  const navigate = useNavigate();

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
      if (!localStorage.getItem("token")) {
        navigate("/login");
        return; // Terminer la fonction si l'utilisateur n'est pas connecté
      }

      // Attendre que l'authentification soit terminée
      await authentification();
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  return (
    <Paper elevation={3} style={{ padding: "20px", margin: "20px" }}>
      {isBusy ? (
        <CircularProgress />
      ) : (
        <Box>
          {user ? (
            <Container>
              <Box
                sx={{
                  backgroundColor: "transparent",
                  border: "1px solid var(--primary-color)",
                  padding: 5,
                }}
              >
                <Box
                  sx={{
                    display: "flex",
                    justifyContent: "space-between",
                    flexDirection: { xs: "column", sm: "column", md: "row" }, // Utilisation de la propriété flexDirection en fonction de la taille de l'écran
                    alignItems: { xs: "center", sm: "center" }, // Centrer le contenu verticalement pour xs et sm
                  }}
                >
                  <Box
                    sx={{
                      display: "flex",
                      justifyContent: "center",
                      paddingLeft: 5,
                      paddingTop: 3,
                      flexBasis: "50%", // Partage équitable de la largeur
                      alignItems: "flex-start", // Alignement du contenu à gauche
                    }}
                  >
                    <Box
                      sx={{
                        display: "flex",
                        flexDirection: "column",
                        flexGrow: 1, // Utilise tout l'espace disponible en largeur
                      }}
                    >
                      <Box className="img-profil">
                        {user.userImage ? (
                          <img
                            src={`http://127.0.0.1:8000/storage/images/${user.userImage}`}
                            alt={"image : " + user.userImage}
                            loading="lazy"
                          />
                        ) : (
                          <img
                            height="300"
                            src={`http://127.0.0.1:8000/storage/images/notImage.png}`}
                            alt={"Utilisateur sans avatar"}
                            loading="lazy"
                            style={{ borderRadius: 10 }}
                          />
                        )}
                      </Box>
                    </Box>
                  </Box>

                  <Box
                    sx={{
                      display: "flex",
                      flexDirection: "column",
                      flexGrow: 1, // Utilise tout l'espace disponible en largeur
                      flexBasis: "50%", // Partage équitable de la largeur
                      alignItems: "flex-start", // Alignement du contenu à gauche
                    }}
                  >
                    <Typography variant="h2">{user.userPseudo}</Typography>
                    <Box
                      sx={{
                        display: "flex",
                        alignItems: "center", // Alignement vertical
                        mb: 1,
                        mt: 5, // Marge en bas pour espacement entre les éléments
                      }}
                    >
                      <CalendarMonthIcon
                        sx={{ fontSize: "1.5rem", marginRight: "8px" }}
                      />
                      <Typography sx={{ ml: 1 }}>
                        Membre depuis le {moment(user.created_at).format("LL")}
                      </Typography>
                    </Box>
                    <Box
                      sx={{
                        display: "flex",
                        alignItems: "center", // Alignement vertical
                        mb: 1,
                        mt: 1, // Marge en bas pour espacement entre les éléments
                      }}
                    >
                      <FormatListNumberedIcon
                        sx={{ fontSize: "1.5rem", marginRight: "8px" }}
                      />
                      <Typography sx={{ ml: 1 }}>
                        {userRankingsCount} participations à Holocron Trivia
                      </Typography>
                    </Box>
                    <Box
                      sx={{
                        display: "flex",
                        alignItems: "center",
                        mb: 1,
                        mt: 1,
                      }}
                    >
                      <DateRangeIcon
                        sx={{ fontSize: "1.5rem", marginRight: "8px" }}
                      />
                      <Typography sx={{ ml: 1 }}>
                        Derniers résultats :
                      </Typography>
                    </Box>
                    <Box
                      sx={{
                        display: "flex",
                        alignItems: "center",
                        mb: 1,
                        mt: 1,
                      }}
                    >
                      <AssessmentIcon
                        sx={{ fontSize: "1.5rem", marginRight: "8px" }}
                      />
                      <Typography sx={{ ml: 1 }}>
                        Meilleurs résultats :
                      </Typography>
                    </Box>
                  </Box>
                </Box>
              </Box>
            </Container>
          ) : (
            <Typography variant="body1">Aucun utilisateur connecté</Typography>
          )}
        </Box>
      )}
    </Paper>
  );
};

export default Profil;
