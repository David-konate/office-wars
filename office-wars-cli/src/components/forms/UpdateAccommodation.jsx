import React, { useState, useEffect } from "react";
import { TextField, Button, Typography, Container } from "@mui/material";

const AccomodationUpdateForm = ({ accomodation, onSubmit }) => {
  const [formData, setFormData] = useState({
    accomodationName: "",
    accomodationType: "",
    numberOfRoom: 0,
    rates: 0,
  });

  useEffect(() => {
    setFormData({
      accomodationName: accomodation.accomodationName,
      accomodationType: accomodation.accomodationType,
      numberOfRoom: accomodation.numberOfRoom,
      rates: accomodation.rates,
    });
  }, [accomodation]);

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    onSubmit(formData);
  };

  return (
    <Container maxWidth="sm">
      <Typography variant="h4" align="center" gutterBottom>
        Modifier l'hébergement
      </Typography>
      <form onSubmit={handleSubmit}>
        <TextField
          label="Nom de l'hébergement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="accomodationName"
          value={formData.accomodationName}
          onChange={handleChange}
          required
        />
        <TextField
          label="Type d'hébergement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="accomodationType"
          value={formData.accomodationType}
          onChange={handleChange}
          required
        />
        <TextField
          label="Nombre de chambres"
          variant="outlined"
          fullWidth
          margin="normal"
          type="number"
          name="numberOfRoom"
          value={formData.numberOfRoom}
          onChange={handleChange}
          required
        />
        <TextField
          label="Tarifs"
          variant="outlined"
          fullWidth
          margin="normal"
          type="number"
          name="rates"
          value={formData.rates}
          onChange={handleChange}
          required
        />

        <Button type="submit" variant="contained" color="primary" fullWidth>
          Enregistrer les modifications
        </Button>
      </form>
    </Container>
  );
};

export default AccomodationUpdateForm;
