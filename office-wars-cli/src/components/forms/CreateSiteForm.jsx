// CreateSiteForm.js
import React, { useState } from "react";
import { TextField, Button, Typography } from "@mui/material";
import axios from "axios";

const CreateSiteForm = () => {
  const [formData, setFormData] = useState({
    siteName: "",
    siteDescription: "",
    // Autres champs nécessaires
  });

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.post("/api/sites", formData);
      console.log("Site créé avec succès:", response.data);
    } catch (error) {
      console.error("Erreur lors de la création du site:", error);
    }
  };

  return (
    <form onSubmit={handleSubmit}>
      <Typography variant="h4" align="center" gutterBottom>
        Créer un événement
      </Typography>
      <TextField
        label="Nom du site"
        name="siteName"
        value={formData.siteName}
        onChange={handleChange}
        fullWidth
      />
      <TextField
        label="Description du site"
        name="siteDescription"
        value={formData.siteDescription}
        onChange={handleChange}
        fullWidth
      />
      {/* Ajoutez d'autres champs ici */}
      <Button type="submit" variant="contained" color="primary">
        Créer le site
      </Button>
    </form>
  );
};

export default CreateSiteForm;
