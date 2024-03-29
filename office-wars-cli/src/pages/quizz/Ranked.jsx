import {
  Avatar,
  Breadcrumbs,
  Button,
  CircularProgress,
  Container,
  Autocomplete,
  Link,
  Paper,
  TextField,
  RadioGroup,
  Typography,
} from "@mui/material";
import { Box, Stack } from "@mui/system";

import axios from "axios";
import { useEffect, useState } from "react";

import WhiteButton from "../../components/buttons/WhiteButton";
import { useUserContext } from "../../context/UserProvider";
import { Link as RouterLink } from "react-router-dom";
import { useTheme } from "../../context/ThemeContext";
import RulesJedi from "../../components/rules/RulesJedi";
import RulesSith from "../../components/rules/RulesSith";
import RankingsAllList from "../../components/lists/RankingsAllList";
import moment from "moment";
import { displayImage, firstLetterUppercase } from "../../utils";
import { useQuestionContext } from "../../context/QuestionProvider";
import LevelBox from "../../components/LevelBox";
const Ranked = () => {
  const [selectedUnivers, setSelectedUnivers] = useState(null);
  const [selectedTheme, setSelectedTheme] = useState(null);

  const [isBusy, setIsBusy] = useState(true);
  const [lastRankings, setLastRankings] = useState();
  const [topRankings, setTopRankings] = useState();
  const { userTopRankings, user } = useUserContext();
  const { theme } = useTheme();
  const { currentLevel, setCurrentLevel, setCurrentUniver, currentUniver } =
    useQuestionContext();

  const [tabs, setTabs] = useState({
    jediRules: {
      id: 1,
      isOpen: false,
      buttonLabel: "Regles",
      component: RulesJedi,
    },
    sithRules: {
      id: 2,
      isOpen: false,
      buttonLabel: "Regles",
      component: RulesSith,
    },
    rankingsList: {
      id: 2,
      isOpen: false,
      buttonLabel: "List",
      component: RankingsAllList,
    },
  });

  const [isRulesOpen, setIsRulesOpen] = useState(false);
  const [universQuestion, setUniversQuestion] = useState();

  useEffect(() => {
    fetchData();
    setSelectedUnivers((prevSelectedUnivers) => ({
      ...prevSelectedUnivers,
      univerTitle: currentUniver,
    }));
  }, [currentUniver]);

  const fetchData = async () => {
    try {
      const res = await axios.get(`rankings-welcome/${currentLevel}`, {
        params: {
          currentUniver: currentUniver,
        },
      });
      console.log(res.data);
      setLastRankings(res.data.latestRankings);
      setTopRankings(res.data.topRankings);
      const res3 = await axios.get(`univers`);
      setUniversQuestion(res3.data);

      setIsBusy(false);
    } catch (error) {
      console.log(error);
      setIsBusy(false);
    }
  };

  const handleUniversChange = (event, newValue) => {
    if (newValue) {
      setCurrentUniver(newValue.univerTitle);
      localStorage.setItem("UniversQuestion", newValue.univerTitle);
    } else {
      // Gérer le cas où newValue est null (champ d'autocomplétion effacé)
      setCurrentUniver(""); // ou toute autre logique que vous souhaitez appliquer
      localStorage.removeItem("UniversQuestion");
    }
  };

  const handleLevelChange = (event) => {
    setCurrentLevel(parseInt(event.target.value));
    localStorage.setItem("level", currentLevel);
  };
  const handleTabClick = (tabId) => {
    setTabs((prevTabs) => {
      const updatedTabs = { ...prevTabs };

      // Fermer tous les onglets de règles s'ils sont ouverts
      Object.keys(updatedTabs).forEach((key) => {
        if (key !== "rankingsList" && updatedTabs[key].isOpen) {
          updatedTabs[key].isOpen = false;
        }
      });

      // Ouvrir ou fermer l'onglet spécifique
      updatedTabs[tabId].isOpen = !updatedTabs[tabId].isOpen;

      // Fermer les règles si les classements sont ouverts
      if (updatedTabs[tabId].isOpen && tabId === "rankingsList") {
        setIsRulesOpen(false);
      }

      return updatedTabs;
    });
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container>
      <Box mt={5}>
        {" "}
        <Breadcrumbs aria-label="breadcrumb">
          <Link underline="hover" color="inherit" href="/holocron-trivia">
            {"Holocron-trivia"}
          </Link>
          <Link
            underline="hover"
            color="inherit"
            href="/holocron-trivia/public"
            style={{ color: "var(--primary-color)" }}
          >
            {"Partie public"}
          </Link>
        </Breadcrumbs>
      </Box>
      <Box mt={5} display={"flex"}>
        <Box
          width={{ xs: "100%", sm: "25%" }}
          sx={{
            display: { xs: "none", sm: "none", md: "block" },
          }}
        >
          <Paper
            elevation={3}
            sx={{
              border: "1px solid var(--primary-color)",
              paddingTop: 2,
              paddingLeft: 4,
              paddingRight: 4,
              paddingBottom: 1,
              marginRight: 5,
              display: "flex", // Utilisez une disposition flex
              flexDirection: "column", // Arrangez les éléments en colonne
              alignItems: "flex-end", // Alignez les éléments à l'extrémité droite
            }}
          >
            <Box style={{ textAlign: "center", width: "100%" }}>
              <Typography width={"100%"} variant="h6">
                Derniers résultats
              </Typography>
            </Box>

            <Box marginTop={2} sx={{ width: "100%" }}>
              {lastRankings.map((ranking, index) => (
                <Box
                  key={index}
                  marginTop={2}
                  display={"flex"}
                  alignItems="center"
                  justifyContent="space-evenly"
                  sx={{ width: "100%" }}
                >
                  {/* Votre contenu pour chaque élément de latestRankings ici */}
                  {/* Par exemple, pour accéder à la propriété resultQuizz, vous pouvez utiliser ranking.resultQuizz */}

                  <Box display={"flex"} sx={{ width: "100%" }}>
                    <Typography
                      variant="body2"
                      mt={1}
                      style={{ marginRight: "2px", width: "80%" }}
                    >
                      {ranking.resultQuizz} %
                    </Typography>
                    <Typography
                      variant="body2"
                      mt={1}
                      ml={1}
                      style={{
                        marginRight: "8px",
                        overflow: "hidden",
                        textOverflow: "ellipsis",
                        whiteSpace: "nowrap",
                        width: "50%", // Cacher le pseudo en format xs
                      }}
                    >
                      {ranking.userPseudo}
                    </Typography>
                  </Box>
                  <Box>
                    <Avatar
                      sx={{
                        width: 40,
                        height: 40,
                      }}
                      src={displayImage(ranking.userImage)}
                    />
                  </Box>
                </Box>
              ))}
            </Box>
          </Paper>
          <Paper
            elevation={3}
            sx={{
              border: "1px solid var(--primary-color)",
              paddingTop: 2,
              paddingLeft: 4,
              paddingRight: 4,
              paddingBottom: 1,
              marginRight: 5,
              marginTop: 3,
              display: "flex", // Utilisez une disposition flex
              flexDirection: "column", // Arrangez les éléments en colonne
              alignItems: "flex-end", // Alignez les éléments à l'extrémité droite
            }}
          >
            <Box style={{ textAlign: "center", width: "100%" }}>
              <Typography width={"100%"} variant="h6">
                {firstLetterUppercase(moment().format("MMMM"))} - Top{" "}
                {topRankings.length}
              </Typography>
            </Box>

            <Box marginTop={2} sx={{ width: "100%" }}>
              {topRankings.map((ranking, index) => (
                <Box
                  key={index}
                  marginTop={2}
                  display={"flex"}
                  alignItems="center"
                  justifyContent="space-evenly"
                  sx={{ width: "100%" }}
                >
                  {/* Votre contenu pour chaque élément de latestRankings ici */}
                  {/* Par exemple, pour accéder à la propriété resultQuizz, vous pouvez utiliser ranking.resultQuizz */}

                  <Box display={"flex"} sx={{ width: "100%" }}>
                    <Typography
                      variant="body2"
                      mt={1}
                      style={{ marginRight: "2px", width: "80%" }}
                    >
                      {ranking.resultQuizz} %
                    </Typography>
                    <Typography
                      variant="body2"
                      mt={1}
                      ml={1}
                      style={{
                        marginRight: "8px",
                        overflow: "hidden",
                        textOverflow: "ellipsis",
                        whiteSpace: "nowrap",
                        width: "50%", // Cacher le pseudo en format xs
                      }}
                    >
                      {ranking.userPseudo}
                    </Typography>
                  </Box>
                  <Box>
                    <Avatar
                      sx={{
                        width: 40,
                        height: 40,
                      }}
                      src={displayImage(ranking.userImage)}
                    />
                  </Box>
                </Box>
              ))}
            </Box>
          </Paper>
        </Box>
        <Box width={{ xs: "100%", sm: "50%" }}>
          <Box
            className="img-gp-rangk"
            style={{
              position: "relative",
              marginBottom: "20px", // Espace sous l'image
              display: "flex", // Utilisez une disposition flex
              flexDirection: "column", // Arrangez les éléments en colonne
              alignItems: "flex-end", // Alignez les éléments à l'extrémité droite
            }}
          >
            {/* Ajout du bouton blanc pour ouvrir/fermer le règlement à l'extérieur de l'image */}

            {/* Ajout du bouton blanc en bas à droite de l'image */}
            <Box style={{ position: "absolute", bottom: 10, right: 10 }}>
              <RouterLink
                to="/holocron-trivia/public/nouvelle-partie"
                style={{ textDecoration: "none" }}
              >
                <Button>Nouvelle partie</Button>
              </RouterLink>
            </Box>

            <img
              src="/images/vasVsobi.jpg"
              alt="dessin d'un duel pour lancer une partie"
              style={{
                maxWidth: "100%",
                boxShadow: "0px 0px 10px 0px var(--primary-color)",
              }}
            />
          </Box>
          <Box mt={3} display="flex" justifyContent="center">
            <LevelBox
              currentLevel={currentLevel}
              handleLevelChange={handleLevelChange}
            />
          </Box>

          <Box
            mt={2}
            style={{
              marginBottom: "10px",
              display: "flex",

              justifyContent: "space-evenly",
            }}
          >
            <WhiteButton onClick={() => setIsRulesOpen(!isRulesOpen)}>
              {isRulesOpen ? "Fermer" : "Ouvrir"} Les règles
            </WhiteButton>
            <WhiteButton onClick={() => handleTabClick("rankingsList")}>
              {tabs.rankingsList.isOpen ? "Fermer" : "Ouvrir"} Classement
            </WhiteButton>
          </Box>

          <Box>
            {isRulesOpen && (
              <Box>{theme === "light" ? <RulesJedi /> : <RulesSith />}</Box>
            )}
            {tabs.rankingsList.isOpen && <RankingsAllList />}
          </Box>
          <Box
            sx={{
              display: {
                xs: "block", // Afficher sur les écrans xs
                sm: "block", // Afficher sur les écrans sm
                md: "none", // Cacher sur les écrans md et plus grands
                lg: "none",
                xl: "none",
              },
            }}
          >
            <Paper
              elevation={3}
              sx={{
                border: "1px solid var(--primary-color)",
                paddingTop: 2,
                paddingLeft: 4,
                paddingRight: 4,
                paddingBottom: 1,

                display: "flex", // Utilisez une disposition flex
                flexDirection: "column", // Arrangez les éléments en colonne
                alignItems: "flex-end", // Alignez les éléments à l'extrémité droite
              }}
            >
              <Box style={{ textAlign: "center", width: "100%" }}>
                <Typography width={"100%"} variant="h6">
                  Derniers résultats
                </Typography>
              </Box>

              <Box marginTop={2} sx={{ width: "100%" }}>
                {lastRankings.map((ranking, index) => (
                  <Box
                    key={index}
                    marginTop={2}
                    display={"flex"}
                    alignItems="center"
                    justifyContent="space-evenly"
                    sx={{ width: "100%" }}
                  >
                    {/* Votre contenu pour chaque élément de latestRankings ici */}
                    {/* Par exemple, pour accéder à la propriété resultQuizz, vous pouvez utiliser ranking.resultQuizz */}

                    <Box display={"flex"} sx={{ width: "100%" }}>
                      <Typography
                        variant="body2"
                        mt={1}
                        style={{ marginRight: "2px", width: "80%" }}
                      >
                        {ranking.resultQuizz} %
                      </Typography>
                      <Typography
                        variant="body2"
                        mt={1}
                        ml={1}
                        style={{
                          marginRight: "8px",
                          overflow: "hidden",
                          textOverflow: "ellipsis",
                          whiteSpace: "nowrap",
                          width: "50%", // Cacher le pseudo en format xs
                        }}
                      >
                        {ranking.userPseudo}
                      </Typography>
                    </Box>
                    <Box>
                      <Avatar
                        sx={{
                          width: 40,
                          height: 40,
                        }}
                        src={displayImage(ranking.userImage)}
                      />
                    </Box>
                  </Box>
                ))}
              </Box>
            </Paper>
            <Paper
              elevation={3}
              sx={{
                border: "1px solid var(--primary-color)",
                paddingTop: 2,
                paddingLeft: 4,
                paddingRight: 4,
                paddingBottom: 1,
                marginTop: 2,
                display: "flex", // Utilisez une disposition flex
                flexDirection: "column", // Arrangez les éléments en colonne
                alignItems: "flex-end", // Alignez les éléments à l'extrémité droite
              }}
            >
              <Box style={{ textAlign: "center", width: "100%" }}>
                <Typography width={"100%"} variant="h6">
                  {firstLetterUppercase(moment().format("MMMM"))} - Top{" "}
                  {topRankings.length}
                </Typography>
              </Box>

              <Box marginTop={2} sx={{ width: "100%" }}>
                {topRankings.map((ranking, index) => (
                  <Box
                    key={index}
                    marginTop={2}
                    display={"flex"}
                    alignItems="center"
                    justifyContent="space-evenly"
                    sx={{ width: "100%" }}
                  >
                    {/* Votre contenu pour chaque élément de latestRankings ici */}
                    {/* Par exemple, pour accéder à la propriété resultQuizz, vous pouvez utiliser ranking.resultQuizz */}

                    <Box display={"flex"} sx={{ width: "100%" }}>
                      <Typography
                        variant="body2"
                        mt={1}
                        style={{ marginRight: "2px", width: "80%" }}
                      >
                        {ranking.resultQuizz} %
                      </Typography>
                      <Typography
                        variant="body2"
                        mt={1}
                        ml={1}
                        style={{
                          marginRight: "8px",
                          overflow: "hidden",
                          textOverflow: "ellipsis",
                          whiteSpace: "nowrap",
                          width: "50%", // Cacher le pseudo en format xs
                        }}
                      >
                        {ranking.userPseudo}
                      </Typography>
                    </Box>
                    <Box>
                      <Avatar
                        sx={{
                          width: 40,
                          height: 40,
                        }}
                        src={displayImage(ranking.userImage)}
                      />
                    </Box>
                  </Box>
                ))}
              </Box>
            </Paper>
          </Box>
        </Box>
        <Box
          width={{ xs: "100%", sm: "25%" }}
          sx={{
            display: { xs: "none", sm: "block" },
          }}
        >
          <Paper
            elevation={3}
            sx={{
              border: "1px solid var(--primary-color)",
              padding: 5,
              marginLeft: 5,
            }}
          >
            <Stack spacing={2} justifyContent={"center"} alignItems={"center"}>
              <RouterLink
                to="/profil" // Mettez ici le chemin vers le profil de l'utilisateur
                style={{ textDecoration: "none" }}
              >
                <Avatar
                  sx={{
                    width: 100,
                    height: 100,
                  }}
                  src={displayImage(user.userImage)}
                />
              </RouterLink>
              <Typography>{user?.userPseudo}</Typography>

              {userTopRankings?.length && userTopRankings[0]?.resultQuizz && (
                <Stack justifyContent={"center"} alignItems={"center"}>
                  <Typography variant="caption">Top score</Typography>
                  <Typography className="rankin-user-top-scrore" mt={1}>
                    {userTopRankings[0]?.resultQuizz} %
                  </Typography>
                </Stack>
              )}
            </Stack>
          </Paper>
          <Box mt={5} ml={5}>
            <Autocomplete
              value={selectedUnivers}
              onChange={(event, newValue) =>
                handleUniversChange(event, newValue)
              }
              options={universQuestion || []}
              getOptionLabel={(option) => option.univerTitle}
              isOptionEqualToValue={(option, value) =>
                option.univerTitle === value.univerTitle
              }
              renderInput={(params) => (
                <TextField
                  {...params}
                  variant="outlined"
                  label="Select Univer"
                />
              )}
            />
          </Box>
          <Box width={"100%"}></Box>
        </Box>
      </Box>
    </Container>
  );
};
export default Ranked;
