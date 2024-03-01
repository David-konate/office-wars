import React from "react";
import axios from "axios";
import {
  Typography,
  AppBar,
  Container,
  Box,
  Toolbar,
  Switch,
  Hidden,
  Drawer,
  List,
  ListItem,
  ListItemText,
  IconButton,
} from "@mui/material/";
import { NavLink, useNavigate } from "react-router-dom";
import MenuIcon from "@mui/icons-material/Menu";
import { firstLetterUppercase, linksLogged, linksUnlogged } from "../utils";
import { useTheme } from "../context/ThemeContext";
import Logo from "./Logo";
import { useUserContext } from "../context/UserProvider";

function NavBar() {
  const navigate = useNavigate();
  const { theme, toggleTheme } = useTheme();
  const { user, setUser } = useUserContext();
  const [drawerOpen, setDrawerOpen] = React.useState(false);

  const handleDrawerOpen = () => {
    setDrawerOpen(true);
  };

  const handleDrawerClose = () => {
    setDrawerOpen(false);
  };

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

      setUser(null);
      localStorage.removeItem("token");
      navigate("/login");
    } catch (error) {
      console.error("Erreur lors de la déconnexion :", error);
    }
  };

  return (
    <React.Fragment>
      <AppBar position="sticky" sx={{ top: 0 }}>
        <Container maxWidth={"xl"}>
          <Toolbar sx={{ display: "flex", justifyContent: "space-between" }}>
            <IconButton
              color="inherit"
              edge="start"
              onClick={handleDrawerOpen}
              sx={{ display: { xs: "block", sm: "none" } }}
            >
              <MenuIcon />
            </IconButton>

            <Hidden smDown>
              <Logo />
            </Hidden>
            <Box
              sx={{
                display: "flex",
                justifyContent: "center",
                height: "100%",
              }}
            >
              {(user ? linksLogged : linksUnlogged).map((link) => (
                <Hidden smDown key={link.label}>
                  <NavLink
                    className="navbar_link"
                    to={link.label === "logout" ? "#" : link.path}
                    onClick={link.label === "logout" ? handleLogout : null}
                  >
                    {firstLetterUppercase(link.label)}
                  </NavLink>
                </Hidden>
              ))}
            </Box>

            <Box
              sx={{
                display: "flex",
                alignItems: "center",
              }}
            >
              <Hidden smDown>
                <Typography variant="body2" sx={{ fontSize: "0.8rem" }}>
                  Jedi
                </Typography>
              </Hidden>

              <Switch
                checked={theme === "dark"}
                onChange={toggleTheme}
                inputProps={{ "aria-label": "toggle theme" }}
              />
              <Hidden smDown>
                <Typography variant="body2" sx={{ fontSize: "0.8rem" }}>
                  Sith
                </Typography>
              </Hidden>
            </Box>
          </Toolbar>
        </Container>
      </AppBar>

      <Drawer anchor="left" open={drawerOpen} onClose={handleDrawerClose}>
        <List>
          {(user ? linksLogged : linksUnlogged).map((link) => (
            <ListItem
              sx={{
                color: "var(--color-text)",
                ":hover": {
                  color: "var(--primary-color)", // Couleur pendant le survol
                  backgroundColor: "var(--other-color)", // Soulignement pendant le survol
                },
                "&.active": {
                  color: "var(--primary-color)", // Couleur lorsque le lien est actif
                  fontWeight: "bold", // Texte en gras lorsque le lien est actif
                },
              }}
              key={link.label}
              component={NavLink}
              to={link.label === "logout" ? "#" : link.path}
              onClick={
                link.label === "logout" ? handleLogout : handleDrawerClose
              }
            >
              <ListItemText
                sx={{ color: "var( --color-text)" }}
                primary={firstLetterUppercase(link.label)}
              />
            </ListItem>
          ))}
        </List>
      </Drawer>
    </React.Fragment>
  );
}

export default NavBar;
