// VotrePage.js

import LoginFormComponent from "../components/LoginFormComponent";
import RegisterFormComponent from "../components/RegisterFormComponent";
import React, { useState } from "react";
import { Box, Container } from "@mui/material";
import WhiteButton from "../components/buttons/WhiteButton";

const LoginForm = () => {
  const [tabSelected, setTabSelected] = useState("loginForm");
  return (
    <Container
      style={{
        display: "flex",
        flexDirection: "column",
        alignItems: "center",
        margin: "1rem auto",
      }}
    >
      <Box>
        <WhiteButton
          onClick={() => setTabSelected("loginForm")}
          isActive={tabSelected === "loginForm"}
          style={{ margin: "0 8px 2px 0" }}
        >
          Connexion
        </WhiteButton>

        <WhiteButton
          onClick={() => setTabSelected("registerForm")}
          isActive={tabSelected === "registerForm"}
          style={{ margin: "0 0 2px 0" }}
        >
          Inscription
        </WhiteButton>
      </Box>

      <Box>
        {tabSelected === "loginForm" && <LoginFormComponent />}
        {tabSelected === "registerForm" && <RegisterFormComponent />}
      </Box>
    </Container>
  );
};

export default LoginForm;
