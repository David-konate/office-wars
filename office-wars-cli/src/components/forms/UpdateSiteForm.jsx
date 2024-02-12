// UpdateSiteForm.js
import React, { useState, useEffect } from "react";
import { TextField, Button } from "@material-ui/core";
import axios from "axios";

const UpdateSiteForm = ({ siteId }) => {
  const [formData, setFormData] = useState({
    siteName: "",
    siteDescription: "",
    // Autres champs nécessaires
  });

  useEffect(() => {
    // Chargez les données du site à mettre à jour
    const fetchSiteData = async () => {
      try {
        const response = await axios.get(`/api/sites/${siteId}`);
        setFormData(response.data);
      } catch (error) {
        console.error("Erreur lors du chargement des données du site:", error);
      }
    };

    fetchSiteData();
  }, [siteId]);

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.put(`/api/sites/${siteId}`, formData);
      console.log("Site mis à jour avec succès:", response.data);
    } catch (error) {
      console.error("Erreur lors de la mise à jour du site:", error);
    }
  };

  return (
    <form onSubmit={handleSubmit}>
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
        Mettre à jour le site
      </Button>
    </form>
  );
};

export default UpdateSiteForm;
