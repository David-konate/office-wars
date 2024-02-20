// src/components/CreatePlanetForm.js

import React, { useState } from "react";
import axios from "axios";
import {
  TextField,
  Button,
  Typography,
  Container,
  InputLabel,
  Input,
} from "@mui/material";
import { useNavigate } from "react-router-dom";
import MessageDialog from "../message/MessageDialog";

const CreatePlanetForm = () => {
  const [formData, setFormData] = useState({
    planetName: "",
    planetDescription: "",
    galacticCoordinates: "",
    population: "",
  });

  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleDialogClose = () => {
    setOpenDialog(false);
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    const formDat = new FormData(e.target);
    try {
      const response = await axios.post(`planets`, formDat);
      // Si la requête est réussie, afficher le dialogue avec le message de retour
      setDialogTitle("Succès");
      setDialogMessage(response.data.message);
      setOpenDialog(true);
    } catch (error) {
      // En cas d'erreur, afficher le dialogue avec le message d'erreur
      setDialogTitle("Erreur");
      setDialogMessage(error.response.data.message);
      setOpenDialog(true);
    }
  };

  return (
    <Container maxWidth="sm">
      <Typography variant="h4" align="center" gutterBottom>
        Créer une planète
      </Typography>
      <form onSubmit={handleSubmit}>
        <TextField
          style={{ margin: 4 }}
          label="Nom de la planète"
          variant="outlined"
          fullWidth
          margin="none" // Mettez à jour cette ligne
          name="planetName"
          value={formData.planetName}
          onChange={handleChange}
          required
        />

        <TextField
          style={{ margin: 4 }}
          label="Description de la planète"
          variant="outlined"
          fullWidth
          margin="none" // Mettez à jour cette ligne
          name="planetDescription"
          multiline
          rows={4}
          value={formData.planetDescription}
          onChange={handleChange}
          required
        />
        <TextField
          style={{ margin: 4 }}
          label="Coordonnées galactiques"
          variant="outlined"
          fullWidth
          margin="none" // Mettez à jour cette ligne
          name="galacticCoordinates"
          value={formData.galacticCoordinates}
          onChange={handleChange}
          required
        />
        <TextField
          style={{ margin: 4 }}
          label="Population"
          variant="outlined"
          fullWidth
          margin="none" // Mettez à jour cette ligne
          name="population"
          type="number"
          value={formData.population}
          onChange={handleChange}
          required
        />

        <InputLabel style={{ margin: 4 }} htmlFor="imagePlanet">
          Image de la planète
        </InputLabel>
        <Input
          style={{ margin: 4, marginBottom: 5 }}
          type="file"
          id="imagePlanet"
          name="imagePlanet"
          onChange={handleChange}
          accept="image/*"
          fullWidth
          margin="none"
        />

        <Button
          style={{ margin: 5 }}
          type="submit"
          variant="contained"
          color="primary"
          fullWidth
        >
          Créer la planète
        </Button>
      </form>

      <MessageDialog
        open={openDialog}
        onClose={handleDialogClose}
        title={dialogTitle}
        message={dialogMessage}
      />
    </Container>
  );
};

export default CreatePlanetForm;
