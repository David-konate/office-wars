import { useState } from "react";
import axios from "axios";

import {
  Typography,
  AppBar,
  Container,
  Box,
  Toolbar,
  Switch,
} from "@mui/material/";
import BlackButton from "./buttons/BlackButton";
import { NavLink } from "react-router-dom";
import { firstLetterUppercase, links } from "../utils";
import { useTheme } from "../context/ThemeContext";
import Logo from "./Logo";
import { useUserContext } from "../context/UserProvider"; // Importez le hook

function NavBar() {
  const [activePage, setActivePage] = useState(""); // État pour suivre la page active
  const { theme, toggleTheme } = useTheme();
  const { user } = useUserContext(); // Utilisez le hook useUserContext pour obtenir l'état d'authentification
  const handleLogout = async () => {
    try {
      await axios.post("/security/logout");
      // Effacez le token du local storage ou effectuez d'autres opérations de déconnexion nécessaires
      localStorage.removeItem("token");
      // Mettez à jour l'état d'authentification (si nécessaire)
      // ...
      // Redirigez l'utilisateur vers la page de connexion ou toute autre page appropriée
      window.location.href = "/";
    } catch (error) {
      console.error("Erreur lors de la déconnexion :", error);
    }
  };

  return (
    <AppBar position="sticky" sx={{ top: 0 }}>
      <Container maxWidth="xl" sx={{ display: "flex" }}>
        <Logo />
        <Toolbar className="toolbar" sx={{ width: "100%" }}>
          <Box
            className="Box"
            sx={{
              display: "flex",
              justifyContent: "center",
              flex: 1,
              height: "100%",
              width: "70%",
            }}
          >
            {links.map((link) =>
              (user && (link.label === "logout" || link.label === "profil")) ||
              (!user && link.label === "login") ? null : (
                <NavLink
                  className="navbar_link"
                  key={link.label}
                  to={link.label === "logout" ? "#" : link.path}
                  onClick={link.label === "logout" ? handleLogout : null}
                >
                  {firstLetterUppercase(link.label)}
                </NavLink>
              )
            )}
          </Box>

          <Box
            sx={{
              display: "flex",
              alignItems: "center",
            }}
          >
            <Typography
              variant="body2"
              sx={{ marginLeft: 2, fontSize: "0.8rem" }}
            >
              Jedi
            </Typography>
            <Switch
              checked={theme === "dark"}
              onChange={toggleTheme}
              inputProps={{ "aria-label": "toggle theme" }}
            />
            <Typography
              variant="body2"
              sx={{ marginLeft: 2, fontSize: "0.8rem" }}
            >
              Sith
            </Typography>
          </Box>
        </Toolbar>
      </Container>
    </AppBar>
  );
}

export default NavBar;
