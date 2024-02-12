// src/components/CreateEventForm.js

import React, { useState } from "react";
import {
  TextField,
  Button,
  Typography,
  Container,
  Input,
  InputLabel,
  InputAdornment,
  Box,
} from "@mui/material";
import PhotoCamera from "@mui/icons-material/PhotoCamera";
const CreateEventForm = () => {
  const [formData, setFormData] = useState({
    eventName: "",
    eventDescription: "",
    dateTime: "",
  });

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    // Ajoutez ici la logique pour envoyer les données au backend (API Laravel)
    console.log("Formulaire soumis avec les données :", formData);
  };

  return (
    <Container maxWidth="sm">
      <Typography variant="h4" align="center" gutterBottom>
        Créer un événement
      </Typography>
      <form onSubmit={handleSubmit}>
        <TextField
          label="Nom de l'événement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="eventName"
          value={formData.eventName}
          onChange={handleChange}
          required
        />
        <TextField
          label="Description de l'événement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="eventDescription"
          multiline
          rows={4}
          value={formData.eventDescription}
          onChange={handleChange}
          required
        />
        <TextField
          label="Date et heure de l'événement"
          type="datetime-local"
          variant="outlined"
          fullWidth
          margin="normal"
          name="dateTime"
          value={formData.dateTime}
          onChange={handleChange}
          required
        />
        {/* Autres champs du formulaire si nécessaire */}{" "}
        <InputLabel htmlFor="image">Image</InputLabel>
        <Input
          type="file"
          id="image"
          name="image"
          onChange={handleChange}
          endAdornment={
            <InputAdornment position="end">
              <PhotoCamera />
            </InputAdornment>
          }
        />
        <Box mt={3}>
          <Button s type="submit" variant="contained" color="primary" fullWidth>
            Créer l'événement
          </Button>
        </Box>
      </form>
    </Container>
  );
};

export default CreateEventForm;
