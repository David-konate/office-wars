// UpdateEventForm.js
import React, { useState, useEffect } from "react";
import { TextField, Button, Typography, Container } from "@mui/material";
import axios from "axios";

const UpdateEventForm = ({ eventId }) => {
  const [formData, setFormData] = useState({
    eventName: "",
    eventDescription: "",
    dateTime: "",
  });

  useEffect(() => {
    // Récupérer les données de l'événement à mettre à jour à partir de l'API
    const fetchData = async () => {
      try {
        const response = await axios.get(`/api/events/${eventId}`);
        setFormData(response.data);
      } catch (error) {
        console.error("Erreur lors de la récupération des données :", error);
      }
    };

    fetchData();
  }, [eventId]);

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.put(`/api/events/${eventId}`, formData);
      console.log("Réponse du serveur :", response.data);

      // Ajoutez ici des actions supplémentaires si nécessaire
    } catch (error) {
      console.error("Erreur lors de la mise à jour de l'événement :", error);
    }
  };

  return (
    <Container maxWidth="sm">
      <Typography variant="h4" align="center" gutterBottom>
        Mettre à jour l'événement
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

        <Button type="submit" variant="contained" color="primary" fullWidth>
          Mettre à jour l'événement
        </Button>
      </form>
    </Container>
  );
};

export default UpdateEventForm;
