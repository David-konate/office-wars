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
  IconButton,
  Grid,
} from "@mui/material";
import axios from "axios";
import moment from "moment";
import MessageDialog from "../message/MessageDialog";
import { Box } from "@mui/system";
import PhotoCamera from "@mui/icons-material/PhotoCamera";
import DeleteIcon from "@mui/icons-material/Delete";
const UpdateEventForm = ({ eventId }) => {
  const [isBusy, setIsBusy] = useState(true);
  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");
  const [planets, setPlanets] = useState([]);
  const [selectedPlanet, setSelectedPlanet] = useState("");
  const [eventImages, setEventImages] = useState([]);

  const [formData, setFormData] = useState({
    eventName: "",
    eventDescription: "",
    dateTime: "",
    planet_id: "",
  });

  useEffect(() => {
    fetchData();
  }, [eventId]);

  const fetchData = async () => {
    try {
      const resEvent = await axios.get(`events/${eventId}`);
      setFormData(resEvent.data);
      const resPlanets = await axios.get(`/planets`);
      setPlanets(resPlanets.data);
      setSelectedPlanet(resPlanets.data);
      setEventImages(resEvent.data.images);
      // Trouver la planète correspondant à celle de l'événement
      const eventPlanet = resPlanets.data.find(
        (planet) => planet.id === resEvent.data.planet_id
      );
      setSelectedPlanet(eventPlanet.id);
    } catch (error) {
      console.error("Erreur lors de la récupération des données :", error);
    } finally {
      setIsBusy(false);
    }
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post(`/events/${eventId}`, formData, {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      });
      // for (var pair of formData.entries()) {
      //   console.log(pair[0] + ", " + pair[1]);
      // }
      console.log("Réponse du serveur :", response.data);
      setDialogTitle("Succès");
      setDialogMessage(response.data.message);
      setOpenDialog(true);
      // Ajoutez ici des actions supplémentaires si nécessaire
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(error.message);
      setOpenDialog(true);
      console.error("Erreur lors de la mise à jour de l'événement :", error);
    }
  };

  const handleImageDelete = async (imageId) => {
    try {
      // Envoyer une requête pour supprimer l'image associée à l'événement
      const response = await axios.delete(`/images/${imageId}`);
      console.log("Réponse du serveur :", response.data);
      setDialogMessage(response.data.message);
      setOpenDialog(true);

      // Mettre à jour la liste des images après la suppression
      const updatedImages = eventImages.filter((image) => image.id !== imageId);
      setEventImages(updatedImages);
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(error.response.data.message);
      setOpenDialog(true);
      console.error("Erreur lors de la suppression de l'image :", error);
    }
  };

  const handleChangePlanet = (e) => {
    // Mettez à jour la valeur de la planète dans le formulaire
    setFormData((prevFormData) => ({
      ...prevFormData,
      planet_id: e.target.value,
    }));
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
      <Typography mt={5} variant="h4" align="center" gutterBottom>
        Mettre à jour l'événement
      </Typography>
      <form onSubmit={handleSubmit} encType="multipart/form-data">
        <TextField
          label="Nom de l'événement"
          variant="outlined"
          fullWidth
          margin="normal"
          name="eventName"
          value={formData.eventName}
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
          required
        />

        <TextField
          label="Date et heure de l'événement"
          type="date"
          variant="outlined"
          fullWidth
          margin="normal"
          name="dateTime"
          value={formData.dateTime}
          required
        />

        <InputLabel htmlFor="image">Image</InputLabel>
        <Input
          type="file"
          id="photoEvent"
          name="photoEvent[]"
          multiple
          onChange={(e) => {
            const files = e.target.files;
            setFormData((prevFormData) => ({
              ...prevFormData,
              photoEvent: files,
            }));
          }}
          endAdornment={
            <InputAdornment position="end">
              <PhotoCamera />
            </InputAdornment>
          }
        />
        <Box mt={3}>
          <Typography mt={3} mb={3} variant="h5" align="center" gutterBottom>
            Planète liée à l'évènement
          </Typography>
          <Select
            style={{ margin: 4, width: "100%" }}
            id="planet_id"
            name="planet_id"
            value={formData.planet_id} // Utilisez la propriété planet_id du formulaire
            onChange={handleChangePlanet} // Utilisez la fonction handleChangePlanet
          >
            {planets &&
              planets.map((planet) => (
                <MenuItem key={planet.id} value={planet.id}>
                  {planet.planetName}
                </MenuItem>
              ))}
          </Select>
        </Box>

        <Box mt={3}>
          <Button type="submit" variant="contained" color="primary" fullWidth>
            Mettre à jour l'événement
          </Button>
        </Box>
      </form>
      <Typography mt={3} variant="h5" align="center" gutterBottom>
        Images associées à l'événement
      </Typography>
      <Grid container spacing={2}>
        {eventImages.map((image, index) => (
          <Grid item xs={12} sm={6} md={4} key={index}>
            <Box
              className="img-detail-event"
              position="relative"
              style={{ marginBottom: 10 }}
            >
              <img
                src={`http://127.0.0.1:8000/storage/uploads/${image.imagePath}`}
                alt={`Event ${index}`}
                style={{ maxWidth: "100%" }}
              />
              <IconButton
                className="deleteButton"
                onClick={() => handleImageDelete(image.id)}
                style={{
                  position: "absolute",
                  top: 0,
                  right: 0,
                }}
              >
                <DeleteIcon />
              </IconButton>
            </Box>
          </Grid>
        ))}
      </Grid>
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
