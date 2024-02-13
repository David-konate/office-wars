import React from "react";
import { Container, Typography, TextField, Button, Box } from "@mui/material";
import { useNavigate } from "react-router-dom";
import axios from "axios";
import { useUserContext } from "../context/UserProvider";

const LoginForm = () => {
  const { setUser } = useUserContext();
  const navigate = useNavigate();

  const handleSubmit = async (event) => {
    event.preventDefault();
    const formData = new FormData(event.target);

    try {
      const response = await axios.post("/security/login", formData);

      console.log(response.data);
      localStorage.setItem("token", response.data.token);
      setUser(response.data.user);
      navigate("/");
    } catch (error) {
      console.error(error.response?.data || "Erreur lors de la connexion.");
      // Ajoutez ici une logique pour gérer les erreurs côté client
    }
  };

  return (
    <Container component="main" maxWidth="xs">
      <Box
        sx={{
          marginTop: 8,
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
        }}
      >
        <Typography component="h1" variant="h5">
          Connexion
        </Typography>
        <Box component="form" onSubmit={handleSubmit} noValidate sx={{ mt: 1 }}>
          <TextField
            margin="normal"
            required
            fullWidth
            id="email"
            label="Adresse e-email"
            name="email"
            autoComplete="email"
            autoFocus
          />
          <TextField
            margin="normal"
            required
            fullWidth
            name="password"
            label="Mot de passe"
            type="password"
            id="password"
            autoComplete="current-password"
          />

          <Button
            type="submit"
            fullWidth
            variant="contained"
            sx={{ mt: 3, mb: 2 }}
          >
            Connexion
          </Button>
        </Box>
      </Box>
    </Container>
  );
};

export default LoginForm;
