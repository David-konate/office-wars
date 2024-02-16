// UpdateEventForm.js
import React, { useState, useEffect } from "react";
import {
  TextField,
  Button,
  Typography,
  Container,
  Select,
  InputAdornment,
  InputLabel,
  Input,
  MenuItem,
  CircularProgress,
} from "@mui/material";
import axios from "axios";
import MessageDialog from "../message/MessageDialog";
import { Box } from "@mui/system";
import PhotoCamera from "@mui/icons-material/PhotoCamera";

const UpdateEventForm = ({ eventId }) => {
  const [isBusy, setIsBusy] = useState(true);
  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");
  const [planets, setPlanets] = useState([]);
  const [selectedPlanet, setSelectedPlanet] = useState("");

  const [formData, setFormData] = useState({
    eventName: "",
    eventDescription: "",
    dateTime: "",
  });

  useEffect(() => {
    // Récupérer les données de l'événement à mettre à jour à partir de l'API

    fetchData();
  }, [eventId]);

  const fetchData = async () => {
    try {
      const resEvent = await axios.get(`/api/events/${eventId}`);
      setFormData(resEvent.data);
      const resPlanets = await axios.get(`/api/planets`);
      setPlanets(resPlanets.data);
    } catch (error) {
      console.error("Erreur lors de la récupération des données :", error);
    }
  };

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.put(`/api/events/${eventId}`, formData);
      console.log("Réponse du serveur :", response.data);
      setDialogTitle("Succès");
      setDialogMessage(response.data.message);
      setOpenDialog(true);
      // Ajoutez ici des actions supplémentaires si nécessaire
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(error.response.data.message);
      setOpenDialog(true);
      console.error("Erreur lors de la mise à jour de l'événement :", error);
    }
  };

  const handleDialogClose = () => {
    setOpenDialog(false);
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
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

        <InputLabel htmlFor="image">Image</InputLabel>
        <Input
          type="file"
          id="photoEvent"
          name="photoEvent[]"
          multiple
          endAdornment={
            <InputAdornment position="end">
              <PhotoCamera />
            </InputAdornment>
          }
        />
        <Typography mt={3} mb={3} variant="h5" align="center" gutterBottom>
          Planète lié a l'évènement
        </Typography>
        <Select
          style={{ margin: 4 }}
          id="planet_id"
          name="planet_id"
          fullWidth
          value={selectedPlanet}
          onChange={(e) => setSelectedPlanet(e.target.value)}
        >
          {planets &&
            planets.map((planet) => (
              <MenuItem key={planet.id} value={planet.id}>
                {planet.planetName}
              </MenuItem>
            ))}
        </Select>

        <Box mt={3}>
          <Button type="submit" variant="contained" color="primary" fullWidth>
            Créer l'événement
          </Button>
        </Box>
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

export default UpdateEventForm;
