import { useState } from "react";
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

function NavBar({ isAuthenticated }) {
  const [activePage, setActivePage] = useState(""); // État pour suivre la page active
  const { theme, toggleTheme } = useTheme();
  const handleLinkClick = (page) => {
    setActivePage(page);
  };

  return (
    <AppBar position="static">
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
              // Vérifiez si l'utilisateur est connecté et que le lien est "login" ou "logout"
              // avant de l'afficher dans la barre de navigation
              (isAuthenticated && link.label === "logout") ||
              (!isAuthenticated && link.label === "login") ? null : (
                <NavLink
                  className="navbar_link"
                  key={link.label}
                  to={link.path}
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
