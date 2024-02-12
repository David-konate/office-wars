// src/components/CreatePlanetForm.js

import React, { useEffect, useState } from "react";
import axios from "axios";
import {
  TextField,
  Button,
  Typography,
  Container,
  InputLabel,
  Input,
  MenuItem,
  Select,
} from "@mui/material";
import { margin } from "@mui/system";

const CreatePlanetForm = () => {
  const [isBusy, setIsBusy] = useState(true);

  const [sites, setSites] = useState([]);
  const [events, setEvents] = useState([]);
  const [accomodations, setAccomodations] = useState([]);
  const [formData, setFormData] = useState({
    planetName: "",
    planetDescription: "",
    galacticCoordinates: "",
    population: "",
    selectedSite: [], // Utilisez un tableau pour la sélection multiple
    selectedEvent: [], // Utilisez un tableau pour la sélection multiple
    selectedAccommodation: [], // Utilisez un tableau pour la sélection multiple
  });
  useEffect(() => {
    fetchData();
  }, []); //

  const fetchData = async () => {
    try {
      // Requête Axios pour les sites
      const sitesResponse = await axios.get(`sites`);
      console.log(sitesResponse);
      setSites(sitesResponse.data);

      // Requête Axios pour les hébergements
      const accommodationsResponse = await axios.get(`accomodations`);
      setAccomodations(accommodationsResponse.data);

      // Requête Axios pour les événements
      const eventsResponse = await axios.get(`events`);
      setEvents(eventsResponse.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      // Effectuer la requête POST vers l'URL de création de planète dans votre backend Laravel
      const response = await axios.post(`planets`, formData);

      // Vérifier la réponse du backend (vous pouvez ajuster cela selon votre API)
      if (response.status === 200) {
        console.log("Planète créée avec succès !", response.data);
        // Vous pouvez également effectuer des actions supplémentaires après la création réussie
      } else {
        console.error(
          "Erreur lors de la création de la planète :",
          response.data
        );
      }
    } catch (error) {
      console.error("Erreur lors de la requête POST :", error);
    }
  };
  console.log(sites);
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

        <InputLabel htmlFor="selectedSite">
          Sélectionnez un/des site(s)
        </InputLabel>
        <Select
          style={{ margin: 4 }}
          id="selectedSite"
          name="selectedSite"
          value={formData.selectedSite}
          onChange={handleChange}
          fullWidth
          multiple
        >
          {sites.map((site) => (
            <MenuItem key={site.id} value={site.id}>
              {site.siteName}
            </MenuItem>
          ))}
        </Select>

        {/* Select pour les événements */}
        <InputLabel htmlFor="selectedEvent">
          Sélectionnez un/des événement(s)
        </InputLabel>
        <Select
          style={{ margin: 4 }}
          id="selectedEvent"
          name="selectedEvent"
          value={formData.selectedEvent}
          onChange={handleChange}
          fullWidth
          multiple
        >
          {events.map((event) => (
            <MenuItem key={event.id} value={event.id}>
              {event.eventName}
            </MenuItem>
          ))}
        </Select>

        {/* Select pour les hébergements */}
        <InputLabel htmlFor="selectedAccommodation">
          Sélectionnez un/des hébergement(s)
        </InputLabel>
        <Select
          style={{ margin: 4 }}
          id="selectedAccommodation"
          name="selectedAccommodation"
          value={formData.selectedAccommodation}
          onChange={handleChange}
          fullWidth
          multiple
        >
          {accomodations.map((accommodation) => (
            <MenuItem key={accommodation.id} value={accommodation.id}>
              {accommodation.accomodationName}
            </MenuItem>
          ))}
        </Select>
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
    </Container>
  );
};

export default CreatePlanetForm;
