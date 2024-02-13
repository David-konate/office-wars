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
  CircularProgress,
  Box,
} from "@mui/material";
import ConfirmationDialog from "../message/messageValidate";

const UpdatePlanetForm = ({ planetId }) => {
  const [isBusy, setIsBusy] = useState(true);

  const [isConfirmationDialogOpen, setIsConfirmationDialogOpen] =
    useState(false);

  const [sites, setSites] = useState([]);
  const [events, setEvents] = useState([]);
  const [accomodations, setAccomodations] = useState([]);
  const [formData, setFormData] = useState({
    planetName: "",
    planetDescription: "",
    galacticCoordinates: "",
    population: "",
    selectedSite: [],
    selectedEvent: [],
    selectedAccommodation: [],
  });
  const [image, setImage] = useState(null);

  useEffect(() => {
    fetchPlanetData();
    fetchData();
  }, [planetId]);

  const fetchData = async () => {
    try {
      const planetResponse = await axios.get(`planets/${planetId}`);
      const planetData = planetResponse.data.data;

      setFormData({
        planetName: planetData.planetName,
        planetDescription: planetData.planetDescription,
        galacticCoordinates: planetData.galacticCoordinates,
        population: planetData.population,
        selectedSite: planetData.sites.map((site) => site.id),
        selectedEvent: planetData.events.map((event) => event.id),
        selectedAccommodation: planetData.accommodations.map(
          (accommodation) => accommodation.id
        ),
      });

      setSites(planetData.sites);
      setAccomodations(planetData.accommodations);
      setEvents(planetData.events);

      setImage(
        planetData.imagePlanet
          ? `http://127.0.0.1:8000/storage/uploads/${planetData.imagePlanet}`
          : null
      );
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const fetchPlanetData = async () => {
    try {
      const sitesResponse = await axios.get(`sites`);
      const accommodationsResponse = await axios.get(`accomodations`);
      const eventsResponse = await axios.get(`events`);

      setSites(sitesResponse.data);
      setAccomodations(accommodationsResponse.data);
      setEvents(eventsResponse.data);
    } catch (error) {
      console.error(error);
    }
  };
  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };
  const handleImageChange = (e) => {
    const file = e.target.files[0];
    setImage(URL.createObjectURL(file));
  };

  const handleSiteChange = (event) => {
    setFormData((prevFormData) => ({
      ...prevFormData,
      selectedSite: [event.target.value],
    }));
  };

  const handleEventChange = (event) => {
    setFormData((prevFormData) => ({
      ...prevFormData,
      selectedEvent: [event.target.value],
    }));
  };

  const handleAccommodationChange = (event) => {
    setFormData((prevFormData) => ({
      ...prevFormData,
      selectedAccommodation: [event.target.value],
    }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);

    try {
      const response = await axios.post(`planets/${planetId}`, formData);
      console.log(response.data.message);

      // Ouvrir la boîte de dialogue en cas de succès
      setIsConfirmationDialogOpen(true);
    } catch (error) {
      console.error("Erreur lors de la requête POST :", error);
    }
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container maxWidth="sm">
      <Box m={5}>
        <ConfirmationDialog
          open={isConfirmationDialogOpen}
          onClose={() => setIsConfirmationDialogOpen(false)}
          onConfirm={() => {
            setIsConfirmationDialogOpen(false);
          }}
          title="Confirmation"
          message="Votre planète a été mise à jour avec succès."
        />
        <Typography variant="h4" align="center" gutterBottom>
          Mettre à jour la planète {formData.planetName}
        </Typography>
      </Box>
      <Box
        mt={5}
        mb={5}
        className="img-planet-up"
        sx={{ maxWidth: "65%", maxHeight: "65%", margin: "auto" }}
      >
        <img
          style={{
            borderRadius: "10px",
            width: "auto",
            height: "auto",
            maxWidth: "100%",
            maxHeight: "100%",
            display: "block",
            margin: "auto", // Centrer l'image horizontalement
          }}
          src={image || `http://127.0.0.1:8000/storage/images/notImage.png`}
          alt=""
        />
      </Box>
      <Box mt={5}>
        <form onSubmit={handleSubmit}>
          <TextField
            style={{ margin: 4 }}
            label="Nom de la planète"
            variant="outlined"
            fullWidth
            margin="none"
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
            margin="none"
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
            margin="none"
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
            margin="none"
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
      </Box>
    </Container>
  );
};

export default UpdatePlanetForm;
