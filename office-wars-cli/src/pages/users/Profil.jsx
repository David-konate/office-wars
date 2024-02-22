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
import { Link, useNavigate } from "react-router-dom";
import { Box } from "@mui/system";
import moment from "moment";
import RankingsList from "../../components/lists/RankingList";
import WhiteButton from "../../components/buttons/WhiteButton";

const Profil = () => {
  const [isBusy, setIsBusy] = useState(true);

  const [tabs, setTabs] = useState([
    {
      name: "rankingsList",
      isOpen: false,
      buttonLabel: "Liste résultats",
      component: RankingsList,
    },
  ]);
  const [tabSelected, setTabSelected] = useState(tabs["ranginksList"]); // Définissez la valeur initiale selon votre logique

  const {
    userLatestRankings,
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
  const handleCreateRankingsFormSubmit = () => {
    // Mettez à jour l'état pour ouvrir l'onglet "Liste des résultats"
    setTabSelected(tabs["ranginksList"]);
  };

  const closeAllComponants = () => {
    setTabs((prevTabs) => prevTabs.map((tab) => ({ ...tab, isOpen: false })));
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
                        {user.userImage ? (
                          <img
                            src={`http://127.0.0.1:8000/storage/images/${user.userImage}`}
                            alt={"image : " + user.userImage}
                            loading="lazy"
                          />
                        ) : (
                          <img
                            height="300"
                            src={`http://127.0.0.1:8000/storage/images/notImage.png`}
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
                            key={topRanking.id}
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
                        {userLatestRankings.map((latestRanking) => (
                          <Box
                            key={latestRanking.id}
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
              </Box>
              <Box>
                {tabs.map((row, rowIndex) => (
                  <Box
                    key={rowIndex}
                    display="flex"
                    flexDirection="row"
                    justifyContent="center"
                    alignItems="center"
                    mb={2}
                  >
                    {tabs.map((tab) => (
                      <WhiteButton
                        key={tab.name}
                        style={{ margin: "2" }}
                        onClick={() => {
                          closeAllComponants();
                          setTabs((prevTabs) =>
                            prevTabs.map((t) =>
                              t.name === tab.name
                                ? { ...t, isOpen: true }
                                : { ...t, isOpen: false }
                            )
                          );
                        }}
                      >
                        {tab.buttonLabel}
                      </WhiteButton>
                    ))}
                  </Box>
                ))}
              </Box>

              <Box>
                {tabs.find((tab) => tab.isOpen) &&
                  tabs
                    .find((tab) => tab.isOpen)
                    .component({
                      userRankings: handleCreateRankingsFormSubmit,
                    })}
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
