import React, { useEffect, useState } from "react";
import { useUserContext } from "../../context/UserProvider";
import {
  CircularProgress,
  Typography,
  Paper,
  Container,
  Button,
} from "@mui/material";
import CalendarMonthIcon from "@mui/icons-material/CalendarMonth";
import FormatListNumberedIcon from "@mui/icons-material/FormatListNumbered";
import AssessmentIcon from "@mui/icons-material/Assessment";
import DateRangeIcon from "@mui/icons-material/DateRange";
import { Link, useNavigate } from "react-router-dom";
import { Box } from "@mui/system";
import moment from "moment";
import RankingsList from "../../components/lists/RankingList";
import LevelBox from "../../components/LevelBox";
import { useQuestionContext } from "../../context/QuestionProvider";
import { displayImage } from "../../utils";

const Profil = () => {
  const { currentLevel, setCurrentLevel } = useQuestionContext();
  const [isBusy, setIsBusy] = useState(true);
  const [tabs] = useState({
    ranginksList: {
      id: 1,
      isOpen: false,
      buttonLabel: "Liste résultats",
      component: RankingsList,
    },
  });
  const handleLevelChange = (event) => {
    setCurrentLevel(parseInt(event.target.value));
    localStorage.setItem("level", currentLevel);
  };

  const [tabSelected, setTabSelected] = useState(tabs["ranginksList"]); // Définissez la valeur initiale selon votre logique
  const TabSelected = tabSelected.component;
  const [isListOpen, setIsListOpen] = useState(false);

  const {
    userLatestRankings,
    userRankingsCount,
    userTopRankings,
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
  const handleCreateRankingsFormSubmit = () => {
    // Mettez à jour l'état pour ouvrir l'onglet "Liste des résultats"
    setTabSelected(tabs["ranginksList"]);
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
                    flexDirection: { xs: "column", sm: "column", md: "row" },
                    alignItems: { xs: "center", sm: "center" },
                  }}
                >
                  <Box
                    sx={{
                      display: "flex",
                      justifyContent: "center",
                      paddingLeft: 5,
                      paddingTop: 3,
                      flexBasis: "50%",
                      alignItems: "flex-start",
                    }}
                  >
                    <Box
                      sx={{
                        display: "flex",
                        flexDirection: "column",
                        flexGrow: 1,
                      }}
                    >
                      <Box className="img-profil">
                        <img
                          src={displayImage(user.userImage)}
                          alt={"image : " + user.userImage}
                          loading="lazy"
                        />
                      </Box>
                    </Box>
                  </Box>

                  <Box
                    sx={{
                      display: "flex",
                      paddingLeft: 10,
                      flexDirection: "column",
                      flexGrow: 1,
                      flexBasis: "50%",
                      alignItems: "flex-start",
                    }}
                  >
                    <Typography variant="h2">{user.userPseudo}</Typography>
                    <Box
                      sx={{
                        display: "flex",
                        alignItems: "center",
                        mb: 1,
                        mt: 5,
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
                        alignItems: "center",
                        mb: 1,
                        mt: 1,
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
                        flexDirection: "column",
                        mb: 1,
                        mt: 1,
                      }}
                    >
                      <Box
                        sx={{
                          display: "flex",
                          alignItems: "center",
                          mb: 1,
                        }}
                      >
                        <AssessmentIcon
                          sx={{ fontSize: "1.5rem", marginRight: "8px" }}
                        />
                        <Typography sx={{ ml: 1 }}>
                          Meilleurs résultats :{" "}
                        </Typography>
                      </Box>
                      <Box
                        sx={{
                          display: "flex",
                          flexDirection: "column",
                          mb: 1,
                          mt: 1,
                          justifyContent: "center",
                        }}
                      >
                        {userTopRankings.map((topRanking, index) => (
                          <Box
                            key={index}
                            sx={{
                              display: "flex",
                              alignItems: "center",
                              mb: 1,
                              justifyContent: "center",
                            }}
                          >
                            <span>{`${index + 1}. ${
                              topRanking.resultQuizz
                            } %`}</span>
                          </Box>
                        ))}
                      </Box>
                    </Box>

                    <Box
                      sx={{
                        display: "flex",
                        flexDirection: "column",
                        mb: 1,
                        mt: 1,
                      }}
                    >
                      <Box
                        sx={{
                          display: "flex",
                          alignItems: "center",
                          mb: 1,
                        }}
                      >
                        <DateRangeIcon
                          sx={{ fontSize: "1.5rem", marginRight: "8px" }}
                        />
                        <Typography sx={{ ml: 1 }}>
                          Derniers résultats :{" "}
                        </Typography>
                      </Box>

                      <Box
                        sx={{
                          display: "flex",
                          paddingLeft: 3,
                          flexDirection: "column",
                          mb: 1,
                          mt: 1,
                          justifyContent: "center",
                        }}
                      >
                        {userLatestRankings.map((latestRanking, index) => (
                          <Box
                            key={index}
                            sx={{
                              display: "flex",
                              alignItems: "center",
                              mb: 1,
                            }}
                          >
                            <span style={{ marginRight: "8px" }}>
                              {moment(latestRanking.created_at).format("LL")}
                            </span>
                            <span>{`${latestRanking.resultQuizz} %`}</span>
                          </Box>
                        ))}
                      </Box>
                    </Box>
                  </Box>
                </Box>
                <LevelBox
                  currentLevel={currentLevel}
                  handleLevelChange={handleLevelChange}
                />
              </Box>
              <Box
                sx={{
                  display: "flex",
                  flexDirection: "column",
                  alignItems: "center",
                }}
              >
                <Box mt={2} mb={2}>
                  {" "}
                  <Button
                    sx={{ color: "var(--color-text)" }}
                    onClick={() => {
                      setIsListOpen((prevState) => !prevState);
                    }}
                  >
                    {isListOpen ? "Fermer" : "Vos resultats"}
                  </Button>
                </Box>

                {isListOpen && (
                  <Box>
                    {/* Composant sélectionné */}
                    <TabSelected
                      userRankings={handleCreateRankingsFormSubmit}
                    />
                  </Box>
                )}
              </Box>
              {user.role === "admin" && (
                <Box mt={2} mb={2}>
                  <Button
                    sx={{ color: "var(--color-text)" }}
                    component={Link}
                    to="/admin"
                    style={{ textDecoration: "none" }}
                  >
                    Aller à l'administration
                  </Button>
                </Box>
              )}
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
