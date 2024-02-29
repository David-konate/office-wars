import axios from "axios";

import {
  Typography,
  AppBar,
  Container,
  Box,
  Toolbar,
  Switch,
  Hidden,
} from "@mui/material/";
import { NavLink, useNavigate } from "react-router-dom";
import { firstLetterUppercase, linksLogged, linksUnlogged } from "../utils";
import { useTheme } from "../context/ThemeContext";
import Logo from "./Logo";
import { useUserContext } from "../context/UserProvider"; // Importez le hook

function NavBar() {
  const navigate = useNavigate();
  const { theme, toggleTheme } = useTheme();
  const { user, setUser } = useUserContext(); // Utilisez le hook useUserContext pour obtenir l'état d'authentification

  const handleLogout = async () => {
    try {
      await axios.post(
        "/security/logout",
        {},
        {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        }
      );

      // Réinitialiser l'utilisateur à null
      setUser(null);

      localStorage.removeItem("token");
      navigate("/login");
    } catch (error) {
      console.error("Erreur lors de la déconnexion :", error);
    }
  };

  return (
    <AppBar position="sticky" sx={{ top: 0 }}>
      <Container maxWidth="xl" sx={{ display: "flex" }}>
        <Hidden smDown>
          <Logo />
        </Hidden>
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
            {(user ? linksLogged : linksUnlogged).map((link) => (
              <NavLink
                className="navbar_link"
                key={link.label}
                to={link.label === "logout" ? "#" : link.path}
                onClick={link.label === "logout" ? handleLogout : null}
              >
                {firstLetterUppercase(link.label)}
              </NavLink>
            ))}
          </Box>

          <Box
            sx={{
              display: "flex",
              alignItems: "center",
            }}
          >
            <Hidden smDown>
              {" "}
              <Typography
                variant="body2"
                sx={{ marginLeft: 2, fontSize: "0.8rem" }}
              >
                Jedi
              </Typography>
            </Hidden>

            <Switch
              checked={theme === "dark"}
              onChange={toggleTheme}
              inputProps={{ "aria-label": "toggle theme" }}
            />
            <Hidden smDown>
              {" "}
              <Typography
                variant="body2"
                sx={{ marginLeft: 2, fontSize: "0.8rem" }}
              >
                Sith
              </Typography>
            </Hidden>
          </Box>
        </Toolbar>
      </Container>
    </AppBar>
  );
}

export default NavBar;
