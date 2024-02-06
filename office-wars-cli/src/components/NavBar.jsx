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

function NavBar() {
  const [activePage, setActivePage] = useState(""); // État pour suivre la page active
  const { theme, toggleTheme } = useTheme();
  const handleLinkClick = (page) => {
    setActivePage(page);
  };

  return (
    <AppBar
      position="static"
      sx={{
        backgroundColor: "var(--secondary-color)",
      }}
    >
      <Container maxWidth="lg" sx={{ display: "flex" }}>
        <Toolbar className="toolbar" sx={{ width: "100%" }}>
          <Switch
            checked={theme === "dark"}
            onChange={toggleTheme}
            inputProps={{ "aria-label": "toggle theme" }}
          />
          <Box
            className="Box"
            sx={{
              display: "flex",
              justifyContent: "center",
              flex: 1,
              height: "100%",
            }}
          >
            {links.map((link) => {
              return (
                <NavLink
                  className="navbar_link"
                  key={link.label}
                  to={link.path}
                >
                  {firstLetterUppercase(link.label)}
                </NavLink>
              );
            })}
          </Box>
          <Box>
            <BlackButton>Nous contacter</BlackButton>
          </Box>
        </Toolbar>
      </Container>
    </AppBar>
  );
}

export default NavBar;
