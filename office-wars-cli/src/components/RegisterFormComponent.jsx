// RegisterFormComponent.js

import React, { useState } from "react";
import { Container, Typography, TextField, Button, Box } from "@mui/material";
import axios from "axios";
import MessageDialog from "./message/MessageDialog";
import { useNavigate } from "react-router-dom";
import { useUserContext } from "../context/UserProvider";

const RegisterFormComponent = () => {
  const { setUser } = useUserContext();
  const navigate = useNavigate();
  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");

  const handleSubmit = async (event) => {
    event.preventDefault();
    const formData = new FormData(event.target);
    const password = formData.get("password");
    const confirmPassword = formData.get("confirmPassword");

    // Vérification si les mots de passe correspondent
    if (password !== confirmPassword) {
      setDialogTitle("Erreur");
      setDialogMessage("Les mots de passe ne correspondent pas.");
      setOpenDialog(true);
      return;
    }

    try {
      const response = await axios.post("/security/register", formData);

      console.log(response.data);
      localStorage.setItem("token", response.data.token);
      setUser(response.data.user);
      setDialogTitle("Succès");
      setDialogMessage("Inscription réussie");
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(
        error.response?.data.message || "Erreur lors de l'inscription."
      );
      console.error(error.response?.data || "Erreur lors de l'inscription.");
      // Ajoutez ici une logique pour gérer les erreurs côté client
    } finally {
      setOpenDialog(true); // Exécuté après le bloc try-catch, indépendamment du succès ou de l'échec
      navigate("/"); // Redirection vers la page d'accueil
    }
  };

  const handleDialogClose = () => {
    setOpenDialog(false);
  };

  return (
    <Container component="main" maxWidth="xs">
      <Box
        sx={{
          marginTop: 3,
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
        }}
      >
        <Typography component="h1" variant="h5">
          Inscription
        </Typography>
        <Box component="form" onSubmit={handleSubmit} noValidate sx={{ mt: 1 }}>
          <TextField
            margin="normal"
            required
            fullWidth
            id="userPseudo"
            label="Pseudo"
            name="userPseudo"
          />
          <TextField
            margin="normal"
            required
            fullWidth
            id="userLastName"
            label="Nom"
            name="userLastName"
          />
          <TextField
            margin="normal"
            required
            fullWidth
            id="userFirstName"
            label="Prénom"
            name="userFirstName"
          />
          <TextField
            margin="normal"
            required
            fullWidth
            id="email"
            label="Adresse e-email"
            name="email"
            autoComplete="email"
          />
          <TextField
            margin="normal"
            required
            fullWidth
            name="password"
            label="Mot de passe"
            type="password"
            id="password"
            autoComplete="new-password"
          />
          <TextField
            margin="normal"
            required
            fullWidth
            name="confirmPassword"
            label="Confirmer le mot de passe"
            type="password"
            id="confirmPassword"
            autoComplete="new-password"
          />

          <Button
            type="submit"
            fullWidth
            variant="contained"
            sx={{ color: "var(--color-text)", mt: 3, mb: 2 }}
          >
            S'inscrire
          </Button>
        </Box>
      </Box>
      <MessageDialog
        open={openDialog}
        onClose={handleDialogClose}
        title={dialogTitle}
        message={dialogMessage}
      />
    </Container>
  );
};

export default RegisterFormComponent;
