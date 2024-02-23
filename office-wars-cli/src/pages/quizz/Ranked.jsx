import {
  Breadcrumbs,
  CircularProgress,
  Container,
  Link,
  Paper,
  Typography,
} from "@mui/material";
import { Box } from "@mui/system";
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
import { firstLetterUppercase } from "../../utils";

const Ranked = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [lastRankings, setLastRankings] = useState();
  const [topRankings, setTopRankings] = useState();
  const { userTopRankings, user } = useUserContext();
  const { theme } = useTheme();

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

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`rankings-welcome`);
      setLastRankings(res.data.latestRankings);
      setTopRankings(res.data.topRankings);

      console.log("rank", res.data);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
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
        <Box width={"25%"}>
          <Paper
            elevation={3}
            sx={{
              border: "1px solid var(--primary-color)",
              paddingTop: 2,
              paddingLeft: 4,
              paddingRight: 4,
              paddingBottom: 1,
              marginRight: 5,
            }}
          >
            <Box style={{ textAlign: "center" }}>
              <Typography variant="h6">Derniers résultats</Typography>
            </Box>

            <Box marginTop={2}>
              {lastRankings.map((ranking, index) => (
                <Box
                  marginTop={2}
                  display={"flex"}
                  key={index}
                  alignItems="center"
                >
                  {/* Votre contenu pour chaque élément de latestRankings ici */}
                  {/* Par exemple, pour accéder à la propriété resultQuizz, vous pouvez utiliser ranking.resultQuizz */}
                  <Box display="flex" alignItems="center">
                    <Typography
                      width={"40%"}
                      variant="body2"
                      mt={1}
                      style={{ marginRight: "2px" }}
                    >
                      {ranking.resultQuizz} %
                    </Typography>
                    <Typography
                      width={"40%"}
                      variant="body2"
                      mt={1}
                      style={{
                        marginRight: "8px",
                        overflow: "hidden",
                        textOverflow: "ellipsis",
                        whiteSpace: "nowrap",
                      }}
                    >
                      {ranking.userPseudo}
                    </Typography>
                    <Box
                      style={{
                        borderRadius: "50%",
                        overflow: "hidden",
                        maxWidth: "20%",
                        margin: "0 auto", // Pour centrer horizontalement
                      }}
                    >
                      <img
                        src={`http://127.0.0.1:8000/storage/uploads/${ranking.userImage}`}
                        alt="User Avatar"
                        style={{
                          maxWidth: "100%",
                          display: "block", // Pour éviter l'espace sous l'image
                        }}
                      />
                    </Box>
                  </Box>
                </Box>
              ))}
            </Box>
          </Paper>
          <Paper
            elevation={3}
            sx={{
              marginTop: 3,
              border: "1px solid var(--primary-color)",
              paddingTop: 2,
              paddingLeft: 4,
              paddingRight: 4,
              paddingBottom: 1,
              marginRight: 5,
            }}
          >
            <Box style={{ textAlign: "center" }}>
              <Typography variant="h6">
                {firstLetterUppercase(moment().format("MMMM"))}
              </Typography>
            </Box>

            <Box marginTop={2}>
              {topRankings.map((ranking, index) => (
                <Box
                  marginTop={2}
                  display={"flex"}
                  key={index}
                  alignItems="center"
                >
                  {/* Votre contenu pour chaque élément de latestRankings ici */}
                  {/* Par exemple, pour accéder à la propriété resultQuizz, vous pouvez utiliser ranking.resultQuizz */}
                  <Box display="flex" alignItems="center">
                    <Typography
                      width={"40%"}
                      variant="body2"
                      mt={1}
                      style={{ marginRight: "2px" }}
                    >
                      {ranking.resultQuizz} %
                    </Typography>
                    <Typography
                      width={"40%"}
                      variant="body2"
                      mt={1}
                      style={{
                        marginRight: "8px",
                        overflow: "hidden",
                        textOverflow: "ellipsis",
                        whiteSpace: "nowrap",
                      }}
                    >
                      {ranking.userPseudo}
                    </Typography>
                    <Box
                      style={{
                        borderRadius: "50%",
                        overflow: "hidden",
                        maxWidth: "20%",
                        margin: "0 auto", // Pour centrer horizontalement
                      }}
                    >
                      <img
                        src={`http://127.0.0.1:8000/storage/uploads/${ranking.userImage}`}
                        alt="User Avatar"
                        style={{
                          maxWidth: "100%",
                          display: "block", // Pour éviter l'espace sous l'image
                        }}
                      />
                    </Box>
                  </Box>
                </Box>
              ))}
            </Box>
          </Paper>
        </Box>
        <Box width={"50%"}>
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
                <WhiteButton>Nouvelle partie</WhiteButton>
              </RouterLink>
            </Box>

            <img
              src="/images/vasVsobi.jpg"
              alt=""
              style={{
                maxWidth: "100%",
                boxShadow: "0px 0px 10px 0px var(--primary-color)",
              }}
            />
          </Box>
          <Box
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
              {tabs.rankingsList.isOpen ? "Fermer" : "Ouvrir"} Classements
            </WhiteButton>
          </Box>

          <Box>
            {isRulesOpen && (
              <Box>{theme === "light" ? <RulesJedi /> : <RulesSith />}</Box>
            )}
            {tabs.rankingsList.isOpen && <RankingsAllList />}
          </Box>
        </Box>

        <Box width={"25%"}>
          <Paper
            elevation={3}
            sx={{
              border: "1px solid var(--primary-color)",
              padding: 5,
              marginLeft: 5,
            }}
          >
            <Box
              className="img-user-holocron"
              style={{
                borderRadius: "50%",
                overflow: "hidden",
                width: "100px",
                height: "100px",
                margin: "auto",
              }}
            >
              <img
                src={`http://127.0.0.1:8000/storage/uploads/${user.userImage}`}
                alt="Avatar"
                style={{ width: "100%", height: "100%", objectFit: "cover" }}
              />
            </Box>
            <Box mt={2} textAlign={"center"}>
              <Typography>{user.userPseudo}</Typography>
            </Box>
            <Box mt={2} textAlign={"center"}>
              <Typography variant="caption">Top score</Typography>
              <Box>
                <Typography className="rankin-user-top-scrore" mt={1}>
                  {userTopRankings[0].resultQuizz} %{" "}
                </Typography>
              </Box>
            </Box>
          </Paper>
        </Box>
      </Box>
    </Container>
  );
};
export default Ranked;
